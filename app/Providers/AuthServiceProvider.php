<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->app['router']->matched(function (\Illuminate\Routing\Events\RouteMatched $event) {
            $route = $event->route;
            if (! in_array('guard', $route->getAction())) {
                return;
            }
            $routeGuard = Arr::last(Arr::wrap($route->getAction(), 'guard'));
            $this->app['auth']->resolveUsersUsing(function ($guard = null) use ($routeGuard) {
                return $this->app['auth']->guard($routeGuard)->user();
            });
            $this->app['auth']->setDefaultDriver($routeGuard);
        });
    }
}
