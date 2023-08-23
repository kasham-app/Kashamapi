<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


         Passport::routes();

         Passport::tokensExpireIn(now()->addDays(2));
         Passport::refreshTokensExpireIn(now()->addDays(3));
         Passport::personalAccessTokensExpireIn(now()->addMonths(4));

        Passport::tokensCan([
            'view-email' => 'this application will be able to view your email',
            'update-account' => 'this application will be able to update your account except your password and transactions'
        ]);

        /**
         * If a client does not request
         * any specific scopes, you may configure your Passport server to attach default scope(s)
         */

        // Passport::setDefaultScope([
        //     'check-status',
        //     'place-orders',
        // ]);

        if (! $this->app->routesAreCached()) {
            Passport::routes();
        }
    }
}
