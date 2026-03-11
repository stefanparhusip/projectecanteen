<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\BalanceTransaction;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @OA\Tag(name="Orders", description="Order placement and status")
 */
class OrderController extends Controller
{
    /**
     * Create a new order.
     *
     * @OA\Post(
     *   path="/api/v1/orders",
     *   tags={"Orders"},
     *   summary="Create order",
     *   security={{"sanctum":{}}},
     *
     *   @OA\RequestBody(required=true,
     *
     *     @OA\JsonContent(
     *       required={"break_time_id","items"},
     *
     *       @OA\Property(property="break_time_id", type="integer"),
     *       @OA\Property(property="items", type="array",
     *
     *         @OA\Items(
     *
     *           @OA\Property(property="menu_id",  type="integer"),
     *           @OA\Property(property="quantity", type="integer", minimum=1)
     *         )
     *       ),
     *       @OA\Property(property="note", type="string", nullable=true)
     *     )
     *   ),
     *
     *   @OA\Response(response=201, description="Order created",
     *
     *     @OA\JsonContent(@OA\Property(property="data", ref="#/components/schemas/Order"))
     *   ),
     *
     *   @OA\Response(response=422, description="Validation or business-rule error")
     * )
     */
    public function store(Request $request): JsonResponse
    {
        $this->checkAbility($request, 'orders:create');

        $validated = $request->validate([
            'break_time_id' => ['required', 'exists:break_times,id'],
            'items' => ['required', 'array', 'min:1'],
            'items.*.menu_id' => ['required', 'integer', 'exists:menus,id'],
            'items.*.quantity' => ['required', 'integer', 'min:1', 'max:50'],
            'note' => ['nullable', 'string', 'max:500'],
        ]);

        $user = $request->user();

        $order = null;
        $errorMsg = null;

        DB::transaction(function () use ($user, $validated, &$order, &$errorMsg) {
            $menuIds = collect($validated['items'])->pluck('menu_id')->unique();
            $menuMap = Menu::whereIn('id', $menuIds)->lockForUpdate()->get()->keyBy('id');
            $userLock = \App\Models\User::lockForUpdate()->find($user->id);

            $total = 0;

            foreach ($validated['items'] as $item) {
                $menu = $menuMap->get($item['menu_id']);
                if (! $menu || $menu->stock < $item['quantity']) {
                    $errorMsg = 'Stok menu tidak mencukupi: '.($menu?->name ?? "#{$item['menu_id']}");

                    return;
                }
                $total += $menu->price * $item['quantity'];
            }

            if ((float) $userLock->balance < $total) {
                $errorMsg = 'Saldo tidak mencukupi.';

                return;
            }

            $order = Order::create([
                'user_id' => $userLock->id,
                'break_time_id' => $validated['break_time_id'],
                'status' => Order::STATUS_PENDING,
                'total_price' => $total,
                'note' => $validated['note'] ?? null,
                'ordered_at' => now(),
            ]);

            foreach ($validated['items'] as $item) {
                $menu = $menuMap->get($item['menu_id']);
                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_id' => $menu->id,
                    'menu_name' => $menu->name,
                    'menu_price' => $menu->price,
                    'quantity' => $item['quantity'],
                    'subtotal' => $menu->price * $item['quantity'],
                ]);
                $menu->decrement('stock', $item['quantity']);
            }

            $balanceBefore = (float) $userLock->balance;
            $userLock->decrement('balance', $total);
            $userLock->refresh();

            BalanceTransaction::create([
                'user_id' => $userLock->id,
                'order_id' => $order->id,
                'type' => BalanceTransaction::TYPE_DEBIT,
                'amount' => $total,
                'balance_before' => $balanceBefore,
                'balance_after' => (float) $userLock->balance,
                'description' => "Pembayaran pesanan #{$order->id} via API",
            ]);
        });

        if ($errorMsg) {
            return response()->json(['message' => $errorMsg], 422);
        }

        return response()->json(['data' => $this->formatOrder($order->fresh('items'))], 201);
    }

    /**
     * Get order status.
     *
     * @OA\Get(
     *   path="/api/v1/orders/{id}",
     *   tags={"Orders"},
     *   summary="Get order status",
     *   security={{"sanctum":{}}},
     *
     *   @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *
     *   @OA\Response(response=200, description="Order detail",
     *
     *     @OA\JsonContent(@OA\Property(property="data", ref="#/components/schemas/Order"))
     *   ),
     *
     *   @OA\Response(response=403, description="Not your order"),
     *   @OA\Response(response=404, description="Order not found")
     * )
     */
    public function show(Request $request, Order $order): JsonResponse
    {
        $this->checkAbility($request, 'orders:read');

        abort_unless($order->user_id === $request->user()->id, 403, 'Akses ditolak.');

        return response()->json(['data' => $this->formatOrder($order->load('items'))]);
    }

    // ── Private Helpers ────────────────────────────────────────────────────

    private function checkAbility(Request $request, string $ability): void
    {
        abort_unless(
            $request->user()->tokenCan($ability),
            403,
            "Token tidak memiliki kemampuan: {$ability}"
        );
    }

    private function formatOrder(Order $order): array
    {
        return [
            'id' => $order->id,
            'status' => $order->status,
            'status_label' => Order::STATUS_LABELS[$order->status] ?? $order->status,
            'total_price' => (float) $order->total_price,
            'note' => $order->note,
            'ordered_at' => $order->ordered_at?->toIso8601String(),
            'break_time_id' => $order->break_time_id,
            'items' => $order->items->map(fn ($i) => [
                'menu_id' => $i->menu_id,
                'menu_name' => $i->menu_name,
                'menu_price' => (float) $i->menu_price,
                'quantity' => $i->quantity,
                'subtotal' => (float) $i->subtotal,
            ])->values(),
        ];
    }
}
