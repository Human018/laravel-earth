<?php

namespace Human018\LaravelEarth\Providers;

use Human018\LaravelEarth\Commands\EarthInit;
use Illuminate\Support\ServiceProvider;

class LaravelEarthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'earth');

        if ($this->app->runningInConsole()) {
            $this->commands([
                EarthInit::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}