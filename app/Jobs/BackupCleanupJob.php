<?php

namespace App\Jobs;

use App\Services\BackupService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class BackupCleanupJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1;

    public function handle(BackupService $service): void
    {
        $deleted = $service->cleanup();

        Log::info("BackupCleanupJob: removed {$deleted} expired backup(s).");
    }
}
