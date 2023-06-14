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
    public function boot(): void
    {
        Gate::define('admin', function($user) {

            return $user->email === 'jan.polak@data4you.cz'
                || $user->email === 'anil@data4you.cz';

        });



        Gate::define('censor', function($user) {

            return in_array($user->email, [
                'jan.polak@data4you.cz',
                'anil@data4you.cz'
            ]);

        });



        Gate::define('employee', function($user) {

            return preg_match('#@data4you\.cz$#', $user->email);

        });
    }
}
