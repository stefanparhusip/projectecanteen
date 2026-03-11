<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Events\OrderReady;
use App\Events\TopupApproved;
use App\Jobs\DispatchWebhookJob;
use App\Models\Webhook;

/**
 * Listens to domain events and fans out to all active, subscribed webhook endpoints.
 *
 * Each matching webhook gets its own DispatchWebhookJob, which handles
 * signing, HTTP delivery, and retry/back-off independently.
 */
class WebhookEventListener
{
    public function handleOrderCreated(OrderCreated $event): void
    {
        $this->fanOut(Webhook::EVENT_ORDER_CREATED, $event->toWebhookPayload());
    }

    public function handleOrderReady(OrderReady $event): void
    {
        $this->fanOut(Webhook::EVENT_ORDER_READY, $event->toWebhookPayload());
    }

    public function handleTopupApproved(TopupApproved $event): void
    {
        $this->fanOut(Webhook::EVENT_TOPUP_APPROVED, $event->toWebhookPayload());
    }

    private function fanOut(string $eventName, array $payload): void
    {
        Webhook::active()
            ->subscribedTo($eventName)
            ->get()
            ->each(fn (Webhook $webhook) => DispatchWebhookJob::dispatch($webhook, $eventName, $payload));
    }
}
