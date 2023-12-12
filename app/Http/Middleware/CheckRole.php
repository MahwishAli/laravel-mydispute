<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckRole
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
        // if (Auth::check() && Auth::user()->role->name == $role) {
        //     return $next($request);
        // }

        // abort(403, 'Unauthorized action.');
        if(!Session()->has('loginId')){
            return redirect('login')->with('fail','Unauthorized action');
        }
        return $next($request);
    }
}
