<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * @OA\Tag(name="Webhooks", description="Inbound order-status webhooks")
 *
 * Webhooks are secured with a shared HMAC-SHA256 secret.
 * Calling system must set the header:
 *   X-Webhook-Signature: sha256=<HMAC-SHA256(raw-body, WEBHOOK_SECRET)>
 */
class WebhookController extends Controller
{
    /**
     * Receive an order-status update from an external system (e.g. kitchen display).
     *
     * @OA\Post(
     *   path="/api/v1/webhooks/order-status",
     *   tags={"Webhooks"},
     *   summary="Update order status via webhook",
     *
     *   @OA\Parameter(name="X-Webhook-Signature", in="header", required=true,
     *     description="sha256=HMAC-SHA256(raw body, WEBHOOK_SECRET)",
     *
     *     @OA\Schema(type="string")
     *   ),
     *
     *   @OA\RequestBody(required=true,
     *
     *     @OA\JsonContent(
     *       required={"order_id","status"},
     *
     *       @OA\Property(property="order_id", type="integer"),
     *       @OA\Property(property="status",   type="string",
     *         enum={"pending","preparing","ready","cancelled","collected"})
     *     )
     *   ),
     *
     *   @OA\Response(response=200, description="Status updated"),
     *   @OA\Response(response=401, description="Invalid signature"),
     *   @OA\Response(response=404, description="Order not found"),
     *   @OA\Response(response=422, description="Invalid status transition")
     * )
     */
    public function orderStatus(Request $request): JsonResponse
    {
        // ── Verify HMAC signature ────────────────────────────────────────────
        $secret = config('services.webhook_secret');
        $signature = $request->header('X-Webhook-Signature', '');
        $expected = 'sha256='.hash_hmac('sha256', $request->getContent(), $secret ?? '');

        if (! hash_equals($expected, $signature)) {
            Log::warning('Webhook: invalid signature from '.$request->ip());

            return response()->json(['message' => 'Tanda tangan tidak valid.'], 401);
        }

        // ── Validate payload ─────────────────────────────────────────────────
        $validated = $request->validate([
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'status' => ['required', 'string',
                'in:'.implode(',', [
                    Order::STATUS_PENDING,
                    Order::STATUS_PREPARING,
                    Order::STATUS_READY,
                    Order::STATUS_CANCELLED,
                    Order::STATUS_COLLECTED,
                ]),
            ],
        ]);

        $order = Order::findOrFail($validated['order_id']);

        // ── Guard: disallow re-updating a terminal status ────────────────────
        $terminalStatuses = [Order::STATUS_CANCELLED, Order::STATUS_COLLECTED];
        if (in_array($order->status, $terminalStatuses, true)) {
            return response()->json([
                'message' => "Pesanan #{$order->id} sudah dalam status terminal: {$order->status}.",
            ], 422);
        }

        $oldStatus = $order->status;
        $order->update(['status' => $validated['status']]);

        Log::info("Webhook: pesanan #{$order->id} diubah dari {$oldStatus} ke {$order->status}");

        return response()->json([
            'message' => 'Status pesanan berhasil diperbarui.',
            'order_id' => $order->id,
            'old_status' => $oldStatus,
            'new_status' => $order->status,
        ]);
    }
}
