<?php

namespace App\Providers;

use App\Services\DataService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(DataService::class, function ($app) {
            return new DataService;
        });
        require_once app_path('Helpers/Utilities.php');
        require_once app_path('Helpers/Format.php');
        require_once app_path('Helpers/Sanitize.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
