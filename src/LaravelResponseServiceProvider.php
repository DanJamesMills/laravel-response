<?php

namespace DanJamesMills\LaravelResponse;

use Illuminate\Support\ServiceProvider;

class LaravelResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-response.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-response');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-response', function () {
            return new LaravelResponse;
        });
    }
}
