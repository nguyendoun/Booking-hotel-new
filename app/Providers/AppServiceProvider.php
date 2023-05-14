<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        // if ($this->app->isLocal()) {
        //     // $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        //     // $this->app['request']->server->set('HTTP', true);
        //     dd('cặc');
            
        // } else {
        //     $this->app['request']->server->set('HTTPS', true);
        // }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        URL::forceScheme('http');
    }
}
