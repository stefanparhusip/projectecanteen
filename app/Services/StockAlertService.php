<?php

namespace App\Services;

use App\Jobs\AutoRestockJob;
use App\Models\Menu;
use App\Models\StockAlert;
use App\Models\User;
use App\Notifications\LowStockNotification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Checks every menu that has a low_stock_threshold configured.
 * If stock <= threshold and no unresolved alert already exists, it:
 *  1. Creates a StockAlert record
 *  2. Notifies all admin users (mail + database)
 *  3. Sends an optional Telegram message (if TELEGRAM_* env vars are set)
 *  4. Dispatches AutoRestockJob if auto_restock_enabled = true
 */
class StockAlertService
{
    /**
     * Scan all menus and fire alerts for those in low-stock condition.
     *
     * @return int Number of new alerts created
     */
    public function checkAll(bool $dryRun = false): int
    {
        $menus = Menu::whereNotNull('low_stock_threshold')
            ->whereColumn('stock', '<=', 'low_stock_threshold')
            ->whereNull('deleted_at')
            ->with('stockAlerts')
            ->get();

        $created = 0;

        foreach ($menus as $menu) {
            // Skip if there's already an unresolved alert for this menu
            $hasUnresolved = $menu->stockAlerts()
                ->whereNull('resolved_at')
                ->exists();

            if ($hasUnresolved) {
                continue;
            }

            if ($dryRun) {
                $created++;

                continue;
            }

            $alert = StockAlert::create([
                'menu_id' => $menu->id,
                'stock_at_alert' => $menu->stock,
                'threshold' => $menu->low_stock_threshold,
            ]);

            $this->notifyAdmins($menu, $alert);
            $this->sendTelegramAlert($menu, $alert);

            if ($menu->auto_restock_enabled) {
                AutoRestockJob::dispatch($menu->id, $alert->id);

                $alert->update(['auto_restock_triggered' => true]);
            }

            $created++;
        }

        return $created;
    }

    /**
     * Send database + mail notification to all admin users.
     */
    public function notifyAdmins(Menu $menu, StockAlert $alert): void
    {
        $notification = new LowStockNotification($menu, $alert);

        User::where('role', 'admin')
            ->whereNull('deleted_at')
            ->each(fn (User $admin) => $admin->notify($notification));
    }

    /**
     * Send a Telegram message if TELEGRAM_BOT_TOKEN and TELEGRAM_ADMIN_CHAT_ID are set.
     */
    public function sendTelegramAlert(Menu $menu, StockAlert $alert): void
    {
        $token = config('services.telegram.bot_token');
        $chatId = config('services.telegram.admin_chat_id');

        if (! $token || ! $chatId) {
            return;
        }

        $text = implode("\n", [
            '⚠️ *Stok Rendah*',
            "Menu: *{$menu->name}*",
            "Stok saat ini: {$alert->stock_at_alert}",
            "Batas minimum: {$alert->threshold}",
            'Waktu: '.now()->timezone('Asia/Jakarta')->format('d/m/Y H:i').' WIB',
        ]);

        rescue(function () use ($token, $chatId, $text) {
            Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'Markdown',
            ]);
        }, function (\Throwable $e) use ($menu) {
            Log::warning("Telegram stock-alert failed for menu #{$menu->id}: {$e->getMessage()}");
        });
    }
}
