@extends('layouts.app')
@section('title', 'Checklist Testing')

@section('content')

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h4 class="fw-bold mb-1">Checklist Testing E-Canteen</h4>
        <p class="text-muted small mb-0">Panduan verifikasi sistem sebelum go-live</p>
    </div>
    <button onclick="window.print()" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-printer me-1"></i>Print
    </button>
</div>

@php
$sections = [
    [
        'icon'  => 'bi-person-check',
        'color' => 'text-primary',
        'title' => 'Autentikasi & Role',
        'items' => [
            ['test' => 'Register akun baru (nama, email, password)', 'expected' => 'Akun terbuat, redirect ke halaman menu user', 'error' => 'Validation error jika field kosong/email duplikat'],
            ['test' => 'Login sebagai student: andi@ecanteen.test / password', 'expected' => 'Redirect ke /menus (halaman user)', 'error' => 'Jika redirect ke /admin: cek role di database'],
            ['test' => 'Login sebagai admin: admin@ecanteen.test / password', 'expected' => 'Redirect ke /admin (dashboard admin)', 'error' => 'Jika 403: cek middleware EnsureAdmin & alias "admin"'],
            ['test' => 'Akses /admin saat login sebagai student', 'expected' => 'Redirect / 403 Forbidden', 'error' => 'Jika bisa masuk: cek middleware di bootstrap/app.php'],
            ['test' => 'Logout dari aplikasi', 'expected' => 'Session terhapus, redirect ke /login', 'error' => 'Jika session tetap: cek TokenMismatch (CSRF)'],
        ],
    ],
    [
        'icon'  => 'bi-wallet2',
        'color' => 'text-success',
        'title' => 'Saldo Virtual',
        'items' => [
            ['test' => 'User mengajukan top-up Rp 50.000', 'expected' => 'Muncul di halaman admin Approval Top-Up dengan status pending', 'error' => 'Jika tidak muncul: cek description="pending" di BalanceTransaction'],
            ['test' => 'Admin menyetujui top-up user', 'expected' => 'Saldo bertambah, status jadi "approved"', 'error' => 'Jika saldo tidak berubah: cek DB::transaction di approve()'],
            ['test' => 'Admin menolak top-up user', 'expected' => 'Status jadi "rejected", saldo tidak berubah', 'error' => '—'],
            ['test' => 'Admin top-up langsung dari halaman User Management', 'expected' => 'Saldo bertambah seketika tanpa approval', 'error' => 'Jika 404: cek route admin.users.topup'],
            ['test' => 'Admin menyesuaikan saldo (set ke nilai tertentu)', 'expected' => 'Saldo diubah, muncul di riwayat transaksi user', 'error' => '—'],
            ['test' => 'Riwayat mutasi saldo tampil di halaman user /balance', 'expected' => 'Daftar TOPUP dan DEBIT dengan saldo sebelum/sesudah', 'error' => 'Jika kosong: cek query BalanceTransaction::where(user_id)'],
        ],
    ],
    [
        'icon'  => 'bi-bag',
        'color' => 'text-warning',
        'title' => 'Pre-Order & Checkout',
        'items' => [
            ['test' => 'Buka halaman order saat masih dalam jam deadline', 'expected' => 'Form order tampil normal', 'error' => '—'],
            ['test' => 'Submit order dengan saldo cukup (andi: Rp 50.000)', 'expected' => 'Order dibuat, saldo berkurang, redirect ke detail pesanan', 'error' => 'Jika error: cek DB::transaction di store()'],
            ['test' => 'Submit order dengan saldo TIDAK cukup', 'expected' => 'Error: "Saldo tidak cukup. Kekurangan Rp X"', 'error' => 'Jika order tetap dibuat: cek kondisi balance check di controller'],
            ['test' => 'Submit order tanpa memilih item', 'expected' => 'Validation error "Pilih minimal 1 menu"', 'error' => 'Jika lolos: cek rules StoreOrderRequest items min:1'],
            ['test' => 'Submit order setelah melewati deadline', 'expected' => 'Error "Batas waktu pesan sudah lewat"', 'error' => 'Jika lolos: cek withValidator() di StoreOrderRequest'],
            ['test' => 'Status pesanan awal setelah order', 'expected' => 'Status = "Sedang Disiapkan" (bukan pending)', 'error' => 'Jika "pending": cek STATUS_PREPARING di store()'],
            ['test' => 'Riwayat pesanan user tampil', 'expected' => 'Semua pesanan tampil dengan status & total', 'error' => '—'],
            ['test' => 'User order bersamaan (race condition)', 'expected' => 'Saldo/stok tidak over-deduct berkat lockForUpdate()', 'error' => 'Untuk test: gunakan 2 browser dengan user berbeda secara bersamaan'],
        ],
    ],
    [
        'icon'  => 'bi-collection',
        'color' => 'text-info',
        'title' => 'Antrean Pesanan (Admin)',
        'items' => [
            ['test' => 'Halaman antrean hanya tampilkan status "Sedang Disiapkan"', 'expected' => 'Tidak ada pesanan dengan status lain', 'error' => 'Jika ada: cek whereIn STATUS_PREPARING di index()'],
            ['test' => 'Filter berdasarkan Istirahat 1 / Istirahat 2', 'expected' => 'Pesanan terfilter sesuai break_time_id', 'error' => 'Jika filter tidak bekerja: cek withQueryString() pada paginator'],
            ['test' => 'Tombol "Siap Diambil" pada pesanan', 'expected' => 'Status berubah menjadi "Siap Diambil", kartu hilang dari antrean', 'error' => 'Jika error: cek PATCH route admin.orders.status'],
            ['test' => 'Tombol "Batalkan" pada pesanan', 'expected' => 'Status berubah ke "Dibatalkan"', 'error' => '—'],
            ['test' => 'Halaman auto-refresh dalam 30 detik', 'expected' => 'Jika ada pesanan baru, badge antrean terupdate', 'error' => 'Jika tidak: cek JavaScript pollStats() + route admin.poll.queue'],
            ['test' => 'Detail pesanan (/admin/orders/{id})', 'expected' => 'Item, total, info user, waktu tampil lengkap', 'error' => 'Jika 404: cek view admin/orders/show.blade.php'],
        ],
    ],
    [
        'icon'  => 'bi-grid',
        'color' => 'text-secondary',
        'title' => 'Manajemen Menu (Admin)',
        'items' => [
            ['test' => 'Tambah menu baru tanpa foto', 'expected' => 'Menu tersimpan, tampil di daftar', 'error' => '—'],
            ['test' => 'Tambah menu dengan foto (JPG/PNG < 2MB)', 'expected' => 'Foto tersimpan di storage/app/public/menus/', 'error' => 'Jika foto tidak muncul: jalankan php artisan storage:link'],
            ['test' => 'Upload foto > 2MB', 'expected' => 'Validation error ukuran file', 'error' => 'Jika lolos: cek rules file|max:2048 di MenuController'],
            ['test' => 'Toggle ketersediaan menu', 'expected' => 'Status available berubah, badge berubah', 'error' => 'Jika tidak berubah: cek PATCH route admin.menus.toggle'],
            ['test' => 'Edit menu yang sudah ada', 'expected' => 'Data diperbarui', 'error' => '—'],
            ['test' => 'Hapus menu (soft delete)', 'expected' => 'Menu hilang dari daftar & form order user, data masih ada di DB', 'error' => 'Jika hilang dari order_items: cek withTrashed() di OrderItem relation'],
        ],
    ],
    [
        'icon'  => 'bi-bar-chart',
        'color' => 'text-danger',
        'title' => 'Laporan Harian',
        'items' => [
            ['test' => 'Laporan tanggal hari ini setelah ada pesanan READY', 'expected' => 'Pendapatan, jumlah transaksi, dan detail menu tampil', 'error' => 'Jika 0: laporan hanya menghitung status=ready, bukan preparing'],
            ['test' => 'Filter tanggal ke hari kemarin', 'expected' => 'Data tanggal sebelumnya tampil', 'error' => 'Jika error: cek ?date= query dan Carbon::parse($date)'],
            ['test' => 'Tanggal tanpa transaksi', 'expected' => 'Tampilkan pesan "Tidak ada data penjualan"', 'error' => '—'],
        ],
    ],
    [
        'icon'  => 'bi-shield-lock',
        'color' => 'text-dark',
        'title' => 'Keamanan & Edge Case',
        'items' => [
            ['test' => 'Akses /admin/users tanpa login', 'expected' => 'Redirect ke /login', 'error' => 'Jika bisa akses: cek middleware \'auth\''],
            ['test' => 'CSRF: submit form dari tab lain / reload lama', 'expected' => '419 Page Expired', 'error' => 'Ini behavior normal Laravel'],
            ['test' => 'User mencoba akses detail pesanan user lain', 'expected' => '403 atau pesanan tidak ditemukan', 'error' => 'Pastikan ada policy/ownership check di show()'],
            ['test' => 'Input quantity = 0 atau negatif', 'expected' => 'Validation error', 'error' => 'Cek rules items.*.quantity min:1'],
            ['test' => 'Nominal top-up < 1000', 'expected' => 'Validation error min:1000', 'error' => '—'],
            ['test' => 'SQL injection di search field', 'expected' => 'Tidak ada efek, query aman', 'error' => 'Eloquent menggunakan PDO prepared statements secara default'],
        ],
    ],
];
@endphp

@foreach($sections as $si => $section)
<div class="card border-0 shadow-sm rounded-3 mb-3">
    <div class="card-header bg-white border-0 pt-3 pb-2 d-flex align-items-center gap-2">
        <i class="bi {{ $section['icon'] }} {{ $section['color'] }} fs-5"></i>
        <h6 class="fw-bold mb-0">{{ $si + 1 }}. {{ $section['title'] }}</h6>
        <span class="badge bg-secondary ms-auto">{{ count($section['items']) }} test</span>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle" style="font-size:.8rem">
                <thead class="table-light">
                    <tr>
                        <th width="30" class="text-center ps-3">✓</th>
                        <th>Skenario Test</th>
                        <th>Hasil yang Diharapkan</th>
                        <th>Kemungkinan Error & Solusi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($section['items'] as $item)
                    <tr>
                        <td class="text-center ps-3">
                            <input type="checkbox" class="form-check-input" title="Centang jika lulus">
                        </td>
                        <td class="fw-semibold py-2 pe-3">{{ $item['test'] }}</td>
                        <td class="text-success py-2" style="min-width:220px">
                            <i class="bi bi-check-circle me-1 opacity-75"></i>{{ $item['expected'] }}
                        </td>
                        <td class="text-muted py-2" style="min-width:220px">
                            @if($item['error'] && $item['error'] !== '—')
                                <i class="bi bi-exclamation-circle me-1 text-danger opacity-75"></i>{{ $item['error'] }}
                            @else
                                <span class="opacity-50">—</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach

{{-- Print style --}}
@push('styles')
<style>
    @media print {
        #sidebar, #topbar, #sidebar-overlay, .btn { display: none !important; }
        #main-wrapper { margin-left: 0 !important; }
        .card { break-inside: avoid; }
        input[type=checkbox] { appearance: auto !important; }
    }
</style>
@endpush

@endsection
