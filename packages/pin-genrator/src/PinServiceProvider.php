<?php

namespace PinGenerator;

use Illuminate\Support\ServiceProvider;

class PinServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('PinGenerator\PinGeneratorController');
        $this->loadViewsFrom(__DIR__.'/views','PinGenerator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__. '/routes.php';
    }
}
