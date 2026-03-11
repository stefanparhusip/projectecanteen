<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StockAlert;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StockAlertController extends Controller
{
    public function index(): View
    {
        // Unresolved alerts first, then recently resolved
        $unresolved = StockAlert::whereNull('resolved_at')
            ->with('menu')
            ->latest()
            ->get();

        $recentResolved = StockAlert::whereNotNull('resolved_at')
            ->with('menu')
            ->latest('resolved_at')
            ->limit(20)
            ->get();

        // Mark all unread DB notifications as read for the current admin
        auth()->user()->unreadNotifications()
            ->where('type', \App\Notifications\LowStockNotification::class)
            ->update(['read_at' => now()]);

        return view('admin.stock-alerts.index', compact('unresolved', 'recentResolved'));
    }

    public function resolve(StockAlert $stockAlert): RedirectResponse
    {
        if ($stockAlert->isResolved()) {
            return back()->with('info', 'Alert ini sudah di-resolve sebelumnya.');
        }

        $stockAlert->update(['resolved_at' => now()]);

        return back()->with('success', "Alert stok untuk \"{$stockAlert->menu->name}\" berhasil di-resolve.");
    }
}
