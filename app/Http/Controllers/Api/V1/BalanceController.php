<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @OA\Tag(name="Balance", description="User balance enquiry")
 */
class BalanceController extends Controller
{
    /**
     * Return the authenticated user's current balance and recent transactions.
     *
     * @OA\Get(
     *   path="/api/v1/balance",
     *   tags={"Balance"},
     *   summary="Get user balance",
     *   security={{"sanctum":{}}},
     *
     *   @OA\Response(response=200, description="Balance info",
     *
     *     @OA\JsonContent(
     *
     *       @OA\Property(property="data", type="object",
     *         @OA\Property(property="balance",      type="number", format="float"),
     *         @OA\Property(property="points_balance", type="integer"),
     *         @OA\Property(property="transactions", type="array",
     *
     *           @OA\Items(ref="#/components/schemas/BalanceTransaction")
     *         )
     *       )
     *     )
     *   ),
     *
     *   @OA\Response(response=403, description="Token missing balance:read ability")
     * )
     */
    public function show(Request $request): JsonResponse
    {
        abort_unless(
            $request->user()->tokenCan('balance:read'),
            403,
            'Token tidak memiliki kemampuan: balance:read'
        );

        $user = $request->user();
        $transactions = $user->balanceTransactions()
            ->latest()
            ->limit(10)
            ->get()
            ->map(fn ($t) => [
                'id' => $t->id,
                'type' => $t->type,
                'amount' => (float) $t->amount,
                'balance_before' => (float) $t->balance_before,
                'balance_after' => (float) $t->balance_after,
                'description' => $t->description ?? $t->note ?? null,
                'created_at' => $t->created_at->toIso8601String(),
            ]);

        return response()->json([
            'data' => [
                'balance' => (float) $user->balance,
                'points_balance' => (int) $user->points_balance,
                'transactions' => $transactions,
            ],
        ]);
    }
}
