<?php
/******************************************************************
 *  公共控制器
 * +-----------------------------------------------------------------
 * | [爱酥在线商城] shop.isu5.com
 * | @Copyright (C) 2017  http://www.aliphp.cn   All rights reserved.
 * | @Team  ylnmp.com
 * | @Author: 竹子贤 QQ:396691677
 * | @Licence http://www.aliphp.cn/license.txt
 * | @Last Modified time: 2017/12/14
 *+------------------------------------------------------------------
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

abstract class CommonController extends Controller{

    public function __construct(){
        //执行中间件，验证是否登录 ,排除loginForm,login两个不需要验证的方法
        $this->middleware('admin.auth')->except(['loginForm','login']);
    }
}
