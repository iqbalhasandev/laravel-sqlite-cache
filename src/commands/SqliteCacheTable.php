<?php

namespace Iqbal\SqliteCache\commands;

use PDO;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SqliteCacheTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sqlite-cache:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To Create Cache Table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function createTable()
    {
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (File::exists(config('cache.stores.sqlite.database'))) {
            $pdo = new PDO("sqlite:" . config('cache.stores.sqlite.database'));
            $commands = [
                'DROP TABLE IF EXISTS `cache`', 'CREATE TABLE IF NOT EXISTS "cache" (
        	"key"	varchar NOT NULL,
        	"value"	text NOT NULL,
        	"expiration"	integer NOT NULL
        )', 'CREATE UNIQUE INDEX IF NOT EXISTS "cache_key_unique" ON "cache" (
        	"key"
        )', 'COMMIT'
            ];

            foreach ($commands as $command) {
                $pdo->exec($command);
            }
            $this->info("
        ==========================================
            Cache Table Created.😌
        ==========================================
        ");
        } else {
            $this->error('
        ==========================================
            Sql File Not Found!😥
        ==========================================
        ');
            $this->error("
        ==========================================
        Please Run php artisan sqlite-cache:install !🙏
        ==========================================");
        }
    }
}
