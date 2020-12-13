<?php

namespace Iqbal\SqliteCache;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Iqbal\SqliteCache\commands\SqliteCacheTable;
use Iqbal\SqliteCache\commands\SqliteCacheInstall;

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
                SqliteCacheInstall::class,
                SqliteCacheTable::class
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
