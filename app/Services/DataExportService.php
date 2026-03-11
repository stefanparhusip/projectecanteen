<?php

namespace App\Services;

use App\Models\ConsentLog;
use App\Models\DataExportRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DataExportService
{
    /** How many days before an export link expires */
    private const EXPIRY_HOURS = 48;

    /**
     * Generate the export file for the given request, persist it, and
     * mark the request as "ready".
     */
    public function generate(DataExportRequest $exportRequest): void
    {
        $exportRequest->update(['status' => 'processing']);

        try {
            $user    = $exportRequest->user;
            $payload = $this->buildPayload($user);

            if ($exportRequest->format === 'csv') {
                $content  = $this->toCsv($payload);
                $mimeHint = 'csv';
            } else {
                $content  = json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                $mimeHint = 'json';
            }

            $path = "exports/user_{$user->id}_{$exportRequest->id}.{$mimeHint}";
            Storage::disk('local')->put($path, $content);

            $exportRequest->update([
                'status'       => 'ready',
                'file_path'    => $path,
                'file_size'    => strlen($content),
                'expires_at'   => Carbon::now()->addHours(self::EXPIRY_HOURS),
                'completed_at' => Carbon::now(),
            ]);

            ConsentLog::create([
                'user_id'    => $user->id,
                'action'     => 'data_export_completed',
                'metadata'   => ['export_id' => $exportRequest->id, 'format' => $exportRequest->format],
                'ip_address' => $exportRequest->ip_address,
            ]);
        } catch (\Throwable $e) {
            $exportRequest->update(['status' => 'failed']);
            throw $e;
        }
    }

    /**
     * Return a streamed download response and mark request as downloaded.
     */
    public function download(DataExportRequest $exportRequest): StreamedResponse
    {
        $path = $exportRequest->file_path;

        if ($exportRequest->format === 'csv') {
            $mime     = 'text/csv';
            $filename = "my-data-{$exportRequest->id}.csv";
        } else {
            $mime     = 'application/json';
            $filename = "my-data-{$exportRequest->id}.json";
        }

        $exportRequest->update([
            'status'        => 'downloaded',
            'downloaded_at' => Carbon::now(),
        ]);

        return Storage::disk('local')->download($path, $filename, [
            'Content-Type' => $mime,
        ]);
    }

    /**
     * Expire export files that have passed their expiry timestamp.
     * Called by the scheduled cleanup command.
     */
    public function expireOld(): int
    {
        $expired = DataExportRequest::query()
            ->where('status', 'ready')
            ->where('expires_at', '<', Carbon::now())
            ->get();

        foreach ($expired as $req) {
            if ($req->file_path && Storage::disk('local')->exists($req->file_path)) {
                Storage::disk('local')->delete($req->file_path);
            }
            $req->update(['status' => 'expired', 'file_path' => null]);
        }

        return $expired->count();
    }

    // ── Private helpers ──────────────────────────────────────────────────────

    private function buildPayload(User $user): array
    {
        return [
            'exported_at' => Carbon::now()->toIso8601String(),
            'profile'     => [
                'name'              => $user->name,
                'email'             => $user->email,
                'role'              => $user->role,
                'balance'           => (float) $user->balance,
                'points_balance'    => $user->points_balance,
                'created_at'        => $user->created_at?->toIso8601String(),
            ],
            'orders' => $user->orders()
                ->with('items')
                ->orderByDesc('created_at')
                ->get()
                ->map(fn ($o) => [
                    'id'              => $o->id,
                    'status'          => $o->status,
                    'total_price'     => (float) $o->total_price,
                    'discount_amount' => (float) $o->discount_amount,
                    'note'            => $o->note,
                    'ordered_at'      => $o->ordered_at?->toIso8601String(),
                    'items'           => $o->items->map(fn ($i) => [
                        'menu_name'  => $i->menu_name,
                        'quantity'   => $i->quantity,
                        'unit_price' => (float) $i->unit_price,
                    ])->all(),
                ])->all(),
            'balance_transactions' => $user->balanceTransactions()
                ->orderByDesc('created_at')
                ->get()
                ->map(fn ($t) => [
                    'type'           => $t->type,
                    'amount'         => (float) $t->amount,
                    'balance_before' => (float) $t->balance_before,
                    'balance_after'  => (float) $t->balance_after,
                    'description'    => $t->description,
                    'created_at'     => $t->created_at?->toIso8601String(),
                ])->all(),
        ];
    }

    private function toCsv(array $payload): string
    {
        $handle = fopen('php://temp', 'r+');

        // Profile section
        fputcsv($handle, ['section', 'field', 'value']);
        foreach ($payload['profile'] as $field => $value) {
            fputcsv($handle, ['profile', $field, $value]);
        }

        // Orders
        fputcsv($handle, []);
        fputcsv($handle, ['order_id', 'status', 'total_price', 'discount_amount', 'note', 'ordered_at']);
        foreach ($payload['orders'] as $order) {
            fputcsv($handle, [
                $order['id'],
                $order['status'],
                $order['total_price'],
                $order['discount_amount'],
                $order['note'] ?? '',
                $order['ordered_at'] ?? '',
            ]);
        }

        // Balance transactions
        fputcsv($handle, []);
        fputcsv($handle, ['type', 'amount', 'balance_before', 'balance_after', 'description', 'created_at']);
        foreach ($payload['balance_transactions'] as $tx) {
            fputcsv($handle, [
                $tx['type'],
                $tx['amount'],
                $tx['balance_before'],
                $tx['balance_after'],
                $tx['description'] ?? '',
                $tx['created_at'] ?? '',
            ]);
        }

        rewind($handle);
        $csv = stream_get_contents($handle);
        fclose($handle);

        return (string) $csv;
    }
}
