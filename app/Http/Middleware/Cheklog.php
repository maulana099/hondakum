<?php

namespace App\Http\Middleware;

use Closure;

class Cheklog
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
        if(!$request->session()->has('login')){
            return $next($request);
        }
        return redirect('/admin-honda/login');
    }
}
