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
        if ($this->app->environment('production')) {
            // Served behind a proxy on another hostname: build every link from APP_URL.
            URL::forceRootUrl(config('app.url'));
            URL::forceScheme('https');
        } else {
            URL::forceScheme('http');
        }
    }
}
