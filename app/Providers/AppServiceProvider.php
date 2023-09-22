<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        $this->publishes([
        'node_modules/gijgo' => public_path('plugins/gijgo'),
        'node_modules/chart.js' => public_path('plugins/chart.js'),
        'node_modules/axios/dist' => public_path('plugins/axios'),
    ], 'npm');
    }
}
