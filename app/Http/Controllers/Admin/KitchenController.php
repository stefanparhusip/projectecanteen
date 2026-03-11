<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BreakTime;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class KitchenController extends Controller
{
    /** Halaman utama Kitchen Display System */
    public function index(): View
    {
        $breakTimes = BreakTime::orderBy('start_time')->get();

        return view('admin.kitchen.index', compact('breakTimes'));
    }

    /**
     * Server-Sent Events stream — kirim data board setiap 2 detik.
     *
     * Format event:
     *   event: board
     *   data: { orders: [...], stats: {...}, server_time: "14:32:01" }
     *
     *   event: ping
     *   data: { t: 1234567890 }   ← heartbeat agar proxy tidak memutus koneksi
     */
    public function stream(Request $request): StreamedResponse
    {
        // Bebaskan session lock agar request lain tidak terblokir
        $request->session()->save();

        return response()->stream(function () {
            // Nonaktifkan batas waktu eksekusi
            set_time_limit(0);

            // Matikan semua output buffering yang mungkin aktif
            while (ob_get_level() > 0) {
                ob_end_flush();
            }

            $lastHash = '';
            $pingCounter = 0;

            while (true) {
                if (connection_aborted()) {
                    break;
                }

                // ── Ambil data board ───────────────────────────────────────
                $orders = Order::with(['user', 'breakTime', 'items'])
                    ->whereDate('ordered_at', today())
                    ->whereIn('status', [Order::STATUS_PREPARING, Order::STATUS_READY])
                    ->orderBy('ordered_at')
                    ->get();

                $now = now();

                $payload = [
                    'orders' => $orders->map(fn ($o) => $this->serializeOrder($o, $now))->values(),
                    'stats' => $this->buildStats($orders),
                    'server_time' => $now->format('H:i:s'),
                ];

                $hash = md5(serialize($payload['orders']));

                // ── Kirim event board jika ada perubahan ──────────────────
                if ($hash !== $lastHash) {
                    $lastHash = $hash;
                    $this->sendEvent('board', $payload);
                }

                // ── Heartbeat setiap ~10 detik ────────────────────────────
                $pingCounter++;
                if ($pingCounter % 5 === 0) {
                    $this->sendEvent('ping', ['t' => time()]);
                }

                flush();
                sleep(2);
            }
        }, 200, [
            'Content-Type' => 'text/event-stream; charset=UTF-8',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'X-Accel-Buffering' => 'no',
            'Connection' => 'keep-alive',
        ]);
    }

    // ── Private helpers ───────────────────────────────────────────────────────

    private function sendEvent(string $event, array $data): void
    {
        echo "event: {$event}\n";
        echo 'data: '.json_encode($data, JSON_UNESCAPED_UNICODE)."\n\n";
    }

    /**
     * Serialisasi Order ke array untuk JSON.
     * Mengandung flag `is_priority` jika break_time mulai dalam ≤ 20 menit
     * ATAU order sudah dalam status preparing ≥ 10 menit.
     */
    private function serializeOrder(Order $order, Carbon $now): array
    {
        $bt = $order->breakTime;

        // Hitung waktu mulai break time hari ini
        $startRaw = $bt->getRawOriginal('start_time');  // mis. "10:00:00"
        $startToday = Carbon::parse($startRaw);           // Carbon hari ini jam tsb

        $minutesUntilStart = $now->diffInMinutes($startToday, false); // negatif jika sudah lewat
        $minutesInQueue = $order->ordered_at ? $now->diffInMinutes($order->ordered_at) : 0;

        $isPriority = ($minutesUntilStart >= 0 && $minutesUntilStart <= 20)
                   || ($order->status === Order::STATUS_PREPARING && $minutesInQueue >= 10);

        return [
            'id' => $order->id,
            'status' => $order->status,
            'user_name' => $order->user?->name ?? '—',
            'user_id' => $order->user_id,
            'break_label' => $bt->label,
            'break_start' => $startToday->format('H:i'),
            'break_end' => Carbon::parse($bt->getRawOriginal('end_time'))->format('H:i'),
            'ordered_at' => $order->ordered_at?->format('H:i'),
            'total_price' => (int) $order->total_price,
            'note' => $order->note,
            'items' => $order->items->map(fn ($i) => [
                'name' => $i->menu_name,
                'qty' => $i->quantity,
            ])->toArray(),
            'item_count' => $order->items->sum('quantity'),
            'is_priority' => $isPriority,
            'minutes_waiting' => (int) $minutesInQueue,
        ];
    }

    private function buildStats(object $orders): array
    {
        return [
            'preparing' => $orders->where('status', Order::STATUS_PREPARING)->count(),
            'ready' => $orders->where('status', Order::STATUS_READY)->count(),
            'total' => $orders->count(),
        ];
    }
}
