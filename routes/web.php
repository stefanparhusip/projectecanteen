<?php

use App\Http\Controllers\Admin\AnomalyController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\BackupRestoreRequestController;
use App\Http\Controllers\Admin\BreakTimeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\FeatureFlagController as AdminFeatureFlagController;
use App\Http\Controllers\Admin\HealthController;
use App\Http\Controllers\Admin\ImpersonateController;
use App\Http\Controllers\Admin\KitchenController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\QrScanController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\RestockRequestController as AdminRestockRequestController;
use App\Http\Controllers\Admin\StockAlertController as AdminStockAlertController;
use App\Http\Controllers\Admin\TopupController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\WebhookController as AdminWebhookController;
use App\Http\Controllers\Api\DocsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\BalanceController;
use App\Http\Controllers\User\BatchController;
use App\Http\Controllers\User\MenuController as UserMenuController;
use App\Http\Controllers\Admin\DataPrivacyAdminController;
use App\Http\Controllers\Admin\DemoChecklistController;
use App\Http\Controllers\Admin\DemoModeController;
use App\Http\Controllers\User\DataPrivacyController;
use App\Http\Controllers\User\OrderController as UserOrderController;
use App\Http\Controllers\User\PointsController;
use App\Http\Controllers\User\PromotionController as UserPromotionController;
use App\Http\Controllers\User\RecurringOrderController;
use Illuminate\Support\Facades\Route;

// ─────────────────────────────────────────────────────────────────────────────
// API Documentation (publicly accessible)
// ─────────────────────────────────────────────────────────────────────────────
Route::get('/api/docs', [DocsController::class, 'index'])->name('api.docs.index');
Route::get('/api/docs/spec', [DocsController::class, 'spec'])->name('api.docs.spec');

// ─────────────────────────────────────────────────────────────────────────────
// Guest Routes (belum login)
// ─────────────────────────────────────────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:login');
});

// ─────────────────────────────────────────────────────────────────────────────
// Authenticated Routes (semua user yang sudah login)
// ─────────────────────────────────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // ── User Routes ───────────────────────────────────────────────────────────
    Route::prefix('menus')->name('user.menus.')->group(function () {
        Route::get('/', [UserMenuController::class, 'index'])->name('index');
    });

    Route::prefix('orders')->name('user.orders.')->group(function () {
        Route::get('/create', [UserOrderController::class, 'create'])->name('create');
        Route::post('/', [UserOrderController::class, 'store'])->name('store')
            ->middleware(['throttle:order-create', 'account.locked']);
        Route::get('/history', [UserOrderController::class, 'history'])->name('history');
        Route::get('/{order}', [UserOrderController::class, 'show'])->name('show');
        Route::get('/{order}/qr/print', [UserOrderController::class, 'printQr'])->name('qr.print');
    });

    // Batch (class group order)
    Route::prefix('batches')->name('user.batches.')->group(function () {
        Route::get('/', [BatchController::class, 'index'])->name('index');
        Route::post('/', [BatchController::class, 'store'])->name('store');
        Route::post('/join-code', [BatchController::class, 'joinByCode'])->name('join.code');
        Route::get('/{batch}', [BatchController::class, 'show'])->name('show');
        Route::post('/{batch}/join', [BatchController::class, 'join'])->name('join');
        Route::delete('/{batch}/leave', [BatchController::class, 'leave'])->name('leave');
        Route::post('/{batch}/items', [BatchController::class, 'saveItems'])->name('items');
        Route::patch('/{batch}/lock', [BatchController::class, 'lock'])->name('lock');
        Route::get('/{batch}/checkout', [BatchController::class, 'checkout'])->name('checkout');
        Route::post('/{batch}/checkout', [BatchController::class, 'processCheckout'])->name('checkout.process');
        Route::delete('/{batch}', [BatchController::class, 'cancel'])->name('cancel');
    });

    Route::prefix('balance')->name('user.balance.')->group(function () {
        Route::get('/', [BalanceController::class, 'index'])->name('index');
        Route::post('/topup', [BalanceController::class, 'requestTopup'])->name('topup')
            ->middleware(['throttle:topup-request', 'account.locked']);
    });

    Route::prefix('points')->name('user.points.')->group(function () {
        Route::get('/', [PointsController::class, 'index'])->name('index');
        Route::post('/redeem', [PointsController::class, 'redeem'])->name('redeem');
    });

    Route::prefix('recurring')->name('user.recurring.')->group(function () {
        Route::get('/', [RecurringOrderController::class, 'index'])->name('index');
        Route::get('/create', [RecurringOrderController::class, 'create'])->name('create');
        Route::post('/', [RecurringOrderController::class, 'store'])->name('store');
        Route::patch('/{ro}/toggle', [RecurringOrderController::class, 'toggle'])->name('toggle');
        Route::delete('/{ro}', [RecurringOrderController::class, 'destroy'])->name('destroy');
    });

    // Data Privacy (GDPR / Right to be Forgotten)
    Route::prefix('privacy')->name('user.privacy.')->group(function () {
        Route::get('/', [DataPrivacyController::class, 'index'])->name('index');
        Route::post('/export', [DataPrivacyController::class, 'requestExport'])->name('export');
        Route::get('/export/{dataExportRequest}/download', [DataPrivacyController::class, 'downloadExport'])
            ->name('export.download');
        Route::post('/deletion-request', [DataPrivacyController::class, 'requestDeletion'])->name('deletion');
        Route::delete('/deletion-request/{deletionRequest}/cancel', [DataPrivacyController::class, 'cancelDeletion'])
            ->name('deletion.cancel');
    });

    // Promotions (read-only — discounts apply automatically at checkout)
    Route::get('promotions', [UserPromotionController::class, 'index'])->name('user.promotions.index');
});

// ─────────────────────────────────────────────────────────────────────────────
// Admin Routes (hanya role admin)
// ─────────────────────────────────────────────────────────────────────────────
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard & Polling
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/poll-queue', [DashboardController::class, 'pollQueue'])->name('poll.queue');

    // User Management & Balance
    Route::get('users', [AdminUserController::class, 'index'])->name('users.index');
    Route::post('users/{user}/topup', [AdminUserController::class, 'topupDirect'])->name('users.topup');
    Route::post('users/{user}/balance', [AdminUserController::class, 'adjustBalance'])->name('users.balance');
    Route::post('users/{user}/unlock', [AdminUserController::class, 'unlock'])->name('users.unlock');
    Route::delete('users/{user}', [AdminUserController::class, 'destroy'])->name('users.destroy');

    // Menu Management
    Route::resource('menus', AdminMenuController::class);
    Route::patch('menus/{menu}/stock', [AdminMenuController::class, 'adjustStock'])
        ->name('menus.adjustStock');

    // Category Management
    Route::resource('categories', CategoryController::class);

    // Kitchen Display System
    Route::get('kitchen', [KitchenController::class, 'index'])->name('kitchen');
    Route::get('kitchen/stream', [KitchenController::class, 'stream'])->name('kitchen.stream');

    // Order Queue & Status
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [AdminOrderController::class, 'index'])->name('index');
        Route::get('/{order}', [AdminOrderController::class, 'show'])->name('show');
        Route::patch('/{order}/status', [AdminOrderController::class, 'updateStatus'])->name('status');
        Route::delete('/{order}', [AdminOrderController::class, 'destroy'])->name('destroy');
    });

    // Trash Management (Menus / Orders / Users)
    Route::prefix('trash')->name('trash.')->group(function () {
        // Menus
        Route::get('menus', [AdminMenuController::class, 'trash'])->name('menus');
        Route::patch('menus/{id}/restore', [AdminMenuController::class, 'restore'])->name('menus.restore');
        Route::delete('menus/{id}', [AdminMenuController::class, 'forceDelete'])->name('menus.force');

        // Orders
        Route::get('orders', [AdminOrderController::class, 'trash'])->name('orders');
        Route::patch('orders/{id}/restore', [AdminOrderController::class, 'restore'])->name('orders.restore');
        Route::delete('orders/{id}', [AdminOrderController::class, 'forceDelete'])->name('orders.force');

        // Users
        Route::get('users', [AdminUserController::class, 'trash'])->name('users');
        Route::patch('users/{id}/restore', [AdminUserController::class, 'restore'])->name('users.restore');
        Route::delete('users/{id}', [AdminUserController::class, 'forceDelete'])->name('users.force');
    });

    // QR Scanner (pengambilan pesanan)
    Route::get('scan-collect', [QrScanController::class, 'index'])->name('qr.scan');
    Route::post('scan-collect', [QrScanController::class, 'process'])->name('qr.process');

    // Laporan Harian
    Route::get('reports/daily', [ReportController::class, 'daily'])->name('reports.daily');

    // Checklist Testing
    Route::get('testing', fn () => view('admin.testing'))->name('testing');

    // Manajemen Waktu Istirahat
    Route::resource('break-times', BreakTimeController::class);

    // Promosi & Diskon
    Route::resource('promotions', PromotionController::class);
    Route::patch('promotions/{promotion}/toggle', [PromotionController::class, 'toggle'])->name('promotions.toggle');

    // Persetujuan Top-Up
    Route::prefix('topup')->name('topup.')->group(function () {
        Route::get('/', [TopupController::class, 'index'])->name('index');
        Route::patch('/{balanceTransaction}/approve', [TopupController::class, 'approve'])->name('approve');
        Route::patch('/{balanceTransaction}/reject', [TopupController::class, 'reject'])->name('reject');
    });

    // Anomaly Detection
    Route::prefix('anomalies')->name('anomalies.')->group(function () {
        Route::get('/', [AnomalyController::class, 'index'])->name('index');
        Route::post('/{anomaly}/resolve', [AnomalyController::class, 'resolve'])->name('resolve');
        Route::post('/resolve-all', [AnomalyController::class, 'resolveAll'])->name('resolve-all');
    });

    // Transaksi & Refund
    Route::prefix('transactions')->name('transactions.')->group(function () {
        Route::get('/', [TransactionController::class, 'index'])->name('index');
        Route::get('/export', [TransactionController::class, 'export'])->name('export');
        Route::get('/bulk-refund', [TransactionController::class, 'bulkRefundIndex'])->name('bulk-refund');
        Route::post('/bulk-refund', [TransactionController::class, 'bulkRefundProcess'])->name('bulk-refund.process');
    });

    // Bulk Export (async, queue-based)
    Route::prefix('exports')->name('exports.')->group(function () {
        Route::get('/', [ExportController::class, 'index'])->name('index');
        Route::post('/', [ExportController::class, 'store'])->name('store');
        Route::get('/{exportJob}/download', [ExportController::class, 'download'])->name('download');
        Route::delete('/{exportJob}', [ExportController::class, 'destroy'])->name('destroy');
    });

    // PDF Invoice per Pesanan
    Route::get('orders/{order}/invoice', [AdminOrderController::class, 'invoicePdf'])->name('orders.invoice');

    // Webhook Outbound
    Route::resource('webhooks', AdminWebhookController::class);
    Route::post('webhooks/{webhook}/test-ping', [AdminWebhookController::class, 'testPing'])
        ->name('webhooks.test-ping');

    // Feature Flags
    Route::resource('feature-flags', AdminFeatureFlagController::class)->names('feature-flags');
    Route::post('feature-flags/{featureFlag}/toggle', [AdminFeatureFlagController::class, 'toggle'])
        ->name('feature-flags.toggle');
    Route::post('feature-flags/{featureFlag}/override-user', [AdminFeatureFlagController::class, 'overrideUser'])
        ->name('feature-flags.override-user');
    Route::delete('feature-flags/{featureFlag}/remove-override', [AdminFeatureFlagController::class, 'removeOverride'])
        ->name('feature-flags.remove-override');

    // Backup & Restore
    Route::get('backups', [BackupController::class, 'index'])->name('backups.index');
    Route::post('backups', [BackupController::class, 'store'])->name('backups.store');
    Route::get('backups/{backup}/download', [BackupController::class, 'download'])->name('backups.download');
    Route::delete('backups/{backup}', [BackupController::class, 'destroy'])->name('backups.destroy');

    Route::get('restore-requests', [BackupRestoreRequestController::class, 'index'])->name('restore-requests.index');
    Route::post('restore-requests', [BackupRestoreRequestController::class, 'store'])->name('restore-requests.store');
    Route::post('restore-requests/{backupRestoreRequest}/approve', [BackupRestoreRequestController::class, 'approve'])->name('restore-requests.approve');
    Route::post('restore-requests/{backupRestoreRequest}/reject', [BackupRestoreRequestController::class, 'reject'])->name('restore-requests.reject');

    // Stock Alerts & Restock Requests
    Route::get('stock-alerts', [AdminStockAlertController::class, 'index'])->name('stock-alerts.index');
    Route::post('stock-alerts/{stockAlert}/resolve', [AdminStockAlertController::class, 'resolve'])->name('stock-alerts.resolve');
    Route::get('restock-requests', [AdminRestockRequestController::class, 'index'])->name('restock-requests.index');
    Route::post('restock-requests', [AdminRestockRequestController::class, 'store'])->name('restock-requests.store');
    Route::post('restock-requests/{restockRequest}/approve', [AdminRestockRequestController::class, 'approve'])->name('restock-requests.approve');
    Route::post('restock-requests/{restockRequest}/reject', [AdminRestockRequestController::class, 'reject'])->name('restock-requests.reject');

    // Health & Observability
    Route::get('health', [HealthController::class, 'index'])->name('health.index');
    Route::post('health/trigger-exception', [HealthController::class, 'triggerTestException'])
        ->name('health.trigger-exception');

    // Data Privacy Admin Queue (GDPR)
    Route::prefix('data-privacy')->name('data-privacy.')->group(function () {
        Route::get('/', [DataPrivacyAdminController::class, 'index'])->name('index');
        Route::get('/{deletionRequest}', [DataPrivacyAdminController::class, 'show'])->name('show');
        Route::post('/{deletionRequest}/approve', [DataPrivacyAdminController::class, 'approve'])->name('approve');
        Route::post('/{deletionRequest}/reject', [DataPrivacyAdminController::class, 'reject'])->name('reject');
    });

    // Demo Mode (disabled in production)
    Route::prefix('demo-mode')->name('demo-mode.')->group(function () {
        Route::get('/', [DemoModeController::class, 'index'])->name('index');
        Route::post('/enable', [DemoModeController::class, 'enable'])->name('enable');
        Route::post('/disable', [DemoModeController::class, 'disable'])->name('disable');
        Route::post('/reset', [DemoModeController::class, 'reset'])->name('reset');
    });

    // Demo Presentation Checklist
    Route::prefix('demo-checklist')->name('demo-checklist.')->group(function () {
        Route::get('/', [DemoChecklistController::class, 'index'])->name('index');
        Route::post('/seed-order', [DemoChecklistController::class, 'seedQuickOrder'])->name('seed-order');
        Route::post('/simulate-ready', [DemoChecklistController::class, 'simulateReady'])->name('simulate-ready');
    });

    // Impersonation (super-admin only)
    Route::middleware('super_admin')->group(function () {
        Route::post('impersonate/{user}', [ImpersonateController::class, 'start'])
            ->name('impersonate.start');
        Route::get('impersonation/audit', [ImpersonateController::class, 'audit'])
            ->name('impersonation.audit');
    });
});

// Impersonation stop (auth only — user may currently be a non-admin during impersonation)
Route::middleware('auth')->post('/impersonate/stop', [ImpersonateController::class, 'stop'])
    ->name('impersonate.stop');

// ─────────────────────────────────────────────────────────────────────────────
// Root redirect
// ─────────────────────────────────────────────────────────────────────────────
Route::get('/', function () {
    return redirect()->route('login');
});
