<?php

namespace App\Http\Middleware;

use Closure;

class FranchiseSessions
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
        if(! $request->session()->has('franchise_id')) {
            $request->session()->put('franchise_id', app('franchise')->id);

            return $next($request);
        }

        if($request->session()->get('franchise_id') != app('franchise')->id) {
            abort(401);
        }

        return $next($request);
    }
}
