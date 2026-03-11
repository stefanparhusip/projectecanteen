<?php

namespace App\Console\Commands;

use App\Jobs\BackupDatabaseJob;
use App\Services\BackupService;
use Illuminate\Console\Command;

class BackupDatabase extends Command
{
    protected $signature = 'backup:run
        {--retention=30 : Retention in days (14, 30, or 90)}
        {--note= : Optional descriptive note stored with the backup}
        {--queue : Dispatch to queue instead of running synchronously}';

    protected $description = 'Create an encrypted database backup';

    public function handle(BackupService $service): int
    {
        $retention = (int) $this->option('retention');

        if (! in_array($retention, BackupService::RETENTION_OPTIONS, true)) {
            $this->error(
                'Invalid --retention value. Allowed: '.implode(', ', BackupService::RETENTION_OPTIONS)
            );

            return self::FAILURE;
        }

        $note = $this->option('note') ?: null;

        if ($this->option('queue')) {
            BackupDatabaseJob::dispatch($retention, $note);
            $this->info("Backup job dispatched to queue (retention={$retention}d).");

            return self::SUCCESS;
        }

        $this->info("Creating {$retention}-day backup…");

        try {
            $backup = $service->run($retention, $note);
        } catch (\Throwable $e) {
            $this->error("Backup failed: {$e->getMessage()}");

            return self::FAILURE;
        }

        $this->info('Backup completed successfully.');
        $this->table(
            ['Field', 'Value'],
            [
                ['ID',         $backup->id],
                ['Filename',   $backup->filename],
                ['Size',       $backup->human_size],
                ['Retention',  "{$backup->retention_days} days"],
                ['Expires',    $backup->expires_at->format('Y-m-d')],
                ['Checksum',   $backup->checksum],
            ]
        );

        return self::SUCCESS;
    }
}
