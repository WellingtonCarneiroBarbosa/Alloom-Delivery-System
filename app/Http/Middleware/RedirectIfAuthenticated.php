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
                case 'alloom_customer_user':
                    $route = RouteServiceProvider::HOME;
                    break;

                case 'alloom_user':
                    $route = RouteServiceProvider::ALLOOM_HOME;
                    break;

                default:
                    abort(422, "Guard not found");
                    break;
            }
            return redirect($route);
        } else {
            return $next($request);
        }
    }
}
