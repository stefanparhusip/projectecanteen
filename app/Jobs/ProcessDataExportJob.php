<?php

namespace App\Jobs;

use App\Models\DataExportRequest;
use App\Services\DataExportService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessDataExportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 120;

    public function __construct(public readonly DataExportRequest $exportRequest) {}

    public function handle(DataExportService $service): void
    {
        $service->generate($this->exportRequest);
    }
}
