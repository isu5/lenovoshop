<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //中间件处理是否需要登录权限
        if(! Auth::guard('admin')->check()){
           return redirect('/admin/login');
        }
        return $next($request);
    }
}
