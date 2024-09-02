<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MigrationServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom([
            database_path('migrations/Blog'),
            database_path('migrations/Service'),
            database_path('migrations/Project'),
            database_path('migrations/Team'),
            database_path('migrations/Product'),
        ]);
    }
}
