<?php
/******************************************************************
 *  爱酥在线商城
 * +-----------------------------------------------------------------
 * | [爱酥在线商城] shop.isu5.com
 * | @Copyright (C) 2017  http://www.aliphp.cn   All rights reserved.
 * | @Team  ylnmp.com
 * | @Author: 竹子贤 QQ:396691677
 * | @Licence http://www.aliphp.cn/license.txt
 * | @Last Modified time: 2017/12/14
 *+------------------------------------------------------------------
 */


Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){

    //登录页表单
    Route::get('/login','LoginController@loginForm');
    //处理登录
    Route::post('/login','LoginController@login');

    //后台首页
    Route::get('/index','IndexController@index');

	Route::resource('/posts', 'PostController');
	Route::resource('/users', 'UserHandleController');
	Route::resource('/permissions', 'PermissionController');
	Route::resource('/roles', 'RoleController');


});


