<?php

namespace App\Notifications;

use App\Models\Menu;
use App\Models\StockAlert;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LowStockNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public readonly Menu $menu,
        public readonly StockAlert $alert,
    ) {}

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    // ── Mail ──────────────────────────────────────────────────────────────────

    public function toMail(object $notifiable): MailMessage
    {
        $url = route('admin.stock-alerts.index');

        return (new MailMessage)
            ->subject("⚠️ Stok Rendah: {$this->menu->name}")
            ->greeting("Halo, {$notifiable->name}!")
            ->line("Stok menu **{$this->menu->name}** sudah berada di bawah batas minimum.")
            ->line("**Stok saat ini:** {$this->alert->stock_at_alert}")
            ->line("**Batas minimum:** {$this->alert->threshold}")
            ->action('Lihat Semua Alert', $url)
            ->line('Segera lakukan restock atau sesuaikan threshold jika diperlukan.');
    }

    // ── Database ──────────────────────────────────────────────────────────────

    public function toDatabase(object $notifiable): array
    {
        return [
            'type' => 'low_stock',
            'menu_id' => $this->menu->id,
            'menu_name' => $this->menu->name,
            'stock' => $this->alert->stock_at_alert,
            'threshold' => $this->alert->threshold,
            'alert_id' => $this->alert->id,
            'url' => route('admin.stock-alerts.index'),
        ];
    }
}
