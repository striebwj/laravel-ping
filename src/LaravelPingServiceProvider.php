<?php

namespace Airranged\LaravelPing;

use Illuminate\Support\ServiceProvider;

class LaravelPingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laravel-ping', function () {
            return new Ping;
        });
    }
}
