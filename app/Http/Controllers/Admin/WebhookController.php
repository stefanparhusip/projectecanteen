<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Webhook;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class WebhookController extends Controller
{
    public function index(): View
    {
        $webhooks = Webhook::latest()->get();

        return view('admin.webhooks.index', compact('webhooks'));
    }

    public function create(): View
    {
        $webhook = new Webhook;
        $allEvents = Webhook::ALL_EVENTS;

        return view('admin.webhooks.form', compact('webhook', 'allEvents'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'url' => ['required', 'url', 'max:500'],
            'secret' => ['required', 'string', 'min:16', 'max:255'],
            'events' => ['required', 'array', 'min:1'],
            'events.*' => ['string', 'in:'.implode(',', array_keys(Webhook::ALL_EVENTS))],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data['is_active'] = $request->boolean('is_active', true);

        Webhook::create($data);

        return redirect()->route('admin.webhooks.index')
            ->with('success', 'Webhook berhasil ditambahkan.');
    }

    public function edit(Webhook $webhook): View
    {
        $allEvents = Webhook::ALL_EVENTS;

        return view('admin.webhooks.form', compact('webhook', 'allEvents'));
    }

    public function update(Request $request, Webhook $webhook): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'url' => ['required', 'url', 'max:500'],
            'secret' => ['required', 'string', 'min:16', 'max:255'],
            'events' => ['required', 'array', 'min:1'],
            'events.*' => ['string', 'in:'.implode(',', array_keys(Webhook::ALL_EVENTS))],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data['is_active'] = $request->boolean('is_active', true);

        $webhook->update($data);

        return redirect()->route('admin.webhooks.index')
            ->with('success', 'Webhook berhasil diperbarui.');
    }

    public function destroy(Webhook $webhook): RedirectResponse
    {
        $webhook->delete();

        return redirect()->route('admin.webhooks.index')
            ->with('success', 'Webhook berhasil dihapus.');
    }

    /**
     * Kirim test ping ke URL webhook untuk memverifikasi koneksi.
     */
    public function testPing(Request $request, Webhook $webhook): \Illuminate\Http\JsonResponse
    {
        $body = json_encode([
            'event' => 'ping',
            'timestamp' => now()->toISOString(),
            'data' => ['message' => 'Test ping dari USK E-Canteen'],
        ]);

        $signature = 'sha256='.hash_hmac('sha256', $body, $webhook->secret);

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-USK-Signature' => $signature,
            ])->timeout(10)->send('POST', $webhook->url, ['body' => $body]);

            return response()->json([
                'success' => $response->successful(),
                'status' => $response->status(),
                'message' => $response->successful()
                    ? 'Ping berhasil! Endpoint merespons dengan HTTP '.$response->status()
                    : 'Endpoint merespons dengan error HTTP '.$response->status(),
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'status' => 0,
                'message' => 'Koneksi gagal: '.$e->getMessage(),
            ]);
        }
    }
}
