<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard =="candidat" && Auth::guard($guard)->check()) {
            return redirect('/jobpost');
        }
        if ($guard == "employeur" && Auth::guard($guard)->check()) {
            return redirect('/employeur');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/HOME');
        }

        return $next($request);
    }
}
