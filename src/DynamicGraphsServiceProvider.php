<?php

namespace ritik\dynamicgraphs;

use Illuminate\Support\ServiceProvider;

class DynamicGraphsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
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
        __DIR__.'/assets' => base_path('public/js');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
