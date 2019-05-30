<?php

namespace App\Providers;

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


        Gate::define('categories', function ( $user) {
            if ($user->categories == 1) {
                return true;
            } else {
                return false;
            }
        });
            Gate::define('trips', function ( $user) {
                if ($user->trips == 1) {
                    return true;
                } else {
                    return false;
                }
            });
        Gate::define('admin', function ( $user) {
            if ($user->admin == 1) {
                return true;
            } else {
                return false;
            }
        });



    }
}
