<?php

namespace App\Providers;

use App\View\Components\Activities;
use App\View\Components\CardStatistics;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('activities', Activities::class);
        Blade::component('card-statistics', CardStatistics::class);

    }
}
