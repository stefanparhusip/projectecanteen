<?php

use App\Services\HealthCheckService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// ── Reset stok menu tiap hari pukul 06:00 WIB (sebelum jam buka pemesanan 07:00) ──
Schedule::command('menu:reset-stock')
    ->dailyAt('06:00')
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/menu-reset-stock.log'))
    ->onSuccess(fn () => HealthCheckService::pingCron('menu:reset-stock'));

// ── Rekonsiliasi transaksi harian tiap hari pukul 23:55 WIB ──
Schedule::command('reports:reconcile')
    ->dailyAt('23:55')
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/reconciliation.log'))
    ->onSuccess(fn () => HealthCheckService::pingCron('reports:reconcile'));

// ── Deteksi anomali setiap jam (menganalisis jam yang baru selesai) ──
Schedule::command('anomalies:detect --hours=1')
    ->hourly()
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/anomalies.log'))
    ->onSuccess(fn () => HealthCheckService::pingCron('anomalies:detect'));

// ── Cek stok rendah setiap 15 menit ──
Schedule::command('stock:check-alerts')
    ->everyFifteenMinutes()
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/stock-alerts.log'))
    ->onSuccess(fn () => HealthCheckService::pingCron('stock:check-alerts'));

// ── Buat pesanan otomatis dari jadwal recurring order tiap hari pukul 06:30 WIB ──
// (setelah reset stok 06:00, sebelum jam buka pemesanan 07:00)
Schedule::command('orders:recurring')
    ->dailyAt('06:30')
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/recurring-orders.log'))
    ->onSuccess(fn () => HealthCheckService::pingCron('orders:recurring'));

// ── Backup database harian pukul 02:00 WIB (retensi 30 hari standar) ──
Schedule::command('backup:run --retention=30 --note="Scheduled daily backup"')
    ->dailyAt('02:00')
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/backup.log'))
    ->onSuccess(fn () => HealthCheckService::pingCron('backup:run'));

// ── Hapus backup kedaluwarsa setiap hari pukul 03:00 WIB ──
Schedule::command('backup:cleanup')
    ->dailyAt('03:00')
    ->timezone('Asia/Jakarta')
    ->withoutOverlapping()
    ->appendOutputTo(storage_path('logs/backup-cleanup.log'))
    ->onSuccess(fn () => HealthCheckService::pingCron('backup:cleanup'));
