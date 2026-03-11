<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Foundation\Events\Dispatchable;

class OrderCreated
{
    use Dispatchable;

    public function __construct(public readonly Order $order) {}

    public function toWebhookPayload(): array
    {
        $this->order->loadMissing(['items', 'user', 'breakTime']);

        return [
            'id' => $this->order->id,
            'status' => $this->order->status,
            'total_price' => (float) $this->order->total_price,
            'note' => $this->order->note,
            'ordered_at' => $this->order->ordered_at?->toIso8601String(),
            'break_time' => $this->order->breakTime?->label,
            'user' => [
                'id' => $this->order->user?->id,
                'name' => $this->order->user?->name,
            ],
            'items' => $this->order->items->map(fn ($i) => [
                'menu_name' => $i->menu_name,
                'quantity' => $i->quantity,
                'subtotal' => (float) $i->subtotal,
            ])->values()->all(),
        ];
    }
}
