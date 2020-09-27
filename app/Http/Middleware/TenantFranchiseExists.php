<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class TenantFranchiseExists
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
        $tenant = \Request::get("tenant");
        $franchise = $tenant->franchises()->where('url_prefix', Route::current()->franchise_url_prefix)->first();

        if(! $franchise)
            abort(404);

        $request->attributes->add(['franchise' => $franchise]);

        return $next($request);
    }
}
