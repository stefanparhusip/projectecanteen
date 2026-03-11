<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReportController extends Controller
{
    public function daily(Request $request): View
    {
        // Tanggal bisa dipilih via query string; default: hari ini
        $date = $request->input('date', today()->toDateString());

        // Total pendapatan (hanya pesanan yang sudah ready)
        $totalRevenue = Order::whereDate('ordered_at', $date)
            ->where('status', Order::STATUS_READY)
            ->sum('total_price');

        // Jumlah pesanan selesai
        $totalOrders = Order::whereDate('ordered_at', $date)
            ->where('status', Order::STATUS_READY)
            ->count();

        // Breakdown per menu: nama, jumlah terjual, total pendapatan per menu
        $menuSales = OrderItem::whereHas('order', function ($q) use ($date) {
            $q->whereDate('ordered_at', $date)
                ->where('status', Order::STATUS_READY);
        })
            ->selectRaw('menu_name, SUM(quantity) as total_qty, SUM(subtotal) as total_subtotal')
            ->groupBy('menu_name')
            ->orderByDesc('total_qty')
            ->get();

        return view('admin.reports.daily', compact(
            'date',
            'totalRevenue',
            'totalOrders',
            'menuSales',
        ));
    }
}
