<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;    // Must Must use
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // custome direction
        Blade::if('admin', function () {
            return Auth::check() && Auth::user()->role == 'admin';

            // admin is just a directive name that i want to create
            // return korbe authentication check korbe login ache kina
            // && auth () jodi login means user hoy ebong er role ID 1 kina 

        });
        Blade::if('user', function () {
            return Auth::check() && Auth::user()->role == 'user';

            // admin is just a directive name that i want to create
            // return korbe authentication check korbe login ache kina
            // && auth () jodi login means user hoy ebong er role ID 1 kina 

        });
    }
}
