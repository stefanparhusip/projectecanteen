<?php

namespace App\Console\Commands;

use App\Services\BackupService;
use Illuminate\Console\Command;

class BackupCleanup extends Command
{
    protected $signature = 'backup:cleanup';

    protected $description = 'Delete expired backups according to their retention policy';

    public function handle(BackupService $service): int
    {
        $count = $service->cleanup();
        $this->info("Cleanup complete: {$count} expired backup(s) removed.");

        return self::SUCCESS;
    }
}
