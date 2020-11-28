<?php

namespace Iqbal\SqliteCache;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class SqliteCacheProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\SqliteCacheInstall::class,
                Commands\SqliteCacheTable::class
            ]);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Cache::extend('sqlite', function ($app) {
            return Cache::repository(new \Iqbal\SqliteCache\driver\SqliteStore);
        });
    }
}
