<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define a super admin user role */
        Gate::define('is-s', function ($user) {
            return $user->role == 'super-admin';
        });

        /* define a admin user role */
        Gate::define('is-a', function ($user) {
            return $user->role == 'admin';
        });

        /* define a admin and super admin user role */
        Gate::define('is-sa', function ($user) {
            return $user->role == 'super-admin' || $user->role == 'admin';
        });
    }
}
