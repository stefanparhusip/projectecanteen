<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderQr;
use App\Models\PointTransaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class QrScanController extends Controller
{
    /** Halaman scanner QR untuk admin */
    public function index(): View
    {
        return view('admin.orders.scan');
    }

    /**
     * Proses token QR yang di-scan admin.
     *
     * Flow:
     *  1. Cari OrderQr berdasarkan token (lockForUpdate mencegah double-scan).
     *  2. Validasi: belum dipakai, belum expired, status order harus 'ready'.
     *  3. Tandai used_at = now() dan ubah status order → 'collected'.
     *
     * @return JsonResponse — dikonsumsi oleh JS pada halaman scan.
     */
    public function process(Request $request): JsonResponse
    {
        $request->validate([
            'token' => 'required|string|size:64|alpha_num',
        ]);

        $result = null;
        $error = null;

        DB::transaction(function () use ($request, &$result, &$error) {
            /** @var OrderQr|null $qr */
            $qr = OrderQr::where('token', $request->token)
                ->lockForUpdate()
                ->first();

            if (! $qr) {
                $error = 'Token tidak ditemukan.';

                return;
            }

            if ($qr->isUsed()) {
                $error = 'QR ini sudah pernah digunakan.';

                return;
            }

            if ($qr->isExpired()) {
                $error = 'QR sudah kedaluwarsa. Minta pengguna membuka halaman pesanan untuk memperbarui QR.';

                return;
            }

            $order = $qr->order()->lockForUpdate()->first();

            if (! $order || $order->status !== Order::STATUS_READY) {
                $error = 'Pesanan tidak dalam status Siap Diambil.';

                return;
            }

            // Tandai QR sebagai terpakai dan ubah status pesanan
            $qr->update(['used_at' => now()]);
            $order->update(['status' => Order::STATUS_COLLECTED]);

            // Beri poin: 1 poin per Rp 10.000 (dibulatkan ke bawah)
            $earned = (int) floor((float) $order->total_price / 10000);
            if ($earned > 0) {
                $order->user()->lockForUpdate()->first()->increment('points_balance', $earned);

                PointTransaction::create([
                    'user_id' => $order->user_id,
                    'points' => $earned,
                    'type' => PointTransaction::TYPE_EARN,
                    'ref_type' => Order::class,
                    'ref_id' => $order->id,
                    'description' => "Poin dari pesanan #{$order->id} (Rp ".number_format($order->total_price, 0, ',', '.').')',
                ]);
            }

            $result = [
                'order_id' => $order->id,
                'user_name' => $order->user->name,
                'break_time' => $order->breakTime->label,
                'total' => 'Rp '.number_format($order->total_price, 0, ',', '.'),
            ];
        });

        if ($error) {
            return response()->json(['success' => false, 'message' => $error], 422);
        }

        return response()->json([
            'success' => true,
            'message' => "Pesanan #{$result['order_id']} ({$result['user_name']}) berhasil dicatat sebagai Sudah Diambil.",
            'order' => $result,
        ]);
    }
}
