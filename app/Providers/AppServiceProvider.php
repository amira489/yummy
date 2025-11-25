<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            \App\Http\Controllers\AdminController::class,
            function () {
                return new \App\Http\Controllers\AdminController();
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    Schema::defaultStringLength(191);
    }
}
