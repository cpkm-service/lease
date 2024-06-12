<?php

namespace Cpkm\Lease;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Facades\Blade;

class LeaseServiceProvider extends ServiceProvider
{
    protected $events = [
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        $this->mergeConfigFrom(__DIR__.'/../config/lease.php', 'lease');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php','lease');
        $this->loadViewsFrom(__DIR__.'/../resources/views/lease', 'lease');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'lease');
        $this->loadMigrationsFrom(__DIR__ .'/../database/migrations');

        $this->publishes([
            __DIR__.'/../resources/views/lease' => resource_path('views/vendor/lease'),
        ], 'lease-views');

        $this->publishes([
            __DIR__.'/../lang' => lang_path('vendor/lease'),
        ], 'lease-translations');

        $this->publishes([
            __DIR__.'/../config/lease.php' => config_path('lease.php'),
        ], 'lease-config');
        
        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'lease-migrations');

        
        // Blade::componentNamespace('Cpkm\\Excel\\View\\Components\\Backend', 'backend');
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
