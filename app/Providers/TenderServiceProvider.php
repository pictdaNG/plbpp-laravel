<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TenderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
      $this->app->bind('App\Repositories\Tender\TenderContract', 'App\Repositories\Tender\EloquentTenderRepository');

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
