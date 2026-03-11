<?php

namespace App\Console\Commands;

use App\Models\Anomaly;
use App\Models\BalanceTransaction;
use App\Models\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * DetectAnomalies
 *
 * Computes a rolling baseline (mean ± stddev) for hourly order/refund/topup
 * counts using the past 28 days of history, then flags the most recently
 * completed full hour if its observed value exceeds the threshold.
 *
 * Usage:
 *   php artisan anomalies:detect              # analyses the last completed hour
 *   php artisan anomalies:detect --hours=3   # analyses the last N hours
 *   php artisan anomalies:detect --sigma=3   # custom sigma threshold (default 2)
 *   php artisan anomalies:detect --dry-run   # print result without persisting
 */
class DetectAnomalies extends Command
{
    protected $signature = 'anomalies:detect
                            {--hours=1   : Number of past completed hours to analyse}
                            {--sigma=2   : Sigma threshold above which a flag is raised}
                            {--days=28   : Days of history used to build the baseline}
                            {--dry-run   : Print results without writing to the DB}';

    protected $description = 'Detect order / refund / topup anomalies and flag them in the anomalies table';

    // ── Entry point ───────────────────────────────────────────────────────────

    public function handle(): int
    {
        $sigmaThreshold = (float) $this->option('sigma');
        $historyDays = (int) $this->option('days');
        $hoursBack = (int) $this->option('hours');
        $dryRun = (bool) $this->option('dry-run');

        $flagged = 0;

        for ($h = $hoursBack; $h >= 1; $h--) {
            // The completed hour that is $h hours before now
            $windowEnd = now()->startOfHour()->subHours($h - 1);    // exclusive end
            $windowStart = $windowEnd->copy()->subHour();              // inclusive start

            // ── Orders ───────────────────────────────────────────────────────
            $flagged += $this->analyseMetric(
                type: Anomaly::TYPE_ORDER_SPIKE,
                windowStart: $windowStart,
                windowEnd: $windowEnd,
                historyDays: $historyDays,
                sigmaThreshold: $sigmaThreshold,
                dryRun: $dryRun,
                observed: $this->countOrders($windowStart, $windowEnd),
                baseline: $this->buildOrderBaseline($windowStart, $historyDays),
                context: $this->orderContext($windowStart, $windowEnd),
            );

            // ── Refunds ──────────────────────────────────────────────────────
            $flagged += $this->analyseMetric(
                type: Anomaly::TYPE_REFUND_SPIKE,
                windowStart: $windowStart,
                windowEnd: $windowEnd,
                historyDays: $historyDays,
                sigmaThreshold: $sigmaThreshold,
                dryRun: $dryRun,
                observed: $this->countRefunds($windowStart, $windowEnd),
                baseline: $this->buildRefundBaseline($windowStart, $historyDays),
                context: $this->refundContext($windowStart, $windowEnd),
            );

            // ── Top-Ups ──────────────────────────────────────────────────────
            $flagged += $this->analyseMetric(
                type: Anomaly::TYPE_TOPUP_SPIKE,
                windowStart: $windowStart,
                windowEnd: $windowEnd,
                historyDays: $historyDays,
                sigmaThreshold: $sigmaThreshold,
                dryRun: $dryRun,
                observed: $this->countTopups($windowStart, $windowEnd),
                baseline: $this->buildTopupBaseline($windowStart, $historyDays),
                context: $this->topupContext($windowStart, $windowEnd),
            );
        }

        $this->info("DetectAnomalies complete — {$flagged} anomal".($flagged === 1 ? 'y' : 'ies').' flagged.');
        Log::channel('single')->info('anomalies:detect', [
            'flagged' => $flagged,
            'sigma' => $sigmaThreshold,
            'hours_back' => $hoursBack,
            'dry_run' => $dryRun,
        ]);

        return Command::SUCCESS;
    }

    // ── Core logic ────────────────────────────────────────────────────────────

    /**
     * Compare observed value against the baseline; persist anomaly if threshold exceeded.
     */
    private function analyseMetric(
        string $type,
        \Carbon\Carbon $windowStart,
        \Carbon\Carbon $windowEnd,
        int $historyDays,
        float $sigmaThreshold,
        bool $dryRun,
        int $observed,
        array $baseline,
        array $context,
    ): int {
        ['mean' => $mean, 'stddev' => $stddev] = $baseline;

        // If stddev is 0 (e.g., flat history), use a floor of 1 to avoid ÷0
        $effectiveStddev = max($stddev, 1.0);
        $sigma = ($observed - $mean) / $effectiveStddev;

        $label = sprintf('[%s] %s window=%s observed=%d mean=%.2f stddev=%.2f sigma=%.2f threshold=%.1f',
            $windowStart->format('Y-m-d H:i'),
            $type, 'hourly', $observed, $mean, $stddev, $sigma, $sigmaThreshold,
        );

        if ($sigma <= $sigmaThreshold) {
            $this->line("  OK     {$label}");

            return 0;
        }

        $this->warn("  ALERT  {$label}");

        if (! $dryRun) {
            // Avoid inserting a duplicate if the job is re-run within the same hour
            Anomaly::firstOrCreate(
                [
                    'type' => $type,
                    'window' => 'hourly',
                    'detected_at' => $windowStart,
                ],
                [
                    'observed_value' => $observed,
                    'baseline_mean' => round($mean, 2),
                    'baseline_stddev' => round($stddev, 2),
                    'sigma' => round($sigma, 2),
                    'resolved' => false,
                    'context' => $context,
                ]
            );
        }

        return 1;
    }

    // ── Observed-value counters ───────────────────────────────────────────────

    private function countOrders(\Carbon\Carbon $from, \Carbon\Carbon $to): int
    {
        return Order::whereBetween('ordered_at', [$from, $to])->count();
    }

    private function countRefunds(\Carbon\Carbon $from, \Carbon\Carbon $to): int
    {
        return BalanceTransaction::where('type', BalanceTransaction::TYPE_REFUND)
            ->whereBetween('created_at', [$from, $to])
            ->count();
    }

    private function countTopups(\Carbon\Carbon $from, \Carbon\Carbon $to): int
    {
        return BalanceTransaction::where('type', BalanceTransaction::TYPE_TOPUP)
            ->whereBetween('created_at', [$from, $to])
            ->count();
    }

    // ── Baseline builders (rolling mean ± stddev for same hour-of-day) ────────

    /**
     * Returns ['mean' => float, 'stddev' => float] using the same hour-of-day
     * across the past $days days as the sample.
     */
    private function buildOrderBaseline(\Carbon\Carbon $windowStart, int $days): array
    {
        $hourOfDay = (int) $windowStart->format('H');
        $samples = [];

        for ($d = 1; $d <= $days; $d++) {
            $from = $windowStart->copy()->subDays($d)->startOfHour();
            $from->setTime($hourOfDay, 0, 0);
            $to = $from->copy()->addHour();

            $samples[] = Order::whereBetween('ordered_at', [$from, $to])->count();
        }

        return $this->statistics($samples);
    }

    private function buildRefundBaseline(\Carbon\Carbon $windowStart, int $days): array
    {
        $hourOfDay = (int) $windowStart->format('H');
        $samples = [];

        for ($d = 1; $d <= $days; $d++) {
            $from = $windowStart->copy()->subDays($d)->startOfHour();
            $from->setTime($hourOfDay, 0, 0);
            $to = $from->copy()->addHour();

            $samples[] = BalanceTransaction::where('type', BalanceTransaction::TYPE_REFUND)
                ->whereBetween('created_at', [$from, $to])
                ->count();
        }

        return $this->statistics($samples);
    }

    private function buildTopupBaseline(\Carbon\Carbon $windowStart, int $days): array
    {
        $hourOfDay = (int) $windowStart->format('H');
        $samples = [];

        for ($d = 1; $d <= $days; $d++) {
            $from = $windowStart->copy()->subDays($d)->startOfHour();
            $from->setTime($hourOfDay, 0, 0);
            $to = $from->copy()->addHour();

            $samples[] = BalanceTransaction::where('type', BalanceTransaction::TYPE_TOPUP)
                ->whereBetween('created_at', [$from, $to])
                ->count();
        }

        return $this->statistics($samples);
    }

    // ── Context builders (for the anomaly audit record) ─────────────────────

    private function orderContext(\Carbon\Carbon $from, \Carbon\Carbon $to): array
    {
        $topUsers = Order::whereBetween('ordered_at', [$from, $to])
            ->select('user_id', DB::raw('COUNT(*) as cnt'))
            ->groupBy('user_id')
            ->orderByDesc('cnt')
            ->limit(5)
            ->pluck('cnt', 'user_id')
            ->toArray();

        return ['top_users' => $topUsers, 'window_start' => $from->toIso8601String()];
    }

    private function refundContext(\Carbon\Carbon $from, \Carbon\Carbon $to): array
    {
        $topUsers = BalanceTransaction::where('type', BalanceTransaction::TYPE_REFUND)
            ->whereBetween('created_at', [$from, $to])
            ->select('user_id', DB::raw('COUNT(*) as cnt'))
            ->groupBy('user_id')
            ->orderByDesc('cnt')
            ->limit(5)
            ->pluck('cnt', 'user_id')
            ->toArray();

        return ['top_users' => $topUsers, 'window_start' => $from->toIso8601String()];
    }

    private function topupContext(\Carbon\Carbon $from, \Carbon\Carbon $to): array
    {
        $topUsers = BalanceTransaction::where('type', BalanceTransaction::TYPE_TOPUP)
            ->whereBetween('created_at', [$from, $to])
            ->select('user_id', DB::raw('COUNT(*) as cnt'))
            ->groupBy('user_id')
            ->orderByDesc('cnt')
            ->limit(5)
            ->pluck('cnt', 'user_id')
            ->toArray();

        return ['top_users' => $topUsers, 'window_start' => $from->toIso8601String()];
    }

    // ── Statistics helper ─────────────────────────────────────────────────────

    /**
     * Compute population mean and sample standard deviation.
     *
     * @param  array<int>  $values
     * @return array{mean: float, stddev: float}
     */
    public static function statistics(array $values): array
    {
        $n = count($values);

        if ($n === 0) {
            return ['mean' => 0.0, 'stddev' => 0.0];
        }

        $mean = array_sum($values) / $n;

        if ($n === 1) {
            return ['mean' => $mean, 'stddev' => 0.0];
        }

        $variance = array_sum(array_map(fn ($v) => ($v - $mean) ** 2, $values)) / ($n - 1);

        return ['mean' => $mean, 'stddev' => sqrt($variance)];
    }
}
