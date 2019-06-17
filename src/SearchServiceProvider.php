<?php

namespace Mawdoo3\Search;

use Illuminate\Support\ServiceProvider;

class SearchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/views/","search");
        $this->loadMigrationsFrom(__DIR__."/database/migrations");
        $this->mergeConfigFrom(__DIR__."/config/sp_mawdoo3_laravel.php",'search');
        $this->publishes([__DIR__.'/config/sp_mawdoo3_laravel.php'  => config_path('search.php')]);
    }
}
