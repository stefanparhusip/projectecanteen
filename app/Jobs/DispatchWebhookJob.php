<?php

namespace App\Jobs;

use App\Models\Webhook;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Delivers a single webhook call with HMAC-SHA256 signing and automatic retries.
 *
 * Retry schedule (seconds): 30 → 60 → 120 → 300 → 600
 * After 5 failures the job is marked as failed.
 */
class DispatchWebhookJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 5;

    public int $timeout = 30;

    public function __construct(
        private readonly Webhook $webhook,
        private readonly string $eventName,
        private readonly array $eventPayload,
    ) {}

    /** Back-off in seconds between retries */
    public function backoff(): array
    {
        return [30, 60, 120, 300, 600];
    }

    public function handle(): void
    {
        $body = json_encode([
            'event' => $this->eventName,
            'timestamp' => now()->toIso8601String(),
            'data' => $this->eventPayload,
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        $signature = 'sha256='.hash_hmac('sha256', $body, $this->webhook->secret);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-USK-Event' => $this->eventName,
            'X-USK-Signature' => $signature,
        ])->timeout($this->timeout)->send('POST', $this->webhook->url, ['body' => $body]);

        if (! $response->successful()) {
            Log::warning("Webhook #{$this->webhook->id} [{$this->eventName}] HTTP {$response->status()} — will retry.");
            $this->release($this->getBackoffForAttempt());
        }
    }

    public function failed(\Throwable $e): void
    {
        Log::error("Webhook #{$this->webhook->id} [{$this->eventName}] definitively failed after {$this->tries} attempts: {$e->getMessage()}");
    }

    private function getBackoffForAttempt(): int
    {
        $backoff = $this->backoff();
        $attempt = $this->attempts() - 1; // 0-indexed

        return $backoff[min($attempt, count($backoff) - 1)];
    }
}
