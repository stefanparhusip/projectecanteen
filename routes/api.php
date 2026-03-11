<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\BalanceController;
use App\Http\Controllers\Api\V1\MenuController;
use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\WebhookController;
use App\Http\Controllers\MetricsController;
use Illuminate\Support\Facades\Route;

// ─────────────────────────────────────────────────────────────────────────────
// Prometheus metrics endpoint (bearer-token authenticated)
// ─────────────────────────────────────────────────────────────────────────────
Route::get('/metrics', [MetricsController::class, 'index'])
    ->middleware('metrics.auth')
    ->name('metrics');

// ─────────────────────────────────────────────────────────────────────────────
// API v1
// ─────────────────────────────────────────────────────────────────────────────
Route::prefix('v1')->group(function () {

    // ── Authentication (public, rate-limited by IP) ───────────────────────────
    Route::middleware('throttle:api-auth')->group(function () {
        Route::post('/auth/login', [AuthController::class, 'login'])->name('api.v1.auth.login');
    });

    // Logout requires a valid token
    Route::middleware(['auth:sanctum', 'throttle:api'])->group(function () {
        Route::post('/auth/logout', [AuthController::class, 'logout'])->name('api.v1.auth.logout');
    });

    // ── Protected endpoints ───────────────────────────────────────────────────
    Route::middleware(['auth:sanctum', 'throttle:api'])->group(function () {
        // Menus (requires menus:read ability — checked inside controller query; open read)
        Route::get('/menus', [MenuController::class, 'index'])->name('api.v1.menus.index');
        Route::get('/menus/{menu}', [MenuController::class, 'show'])->name('api.v1.menus.show');

        // Orders
        Route::post('/orders', [OrderController::class, 'store'])->name('api.v1.orders.store');
        Route::get('/orders/{order}', [OrderController::class, 'show'])->name('api.v1.orders.show');

        // Balance
        Route::get('/balance', [BalanceController::class, 'show'])->name('api.v1.balance.show');
    });

    // ── Webhooks (HMAC-signed, no Sanctum token required) ────────────────────
    Route::middleware('throttle:api')->group(function () {
        Route::post('/webhooks/order-status', [WebhookController::class, 'orderStatus'])
            ->name('api.v1.webhooks.order-status');
    });
});
