<?php

namespace App\Console\Commands;

use App\Models\BalanceTransaction;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GenerateReconciliationReport extends Command
{
    protected $signature = 'reports:reconcile {--date= : Tanggal target (Y-m-d), default kemarin}';

    protected $description = 'Generate laporan rekonsiliasi transaksi harian';

    public function handle(): int
    {
        $dateStr = $this->option('date');

        $date = $dateStr
            ? \Carbon\Carbon::createFromFormat('Y-m-d', $dateStr, 'Asia/Jakarta')->startOfDay()
            : now('Asia/Jakarta')->subDay()->startOfDay();

        $startOfDay = $date->copy()->startOfDay();
        $endOfDay = $date->copy()->endOfDay();

        $rows = BalanceTransaction::whereBetween('created_at', [$startOfDay, $endOfDay])
            ->with('user:id,name,email')
            ->get();

        $totalTopup = $rows->where('type', BalanceTransaction::TYPE_TOPUP)->sum('amount');
        $totalDebit = $rows->where('type', BalanceTransaction::TYPE_DEBIT)->sum('amount');
        $totalRefund = $rows->where('type', BalanceTransaction::TYPE_REFUND)->sum('amount');
        $netChange = $totalTopup + $totalRefund - $totalDebit;

        // Top 5 refunded users
        $topRefunded = $rows->where('type', BalanceTransaction::TYPE_REFUND)
            ->groupBy('user_id')
            ->map(fn ($group) => [
                'user_id' => $group->first()->user_id,
                'name' => $group->first()->user?->name ?? '(deleted)',
                'email' => $group->first()->user?->email ?? '',
                'total' => $group->sum('amount'),
                'count' => $group->count(),
            ])
            ->sortByDesc('total')
            ->take(5)
            ->values()
            ->toArray();

        $report = [
            'date' => $date->toDateString(),
            'generated_at' => now('Asia/Jakarta')->toIso8601String(),
            'transaction_count' => $rows->count(),
            'total_topup' => $totalTopup,
            'total_debit' => $totalDebit,
            'total_refund' => $totalRefund,
            'net_change' => $netChange,
            'top_refunded_users' => $topRefunded,
        ];

        // Save JSON report
        $dir = storage_path('app/reports/reconciliation');
        if (! is_dir($dir)) {
            mkdir($dir, 0775, true);
        }
        $filePath = $dir.'/'.$date->toDateString().'.json';
        file_put_contents($filePath, json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        // Log summary
        $summary = sprintf(
            '[%s] Rekonsiliasi %s — Transaksi: %d | Topup: %s | Debit: %s | Refund: %s | Net: %s',
            now('Asia/Jakarta')->toDateTimeString(),
            $date->toDateString(),
            $report['transaction_count'],
            number_format($totalTopup, 0, ',', '.'),
            number_format($totalDebit, 0, ',', '.'),
            number_format($totalRefund, 0, ',', '.'),
            number_format($netChange, 0, ',', '.')
        );

        Log::channel('daily')->info($summary);
        $this->line($summary);

        $this->info("Laporan disimpan: {$filePath}");

        return self::SUCCESS;
    }
}
