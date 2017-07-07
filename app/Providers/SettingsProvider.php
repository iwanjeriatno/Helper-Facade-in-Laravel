<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('settings', function() {
            return new \App\Classes\Settings;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
