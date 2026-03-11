<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anomaly;
use App\Models\BalanceTransaction;
use App\Models\Order;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        // ── Stats hari ini ────────────────────────────────────────────────────
        $todayRevenue = Order::query()
            ->where('status', Order::STATUS_READY)
            ->whereDate('ordered_at', today())
            ->sum('total_price');

        $todayOrders = Order::query()
            ->whereDate('ordered_at', today())
            ->whereIn('status', [Order::STATUS_PREPARING, Order::STATUS_READY])
            ->count();

        $preparingCount = Order::query()
            ->whereDate('ordered_at', today())
            ->where('status', Order::STATUS_PREPARING)
            ->count();

        $pendingTopup = BalanceTransaction::query()
            ->where('type', BalanceTransaction::TYPE_TOPUP)
            ->where('description', 'pending')
            ->count();

        $totalUsers = User::query()->where('role', '!=', 'admin')->count();

        // ── Anomaly alerts (unresolved in last 7 days) ────────────────────────
        $openAnomalies = Anomaly::unresolved()->recent(7)->latest('detected_at')->limit(5)->get();
        $openAnomalyCount = Anomaly::unresolved()->recent(7)->count();

        // ── Pesanan terbaru (10 terakhir hari ini) ────────────────────────────
        $recentOrders = Order::with(['user', 'breakTime'])
            ->whereDate('ordered_at', today())
            ->latest('ordered_at')
            ->limit(10)
            ->get();

        return view('admin.dashboard', compact(
            'todayRevenue',
            'todayOrders',
            'preparingCount',
            'pendingTopup',
            'totalUsers',
            'recentOrders',
            'openAnomalies',
            'openAnomalyCount',
        ));
    }

    /**
     * Endpoint JSON untuk polling status antrean.
     * Dipanggil setiap 30 detik oleh halaman antrean.
     */
    public function pollQueue(): \Illuminate\Http\JsonResponse
    {
        $preparing = Order::whereDate('ordered_at', today())
            ->where('status', Order::STATUS_PREPARING)
            ->count();

        $lastOrderId = Order::whereDate('ordered_at', today())
            ->latest('ordered_at')
            ->value('id');

        return response()->json([
            'preparing' => $preparing,
            'last_order_id' => $lastOrderId,
        ]);
    }
}
