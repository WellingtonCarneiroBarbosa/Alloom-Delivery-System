<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Alloom\Tenant;
use Illuminate\Support\Facades\Route;

class TenantExists
{
    /**
     * Custom parameters.
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     *
     * @api
     */
    public $attributes;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $tenant = Tenant::getTenantByUrlPrefix(Route::current()->tenant_url_prefix);

        if(! $tenant)
            abort(404);

        $request->attributes->add(['tenant' => $tenant]);

        return $next($request);
    }
}
