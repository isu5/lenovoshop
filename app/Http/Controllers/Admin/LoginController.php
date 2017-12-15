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

use Request;
use Auth;
use Captcha;
use Validator;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    //登录页
    public function loginForm(){

        return view('admin.login.index');
    }


    //处理登录
    public function login(){

        //判断验证码是否正确
        $rules = [
            "captcha" => 'required|captcha',
        ];
        $messages = [
            'captcha.required' => '请输入验证码',
            'captcha.captcha' => '验证码错误，请重试'
        ];
        //如果仅仅验证captcha的值可以
        //采用 Captcha::check(Input::get('cpt')); //返回bool

        $validator = Validator::make(Request::all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            //判断用户名密码是否正确
            $status = Auth::guard('admin')->attempt([
                'username' => Request::input('username'),
                'password' => Request::input('password'),
            ]);

            if($status){
                return redirect('/admin/index');
            }else{
                return back()->with('error','用户名或者密码错误');
            }

        }


        //dd($captcha);die;




    }

}
