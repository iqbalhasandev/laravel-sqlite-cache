<?php

namespace Iqbal\SqliteCache\commands;

use PDO;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SqliteCacheInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sqlite-cache:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To install & publish all config files of sqlite-cache package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $config = File::copy(__DIR__ . '/../config/cache.php', config_path('cache.php'));
        if ($config) {
            $this->info("
        ==========================================
            Cache Config Modified.😌
        ==========================================
        ");
        } else {
            $this->error('
        ==========================================
            Cache Config Modify Field!😥
        ==========================================
        ');
            $this->error("
        ==========================================
            Please Rerun this Command!🙏
        ==========================================");
        }
        if (!File::exists(config('cache.stores.sqlite.database'))) {
            File::put(config('cache.stores.sqlite.database') ?? database_path('cache.sqlite'), '');
            $this->info("Sqlite File Created 🤗");
        }
        $this->info("
        ==========================================
            Sqlite Cache install Complete 😊
        ==========================================
        ");
        $this->info("
        ==========================================
        Now Run  php artisan sqlite-cache:table 🤗
        ==========================================
        ");
    }
}
