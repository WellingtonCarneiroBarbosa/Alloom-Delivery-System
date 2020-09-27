<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check()) {
            switch ($guard) {
                case 'web':
                    $route = RouteServiceProvider::HOME;
                    break;

                case 'franchise':
                    $route = RouteServiceProvider::TENANT_HOME;
                    break;

                default:
                    abort(401, "Guard not found");
                    break;
            }
            return redirect($route);
        } else {
            return $next($request);
        }
    }
}
