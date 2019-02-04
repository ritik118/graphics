<?php

namespace ritik\dynamicgraphs;

use Illuminate\Support\ServiceProvider;

class DynamicGraphsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'dynamicgraphs');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/ritik/dynamicgraphs'),
        ]);
        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ]);
        $this->publishes([
            __DIR__.'/storage' => base_path('storage'),
        ]);
        $this->publishes([
        __DIR__.'/assets' => base_path('public/js'),
        ]);
        $this->publishes([
        __DIR__.'/layout' => base_path('resources/views/layouts'),
        ]);
        $this->publishes([
        __DIR__.'/seeds' => base_path('database/seeds'),
        ]);
    }

    
    public function register()
    {
    }
}
