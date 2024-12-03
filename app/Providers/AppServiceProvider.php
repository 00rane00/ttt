<?php

namespace App\Providers;

use App\services\simpleLogger\LoggerInterface;
use App\services\simpleLogger\SimpleLogger;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LoggerInterface::class, function ($app) {
            return new SimpleLogger();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


    }
}
