<?php

namespace Iqbal\SqliteCache\driver;

use Illuminate\Support\Facades\DB;
use Illuminate\Cache\DatabaseStore;
use Illuminate\Support\Facades\Config;

/**
 * SqliteStore delegates to DatabaseStore but with an sqlite connection instead
 */
class SqliteStore extends DatabaseStore
{
    public function __construct()
    {
        // load the config or use the default
        $config = config('cache.stores.sqlite', [
            'driver' => 'sqlite',
            'table' => 'cache',
            'database' => database_path(env('CACHE_DATABASE') ?? 'cache.sqlite'),
            'prefix' => '',
        ]);

        // Set the temporary configuration
        Config::set('database.connections.sqlite_cache', [
            'driver' => 'sqlite',
            'database' => $config['database'],
            'prefix' => $config['prefix'],
        ]);

        $connection = app('db')->connection('sqlite_cache');
        parent::__construct($connection, $config['table'], $config['prefix']);
    }
}
