<?php

namespace App\Jobs;

use App\Services\BackupService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class BackupDatabaseJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;

    public int $timeout = 600; // 10 minutes

    public function __construct(
        private readonly int $retentionDays = 30,
        private readonly ?string $note = null,
    ) {}

    public function handle(BackupService $service): void
    {
        $backup = $service->run($this->retentionDays, $this->note);

        Log::info("BackupDatabaseJob: backup #{$backup->id} completed ({$backup->human_size}).");
    }

    public function failed(\Throwable $e): void
    {
        Log::error("BackupDatabaseJob: backup FAILED — {$e->getMessage()}");
    }
}
