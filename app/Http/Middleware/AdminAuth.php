<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->path()=='adminLoginForm' && $request->session()->has('admin')){
            return redirect('/admin');
        }elseif(!Session::has('admin')){
            return redirect('/adminForm');
        }else{
            return $next($request);
        }
    }
}
