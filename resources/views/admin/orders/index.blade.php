@extends('layouts.app')
@section('title', 'Antrean Pesanan')

@push('styles')
<style>
.order-card { transition: opacity .3s, transform .3s; }
.order-card.removing { opacity: 0; transform: scale(.95); }
#poll-badge { transition: background .5s; }
</style>
@endpush

@section('content')

{{-- Header --}}
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Antrean Pesanan</h5>
        <p class="text-muted small mb-0">Pesanan dengan status <strong>Sedang Disiapkan</strong></p>
    </div>
    <div class="d-flex align-items-center gap-2">
        <span class="badge bg-primary fs-6" id="poll-badge" title="Sedang disiapkan">
            <i class="bi bi-hourglass-split me-1"></i>
            <span id="poll-count">{{ $orders->total() }}</span> antrean
        </span>
        <button class="btn btn-sm btn-outline-secondary" id="btn-refresh" onclick="location.reload()">
            <i class="bi bi-arrow-clockwise me-1"></i>Refresh
        </button>
        <span class="text-muted small" id="last-updated">
            {{ now()->format('H:i:s') }}
        </span>
    </div>
</div>

@php
$sections = [
    'icon'  => 'bi-collection',
    'color' => 'text-primary',
    'title' => 'Antrean Pesanan (Admin)',
];
@endphp

{{-- Countdown indicator --}}
<div class="d-flex align-items-center gap-2 mb-3">
    <div class="progress flex-grow-1" style="height:3px; max-width:200px">
        <div class="progress-bar bg-primary" id="poll-progress" style="width:100%;transition:width 30s linear"></div>
    </div>
    <span class="text-muted" style="font-size:.72rem">auto-refresh dalam <span id="countdown">30</span>s</span>
</div>

{{-- Filter --}}
<form class="d-flex flex-wrap gap-2 mb-4 align-items-center" method="GET">
    <span class="fw-semibold small">Filter Waktu:</span>
    <a href="{{ route('admin.orders.index') }}"
       class="btn btn-sm {{ !$breakTimeId ? 'btn-dark' : 'btn-outline-secondary' }}">Semua</a>
    @foreach($breakTimes as $bt)
    <a href="{{ route('admin.orders.index', ['break_time_id' => $bt->id]) }}"
       class="btn btn-sm {{ (int)$breakTimeId === $bt->id ? 'btn-dark' : 'btn-outline-secondary' }}">
        {{ $bt->label }}
    </a>
    @endforeach
    <span class="ms-auto text-muted small">{{ now()->format('d M Y') }}</span>
</form>

@if($orders->isEmpty())
    <div class="text-center py-5 text-muted">
        <i class="bi bi-inbox fs-1 d-block mb-2"></i>
        Tidak ada pesanan aktif hari ini.
    </div>
@else
<div class="row g-3" id="orders-grid">
    @foreach($orders as $order)
    <div class="col-md-6 col-xl-4 order-card" id="order-card-{{ $order->id }}">
        <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-3">
                <div>
                    <div class="fw-bold">
                        <a href="{{ route('admin.orders.show', $order) }}"
                           class="text-decoration-none text-dark">#{{ $order->id }}</a>
                        — {{ $order->user->name }}
                    </div>
                    <div class="text-muted small">{{ $order->ordered_at->format('H:i') }}
                        · {{ $order->breakTime->label }}</div>
                </div>
                <span class="badge bg-{{ $order->status_color }}">
                    {{ $order->status_label }}
                </span>
            </div>
            <div class="card-body py-2">
                @foreach($order->items as $item)
                <div class="d-flex justify-content-between small py-1 border-bottom">
                    <span>{{ $item->menu_name }}</span>
                    <span class="fw-semibold">×{{ $item->quantity }}</span>
                </div>
                @endforeach
                @if($order->note)
                <div class="small text-muted mt-2">
                    <i class="bi bi-chat-text me-1"></i>{{ $order->note }}
                </div>
                @endif
            </div>
            <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-3">
                <span class="fw-bold" style="color:#f97316">
                    Rp {{ number_format($order->total_price, 0, ',', '.') }}
                </span>
                <div class="d-flex gap-1">
                    @if($order->isPreparing())
                    <form action="{{ route('admin.orders.status', $order) }}" method="POST">
                        @csrf @method('PATCH')
                        <input type="hidden" name="status" value="ready">
                        <button class="btn btn-sm btn-success">
                            <i class="bi bi-check-circle me-1"></i>Siap Diambil
                        </button>
                    </form>
                    <form action="{{ route('admin.orders.status', $order) }}" method="POST">
                        @csrf @method('PATCH')
                        <input type="hidden" name="status" value="cancelled">
                        <button class="btn btn-sm btn-outline-danger" title="Batalkan">
                            <i class="bi bi-x"></i>
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-4">{{ $orders->links() }}</div>
@endif
@endsection

@push('scripts')
<script>
const POLL_URL = '{{ route("admin.poll.queue") }}';
let countdown  = 30;
let lastKnownId = null;

const countEl    = document.getElementById('poll-count');
const badgeEl    = document.getElementById('poll-badge');
const cdEl       = document.getElementById('countdown');
const progressEl = document.getElementById('poll-progress');
const updatedEl  = document.getElementById('last-updated');

// Countdown bar
const ticker = setInterval(() => {
    countdown--;
    cdEl.textContent = countdown;
    if (countdown <= 0) {
        clearInterval(ticker);
        cdEl.textContent = '…';
    }
}, 1000);

// Reset progress animation
setTimeout(() => {
    if (progressEl) { progressEl.style.width = '0%'; }
}, 50);

// Poll after 30s
setTimeout(function poll() {
    fetch(POLL_URL)
        .then(r => r.json())
        .then(data => {
            // Update badge count
            if (countEl) countEl.textContent = data.preparing;

            // Flash badge if new order detected
            if (lastKnownId !== null && data.last_order_id > lastKnownId) {
                badgeEl.classList.add('bg-warning', 'text-dark');
                badgeEl.classList.remove('bg-primary');
                setTimeout(() => location.reload(), 1200); // reload to show new cards
            } else {
                lastKnownId = data.last_order_id;
            }

            if (updatedEl) updatedEl.textContent = new Date().toLocaleTimeString('id-ID');
        })
        .catch(() => {})
        .finally(() => setTimeout(poll, 30000));
}, 30000);
</script>
@endpush
