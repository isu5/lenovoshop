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
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
class IndexController extends CommonController
{
    //后台首页
    public function index(){

        return view('admin.index.index');
    }




}
