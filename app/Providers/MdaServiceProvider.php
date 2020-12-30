<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MdaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('App\Repositories\Mda\MdaContract', 'App\Repositories\Mda\EloquentMdaRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
