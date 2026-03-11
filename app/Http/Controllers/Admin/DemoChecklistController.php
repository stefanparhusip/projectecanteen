<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BreakTime;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Services\DemoModeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class DemoChecklistController extends Controller
{
    // ── 10-Minute Demo Checklist Steps ───────────────────────────────────────

    private const STEPS = [
        [
            'step'    => 1,
            'time'    => '0:00',
            'title'   => 'Login sebagai Admin Demo',
            'desc'    => 'Buka <code>/login</code>, masukkan <code>demo-admin@demo.ecanteen.local</code> / <code>Demo@1234</code>.',
            'icon'    => 'bi-box-arrow-in-right',
            'color'   => 'primary',
            'route'   => 'login',
            'action'  => null,
        ],
        [
            'step'    => 2,
            'time'    => '0:30',
            'title'   => 'Dashboard — Ringkasan Harian',
            'desc'    => 'Tunjukkan stat card: pesanan hari ini, sisa saldo, antrian dapur. Sorot polling otomatis.',
            'icon'    => 'bi-speedometer2',
            'color'   => 'info',
            'route'   => 'admin.dashboard',
            'action'  => null,
        ],
        [
            'step'    => 3,
            'time'    => '1:00',
            'title'   => 'Manajemen Menu & Stok',
            'desc'    => 'Buka daftar menu <code>[Demo]</code>, tunjukkan edit harga/stok, upload gambar, dan badge "Habis".',
            'icon'    => 'bi-grid',
            'color'   => 'warning',
            'route'   => 'admin.menus.index',
            'action'  => null,
        ],
        [
            'step'    => 4,
            'time'    => '2:00',
            'title'   => 'Dapur (Kitchen Display)',
            'desc'    => 'Buka tampilan dapur. Order baru muncul realtime via SSE. Tunjukkan tombol update status.',
            'icon'    => 'bi-fire',
            'color'   => 'danger',
            'route'   => 'admin.kitchen',
            'action'  => null,
        ],
        [
            'step'    => 5,
            'time'    => '3:00',
            'title'   => 'Simulasi: Buat Order Demo',
            'desc'    => 'Buat pesanan cepat: 1 item menu <code>[Demo]</code> atas nama siswa demo. Status awal <em>pending</em>.',
            'icon'    => 'bi-cart-plus',
            'color'   => 'success',
            'route'   => 'admin.kitchen',
            'action'  => 'seedQuickOrder',
        ],
        [
            'step'    => 6,
            'time'    => '4:00',
            'title'   => 'Antrian Pesanan Admin',
            'desc'    => 'Buka daftar order admin. Tunjukkan filter status, pencarian, dan detail pesanan.',
            'icon'    => 'bi-list-task',
            'color'   => 'secondary',
            'route'   => 'admin.orders.index',
            'action'  => null,
        ],
        [
            'step'    => 7,
            'time'    => '5:00',
            'title'   => 'Simulasi: Tandai Pesanan Siap',
            'desc'    => 'Ubah status pesanan demo terbaru dari <em>pending → siap diambil</em>. Notifikasi siswa.',
            'icon'    => 'bi-check2-circle',
            'color'   => 'success',
            'route'   => 'admin.kitchen',
            'action'  => 'simulateReady',
        ],
        [
            'step'    => 8,
            'time'    => '6:00',
            'title'   => 'Scan QR & Pengambilan',
            'desc'    => 'Gunakan halaman scan QR. Pindai kode pesanan → status berubah ke <em>collected</em>.',
            'icon'    => 'bi-qr-code-scan',
            'color'   => 'dark',
            'route'   => 'admin.qr.scan',
            'action'  => null,
        ],
        [
            'step'    => 9,
            'time'    => '7:00',
            'title'   => 'Laporan Harian',
            'desc'    => 'Buka laporan harian. Tunjukkan grafik omzet, tabel top menu, dan ekspor CSV.',
            'icon'    => 'bi-bar-chart-line',
            'color'   => 'primary',
            'route'   => 'admin.reports.daily',
            'action'  => null,
        ],
        [
            'step'    => 10,
            'time'    => '8:00',
            'title'   => 'Feature Flags & Health',
            'desc'    => 'Toggle satu feature flag live. Lalu buka Health & Observability, tunjukkan uptime & log.',
            'icon'    => 'bi-toggles',
            'color'   => 'info',
            'route'   => 'admin.feature-flags.index',
            'action'  => null,
        ],
        [
            'step'    => 11,
            'time'    => '9:00',
            'title'   => 'Privasi Data (GDPR)',
            'desc'    => 'Buka antrian deletion request. Tunjukkan alur review admin: approve/reject & anonymisasi.',
            'icon'    => 'bi-shield-lock',
            'color'   => 'warning',
            'route'   => 'admin.data-privacy.index',
            'action'  => null,
        ],
        [
            'step'    => 12,
            'time'    => '9:30',
            'title'   => 'Sesi Tanya Jawab',
            'desc'    => 'Reset data demo jika diperlukan, lalu jawab pertanyaan audiens.',
            'icon'    => 'bi-chat-dots',
            'color'   => 'secondary',
            'route'   => 'admin.demo-mode.index',
            'action'  => null,
        ],
    ];

    // ── Actions ───────────────────────────────────────────────────────────────

    public function index(): View
    {
        $demoUserIds = User::withTrashed()
            ->where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)
            ->pluck('id');

        $demoUserCount = $demoUserIds->count();

        $demoMenuCount = Menu::withTrashed()
            ->where('name', 'like', DemoModeService::DEMO_MENU_PREFIX . '%')
            ->count();

        $demoOrderCount = Order::withTrashed()
            ->whereIn('user_id', $demoUserIds)
            ->count();

        $pendingDemoOrders = Order::whereIn('user_id', $demoUserIds)
            ->whereIn('status', [Order::STATUS_PENDING, Order::STATUS_PREPARING])
            ->count();

        $latestDemoOrder = Order::whereIn('user_id', $demoUserIds)
            ->latest()
            ->first();

        $isEnabled = app(DemoModeService::class)->isEnabled();

        return view('admin.demo-checklist.index', [
            'steps'            => self::STEPS,
            'demoUserCount'    => $demoUserCount,
            'demoMenuCount'    => $demoMenuCount,
            'demoOrderCount'   => $demoOrderCount,
            'pendingDemoOrders'=> $pendingDemoOrders,
            'latestDemoOrder'  => $latestDemoOrder,
            'isEnabled'        => $isEnabled,
        ]);
    }

    /**
     * Seed a quick demo order: 1 unit of the first available [Demo] menu,
     * placed for the first demo student.
     */
    public function seedQuickOrder(): RedirectResponse
    {
        $student = User::where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)
            ->where('role', 'student')
            ->first();

        if (! $student) {
            return back()->with('error', 'Tidak ada demo student. Aktifkan Demo Mode terlebih dahulu.');
        }

        $menu = Menu::where('name', 'like', DemoModeService::DEMO_MENU_PREFIX . '%')
            ->where('stock', '>', 0)
            ->first();

        if (! $menu) {
            return back()->with('error', 'Tidak ada demo menu dengan stok tersedia.');
        }

        $breakTime = BreakTime::first();

        if (! $breakTime) {
            return back()->with('error', 'Tidak ada break time terdaftar di database.');
        }

        $order = Order::create([
            'user_id'          => $student->id,
            'break_time_id'    => $breakTime->id,
            'status'           => Order::STATUS_PENDING,
            'total_price'      => $menu->price,
            'discount_amount'  => 0,
            'ordered_at'       => now(),
            'idempotency_key'  => (string) Str::uuid(),
        ]);

        OrderItem::create([
            'order_id'   => $order->id,
            'menu_id'    => $menu->id,
            'menu_name'  => $menu->name,
            'menu_price' => $menu->price,
            'quantity'   => 1,
            'subtotal'   => $menu->price,
        ]);

        $menu->decrement('stock');

        return back()->with('success', "Order demo #{$order->id} berhasil dibuat (status: pending) untuk {$student->name}.");
    }

    /**
     * Simulate order ready: find the latest demo pending/preparing order and
     * advance it to "ready".
     */
    public function simulateReady(): RedirectResponse
    {
        $demoUserIds = User::where('email', 'like', '%' . DemoModeService::DEMO_EMAIL_DOMAIN)
            ->pluck('id');

        $order = Order::whereIn('user_id', $demoUserIds)
            ->whereIn('status', [Order::STATUS_PENDING, Order::STATUS_PREPARING])
            ->latest()
            ->first();

        if (! $order) {
            return back()->with('error', 'Tidak ada pesanan demo yang sedang pending/preparing. Buat order dulu.');
        }

        $order->update(['status' => Order::STATUS_READY]);

        return back()->with('success', "Order demo #{$order->id} sekarang berstatus <strong>Siap Diambil</strong>.");
    }
}
