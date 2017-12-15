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

//前台路由
Route::group(['namespace'=>'Home'],function(){
    //首页
    Route::get('/','IndexController@index');

});



//配置验证码路由
//Route::get('captcha','LoginController@mews');


//引入后台路由文件
include __DIR__ .'/admin/web.php';
