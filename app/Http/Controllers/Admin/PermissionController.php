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
