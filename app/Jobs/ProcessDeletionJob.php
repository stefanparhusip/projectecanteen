<?php

namespace App\Jobs;

use App\Models\DeletionRequest;
use App\Services\DataPrivacyService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessDeletionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 1; // must not retry partial anonymization

    public int $timeout = 60;

    public function __construct(public readonly DeletionRequest $deletionRequest) {}

    public function handle(DataPrivacyService $service): void
    {
        $service->anonymize($this->deletionRequest);
    }
}
