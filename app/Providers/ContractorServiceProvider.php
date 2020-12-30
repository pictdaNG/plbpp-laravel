<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContractorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('App\Repositories\Contractor\ContractorContract', 'App\Repositories\Contractor\EloquentContractorRepository');

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
