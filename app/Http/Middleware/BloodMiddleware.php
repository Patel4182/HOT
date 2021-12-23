<?php

namespace App\Http\Middleware;

use Closure;

class BloodMiddleware
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
        if(\Auth::check() && \Auth::user()->isBlood())
        {
           return $next($request);      
        }
        return redirect('login-registration/login');
    }
}
