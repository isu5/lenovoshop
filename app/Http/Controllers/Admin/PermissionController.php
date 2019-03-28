<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index() {
         $permissions = Permission::all(); // 获取所有权限

         return view('permissions.index')->with('permissions', $permissions);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$roles = Role::get(); // 获取所有角色
		return view('permissions.create')->with('roles', $roles);
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$this->validate($request, [
             'name'=>'required|max:40',
         ]);

         $name = $request['name'];
         $permission = new Permission();
         $permission->name = $name;

         $roles = $request['roles'];

         $permission->save();

         if (!empty($request['roles'])) { // 如果选择了角色
             foreach ($roles as $role) {
                 $r = Role::where('id', '=', $role)->firstOrFail(); // 将输入角色和数据库记录进行匹配

                 $permission = Permission::where('name', '=', $name)->first(); // 将输入权限与数据库记录进行匹配
                 $r->givePermissionTo($permission);
             }
         }

        return redirect()->route('permissions.index')
        ->with('flash_message','Permission'. $permission->name.' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$permission = Permission::findOrFail($id);

         return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function update(Request $request, $id) {
		$permission = Permission::findOrFail($id);
		$this->validate($request, [
		 'name'=>'required|max:40',
		]);
		$input = $request->all();
		$permission->fill($input)->save();
		//个人喜欢控制器地址或者是路由地址，不喜欢用url，因为这个是写死的，很容易出问题，如果迁移的话
		return redirect()->route('permissions.index')
			->with('flash_message','Permission'. $permission->name.' updated!');

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function givePermissionTo($permissions)
    {
        //集合对象
       $permissions = collect($permissions)
           //flatten() 方法将多维度的集合变成一维的：
            ->flatten()
        //map 方法遍历集合并传递每个值给给定回调。该回调可以修改数据项并返回，从而生成一个新的经过修改的集合
            ->map(function ($permission) {
                return $this->getStoredPermission($permission);
            })
            ->each(function ($permission) {
                $this->ensureModelSharesGuard($permission);
            })
            ->all();

        $this->permissions()->saveMany($permissions);

        $this->forgetCachedPermissions();

        return $this;
    }
	
	protected function getStoredPermission($permissions)
    {
        if (is_numeric($permissions)) {
            return app(Permission::class)->findById($permissions, $this->getDefaultGuardName());
        }

        if (is_string($permissions)) {
            return app(Permission::class)->findByName($permissions, $this->getDefaultGuardName());
        }

        if (is_array($permissions)) {
            return app(Permission::class)
                ->whereIn('name', $permissions)
                ->whereIn('guard_name', $this->getGuardNames())
                ->get();
        }

        return $permissions;
    }
}
