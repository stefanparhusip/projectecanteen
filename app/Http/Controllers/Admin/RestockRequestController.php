<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RestockRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RestockRequestController extends Controller
{
    public function index(): View
    {
        $pending = RestockRequest::where('status', RestockRequest::STATUS_PENDING)
            ->with(['menu', 'requester'])
            ->latest()
            ->get();

        $recent = RestockRequest::whereIn('status', [RestockRequest::STATUS_APPROVED, RestockRequest::STATUS_REJECTED])
            ->with(['menu', 'requester', 'approver'])
            ->latest('approved_at')
            ->limit(20)
            ->get();

        return view('admin.restock-requests.index', compact('pending', 'recent'));
    }

    public function approve(Request $request, RestockRequest $restockRequest): RedirectResponse
    {
        if (! $restockRequest->isPending()) {
            return back()->with('error', 'Permintaan ini sudah diproses sebelumnya.');
        }

        $restockRequest->update([
            'status' => RestockRequest::STATUS_APPROVED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'notes' => $request->input('notes'),
        ]);

        // Apply stock increase
        $restockRequest->menu->increment('stock', $restockRequest->requested_stock);

        // Auto-resolve linked stock alert if present
        $restockRequest->stockAlert?->update(['resolved_at' => now()]);

        return back()->with('success', "Restock \"{$restockRequest->menu->name}\" disetujui. Stok bertambah {$restockRequest->requested_stock}.");
    }

    public function reject(Request $request, RestockRequest $restockRequest): RedirectResponse
    {
        if (! $restockRequest->isPending()) {
            return back()->with('error', 'Permintaan ini sudah diproses sebelumnya.');
        }

        $restockRequest->update([
            'status' => RestockRequest::STATUS_REJECTED,
            'approved_by' => auth()->id(),
            'approved_at' => now(),
            'notes' => $request->input('notes'),
        ]);

        return back()->with('success', "Permintaan restock \"{$restockRequest->menu->name}\" ditolak.");
    }

    /**
     * Admin manually creates a restock request for a menu.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'menu_id' => ['required', 'exists:menus,id'],
            'requested_stock' => ['required', 'integer', 'min:1', 'max:9999'],
            'notes' => ['nullable', 'string', 'max:500'],
        ]);

        RestockRequest::create([
            'menu_id' => $data['menu_id'],
            'requested_stock' => $data['requested_stock'],
            'status' => RestockRequest::STATUS_PENDING,
            'is_auto' => false,
            'requested_by' => auth()->id(),
            'notes' => $data['notes'] ?? null,
        ]);

        return redirect()->route('admin.restock-requests.index')
            ->with('success', 'Permintaan restock berhasil ditambahkan.');
    }
}
