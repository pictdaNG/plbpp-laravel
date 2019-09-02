<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OcdsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Ocds\OcdsContract',
            'App\Repositories\Ocds\EloquentOcdsRepository');
    }
}
