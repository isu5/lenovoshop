<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$roles = Role::all();// 获取所有角色

		return view('roles.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$permissions = Permission::all();// 获取所有权限

		return view('roles.create', ['permissions'=>$permissions]);
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
		//验证 name 和 permissions 字段
       $this->validate($request, [
               'name'=>'required|unique:roles|max:10',
               'permissions' =>'required',
           ]
       );

       $name = $request['name'];
       $role = new Role();
       $role->name = $name;

       $permissions = $request['permissions'];

       $role->save();
        $p_all = Permission::all()->pluck('id');//获取所有权限
        $p = Permission::whereIn('id', $permissions)->pluck('id');
        //移除
        $role->revokePermissionTo($p_all);
        //附加
        $role->givePermissionTo($p);
       return redirect()->route('roles.index')
           ->with('flash_message','Role'. $role->name.' added!');
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
		$role = Role::findOrFail($id);
		$permissions = Permission::all();

		return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$role = Role::findOrFail($id); // 通过给定id获取角色
       // 验证 name 和 permission 字段
       $this->validate($request, [
           'name'=>'required|max:10|unique:roles,name,'.$id,
           'permissions' =>'required',
       ]);

       $input = $request->except(['permissions']);
       $permissions = $request['permissions'];
       $role->fill($input)->save();

      //移除。2018-6-26更新
        $p = Permission::whereIn('id', $permissions)->pluck('id');
        $role->givePermissionTo($p);

       foreach ($permissions as $permission) {
           $p = Permission::where('id', '=', $permission)->firstOrFail(); //从数据库中获取相应权限
           $role->givePermissionTo($p);  // 分配权限到角色
       }
		return redirect()->route('roles.index') ->with('flash_message', 'Role'. $role->name.' updated!');
  
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
}
