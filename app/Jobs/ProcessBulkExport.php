<?php

namespace App\Jobs;

use App\Models\BalanceTransaction;
use App\Models\ExportJob;
use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProcessBulkExport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** Rows processed per DB chunk to keep memory usage bounded. */
    private const CHUNK_SIZE = 500;

    public function __construct(private readonly ExportJob $exportJob) {}

    public function handle(): void
    {
        $this->exportJob->markProcessing();

        try {
            [$path, $rows] = match ($this->exportJob->type) {
                ExportJob::TYPE_TRANSACTIONS => $this->exportTransactions(),
                ExportJob::TYPE_ORDERS => $this->exportOrders(),
                ExportJob::TYPE_USERS => $this->exportUsers(),
                default => throw new \InvalidArgumentException("Unknown export type: {$this->exportJob->type}"),
            };

            $this->exportJob->markDone($path, $rows);
        } catch (Throwable $e) {
            $this->exportJob->markFailed($e->getMessage());
            throw $e;
        }
    }

    // ── Per-type exporters ────────────────────────────────────────────────────

    private function exportTransactions(): array
    {
        $filters = $this->exportJob->filters ?? [];
        $fileName = 'exports/transactions_'.$this->exportJob->id.'.csv';
        $rows = 0;

        $handle = $this->openCsvFile($fileName, [
            'ID', 'User', 'Type', 'Amount (Rp)', 'Note', 'Created At',
        ]);

        $query = BalanceTransaction::with('user')
            ->when(isset($filters['date_from']), fn ($q) => $q->whereDate('created_at', '>=', $filters['date_from']))
            ->when(isset($filters['date_to']), fn ($q) => $q->whereDate('created_at', '<=', $filters['date_to']))
            ->when(isset($filters['type']), fn ($q) => $q->where('type', $filters['type']))
            ->orderBy('created_at');

        $query->chunkById(self::CHUNK_SIZE, function ($transactions) use ($handle, &$rows) {
            foreach ($transactions as $t) {
                fputcsv($handle, [
                    $t->id,
                    $t->user->name ?? '-',
                    $t->type,
                    $t->amount,
                    $t->note ?? '',
                    $t->created_at->toDateTimeString(),
                ]);
                $rows++;
            }
        });

        fclose($handle);

        return [$fileName, $rows];
    }

    private function exportOrders(): array
    {
        $filters = $this->exportJob->filters ?? [];
        $fileName = 'exports/orders_'.$this->exportJob->id.'.csv';
        $rows = 0;

        $handle = $this->openCsvFile($fileName, [
            'ID', 'User', 'Break Time', 'Status', 'Total (Rp)', 'Ordered At',
        ]);

        $query = Order::with(['user', 'breakTime'])
            ->when(isset($filters['date_from']), fn ($q) => $q->whereDate('ordered_at', '>=', $filters['date_from']))
            ->when(isset($filters['date_to']), fn ($q) => $q->whereDate('ordered_at', '<=', $filters['date_to']))
            ->when(isset($filters['status']), fn ($q) => $q->where('status', $filters['status']))
            ->orderBy('ordered_at');

        $query->chunkById(self::CHUNK_SIZE, function ($orders) use ($handle, &$rows) {
            foreach ($orders as $order) {
                fputcsv($handle, [
                    $order->id,
                    $order->user->name ?? '-',
                    $order->breakTime->name ?? '-',
                    $order->status,
                    $order->total_price,
                    $order->ordered_at->toDateTimeString(),
                ]);
                $rows++;
            }
        });

        fclose($handle);

        return [$fileName, $rows];
    }

    private function exportUsers(): array
    {
        $filters = $this->exportJob->filters ?? [];
        $fileName = 'exports/users_'.$this->exportJob->id.'.csv';
        $rows = 0;

        $handle = $this->openCsvFile($fileName, [
            'ID', 'Name', 'Email', 'Role', 'Balance (Rp)', 'Created At',
        ]);

        $query = User::query()
            ->when(isset($filters['role']), fn ($q) => $q->where('role', $filters['role']))
            ->when(isset($filters['date_from']), fn ($q) => $q->whereDate('created_at', '>=', $filters['date_from']))
            ->when(isset($filters['date_to']), fn ($q) => $q->whereDate('created_at', '<=', $filters['date_to']))
            ->orderBy('created_at');

        $query->chunkById(self::CHUNK_SIZE, function ($users) use ($handle, &$rows) {
            foreach ($users as $user) {
                fputcsv($handle, [
                    $user->id,
                    $user->name,
                    $user->email,
                    $user->role,
                    $user->balance,
                    $user->created_at->toDateTimeString(),
                ]);
                $rows++;
            }
        });

        fclose($handle);

        return [$fileName, $rows];
    }

    // ── Helpers ───────────────────────────────────────────────────────────────

    /**
     * Open (or create) a CSV file in storage, write the UTF-8 BOM + header row,
     * and return the file handle.
     *
     * @param  string[]  $headers
     * @return resource
     */
    private function openCsvFile(string $relativePath, array $headers)
    {
        Storage::disk('local')->makeDirectory('exports');

        // Use Storage::path() so Storage::fake() redirects correctly in tests
        $fullPath = Storage::disk('local')->path($relativePath);
        $handle = fopen($fullPath, 'w');

        // UTF-8 BOM so Excel opens the file correctly
        fwrite($handle, "\xEF\xBB\xBF");
        fputcsv($handle, $headers);

        return $handle;
    }
}
