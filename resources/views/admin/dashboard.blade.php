@extends('layouts.app')
@section('title', 'Dashboard Admin')

@section('content')
{{-- ── Greeting ──────────────────────────────────────────────────────────── --}}
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h4 class="fw-bold mb-1">Selamat datang, {{ auth()->user()->name }} 👋</h4>
        <p class="text-muted mb-0 small">{{ now()->translatedFormat('l, d F Y') }}</p>
    </div>
    <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-dark">
        <i class="bi bi-list-ul me-1"></i>Lihat Antrean
    </a>
</div>

{{-- ── Anomaly Alert Banner ──────────────────────────────────────────────── --}}
@if($openAnomalyCount > 0)
<div class="alert alert-danger d-flex align-items-center gap-2 mb-4 shadow-sm" role="alert">
    <i class="bi bi-exclamation-triangle-fill fs-5 flex-shrink-0"></i>
    <div class="flex-grow-1">
        <strong>{{ $openAnomalyCount }} anomali terdeteksi</strong> dalam 7 hari terakhir —
        @foreach($openAnomalies as $a)
            <span class="badge bg-danger me-1">
                {{ str_replace('_', ' ', $a->type) }}
                {{ $a->detected_at->format('d/m H:i') }}
                ({{ $a->sigma }}σ)
            </span>
        @endforeach
    </div>
    <a href="{{ route('admin.anomalies.index') }}" class="btn btn-sm btn-danger ms-2 flex-shrink-0">
        <i class="bi bi-shield-exclamation me-1"></i>Tinjau
    </a>
</div>
@endif

{{-- ── Stat Cards ────────────────────────────────────────────────────────── --}}
<div class="row g-3 mb-4">

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded-3 text-white h-100" style="background:linear-gradient(135deg,#f97316,#ea580c)">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="small opacity-75 mb-1">Pendapatan Hari Ini</p>
                        <h5 class="fw-bold mb-0">Rp {{ number_format($todayRevenue, 0, ',', '.') }}</h5>
                    </div>
                    <span class="bg-white bg-opacity-25 rounded-2 p-2 lh-1">
                        <i class="bi bi-cash-stack fs-5"></i>
                    </span>
                </div>
                <a href="{{ route('admin.reports.daily') }}" class="small text-white-50 mt-2 d-inline-block">
                    Lihat laporan <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded-3 bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="small opacity-75 mb-1">Pesanan Hari Ini</p>
                        <h5 class="fw-bold mb-0" id="stat-total-orders">{{ $todayOrders }}</h5>
                    </div>
                    <span class="bg-white bg-opacity-25 rounded-2 p-2 lh-1">
                        <i class="bi bi-bag-check fs-5"></i>
                    </span>
                </div>
                <a href="{{ route('admin.orders.index') }}" class="small text-white-50 mt-2 d-inline-block">
                    Kelola antrean <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded-3 h-100" style="background:linear-gradient(135deg,#06b6d4,#0891b2);color:#fff">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="small opacity-75 mb-1">Sedang Disiapkan</p>
                        <h5 class="fw-bold mb-0" id="stat-preparing">{{ $preparingCount }}</h5>
                    </div>
                    <span class="bg-white bg-opacity-25 rounded-2 p-2 lh-1">
                        <i class="bi bi-hourglass-split fs-5"></i>
                    </span>
                </div>
                <a href="{{ route('admin.orders.index') }}" class="small opacity-50 mt-2 d-inline-block" style="color:inherit">
                    Buka antrean <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 rounded-3 h-100 {{ $pendingTopup > 0 ? 'bg-warning' : 'bg-light' }}">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <p class="small {{ $pendingTopup > 0 ? 'text-dark' : 'text-muted' }} mb-1">Top-Up Pending</p>
                        <h5 class="fw-bold mb-0 {{ $pendingTopup > 0 ? 'text-dark' : 'text-secondary' }}">{{ $pendingTopup }}</h5>
                    </div>
                    <span class="{{ $pendingTopup > 0 ? 'bg-dark bg-opacity-10' : 'bg-secondary bg-opacity-10' }} rounded-2 p-2 lh-1">
                        <i class="bi bi-wallet2 fs-5 {{ $pendingTopup > 0 ? 'text-dark' : 'text-secondary' }}"></i>
                    </span>
                </div>
                <a href="{{ route('admin.topup.index') }}" class="small {{ $pendingTopup > 0 ? 'text-dark' : 'text-muted' }} mt-2 d-inline-block">
                    Proses sekarang <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

</div>

{{-- ── Quick Links & Recent Orders ──────────────────────────────────────── --}}
<div class="row g-3">

    {{-- Quick Links --}}
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-header bg-white border-0 pt-3 pb-0">
                <h6 class="fw-bold mb-0">Menu Cepat</h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin.orders.index') }}"
                       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-0 py-2">
                        <span><i class="bi bi-collection me-2 text-primary"></i>Antrean Pesanan</span>
                        @if($preparingCount > 0)
                            <span class="badge bg-primary rounded-pill">{{ $preparingCount }}</span>
                        @endif
                    </a>
                    <a href="{{ route('admin.topup.index') }}"
                       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-0 py-2">
                        <span><i class="bi bi-wallet2 me-2 text-warning"></i>Approval Top-Up</span>
                        @if($pendingTopup > 0)
                            <span class="badge bg-warning text-dark rounded-pill">{{ $pendingTopup }}</span>
                        @endif
                    </a>
                    <a href="{{ route('admin.users.index') }}"
                       class="list-group-item list-group-item-action border-0 px-0 py-2">
                        <i class="bi bi-people me-2 text-info"></i>Manajemen User
                        <span class="text-muted small">({{ $totalUsers }} user)</span>
                    </a>
                    <a href="{{ route('admin.menus.index') }}"
                       class="list-group-item list-group-item-action border-0 px-0 py-2">
                        <i class="bi bi-grid me-2 text-success"></i>Kelola Menu
                    </a>
                    <a href="{{ route('admin.reports.daily') }}"
                       class="list-group-item list-group-item-action border-0 px-0 py-2">
                        <i class="bi bi-bar-chart me-2" style="color:#f97316"></i>Laporan Harian
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Orders --}}
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 d-flex justify-content-between align-items-center">
                <h6 class="fw-bold mb-0">Aktivitas Pesanan Hari Ini</h6>
                <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-secondary">
                    Semua <i class="bi bi-chevron-right"></i>
                </a>
            </div>
            <div class="card-body p-0">
                @if($recentOrders->isEmpty())
                    <div class="text-center py-5 text-muted">
                        <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                        Belum ada pesanan hari ini.
                    </div>
                @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle small">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Pemesan</th>
                                <th>Waktu</th>
                                <th>Istirahat</th>
                                <th class="text-end">Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentOrders as $order)
                            <tr>
                                <td class="text-muted fw-semibold">{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td class="text-muted">{{ $order->ordered_at->format('H:i') }}</td>
                                <td class="text-muted">{{ $order->breakTime->label }}</td>
                                <td class="text-end fw-semibold">
                                    Rp {{ number_format($order->total_price, 0, ',', '.') }}
                                </td>
                                <td>
                                    <span class="badge bg-{{ $order->status_color }}">
                                        {{ $order->status_label }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
// Auto-refresh stat "Sedang Disiapkan" setiap 30 detik
(function pollStats() {
    fetch('{{ route("admin.poll.queue") }}')
        .then(r => r.json())
        .then(data => {
            document.getElementById('stat-preparing').textContent = data.preparing;
        })
        .catch(() => {}) // silent fail
        .finally(() => setTimeout(pollStats, 30000));
})();
</script>
@endpush
