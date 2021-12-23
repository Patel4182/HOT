<?php

namespace App\Http\Middleware;

use Closure;

class HospitalMiddleware
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
        if(\Auth::check() && \Auth::user()->isHospital())
        {
           return $next($request);      
        }
        return redirect('login-registration/login');
    }
}
