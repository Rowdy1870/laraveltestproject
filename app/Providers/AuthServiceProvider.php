<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
    $this->registerPolicies();

    Gate::define('view-karyawan', function ($user) {
        return $user->hasRole('user');
    });

    Gate::define('view-hrd', function ($user) {
        return $user->hasRole('hrd');
    });

    Gate::define('view-manager', function ($user) {
        return $user->hasRole('manager');
    });
    }
}
