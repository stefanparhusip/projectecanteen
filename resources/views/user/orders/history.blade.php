@extends('layouts.app')
@section('title', 'Riwayat Pesanan')

@section('content')

{{-- label & color ditangani model accessor: $order->status_label / $order->status_color --}}

@if($orders->isEmpty())
    <div class="text-center py-5 text-muted">
        <i class="bi bi-bag-x fs-1 d-block mb-2"></i>
        Belum ada pesanan. <a href="{{ route('user.orders.create') }}">Buat pesanan pertama Anda!</a>
    </div>
@else
<div class="d-flex flex-column gap-3">
    @foreach($orders as $order)
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between flex-wrap gap-2">
                <div>
                    <div class="fw-semibold">Pesanan #{{ $order->id }}</div>
                    <div class="text-muted small">
                        <i class="bi bi-clock me-1"></i>
                        {{ $order->ordered_at->format('d M Y, H:i') }}
                        &nbsp;·&nbsp;
                        <i class="bi bi-alarm me-1"></i>
                        {{ $order->breakTime->label }}
                    </div>
                </div>
                <span class="badge rounded-pill bg-{{ $order->status_color }} px-3 py-2">
                    {{ $order->status_label }}
                </span>
            </div>

            <div class="mt-2 pt-2 border-top d-flex flex-wrap gap-2">
                @foreach($order->items as $item)
                <span class="badge bg-light text-dark border" style="font-size:.78rem">
                    {{ $item->menu_name }}
                    <span class="text-muted">×{{ $item->quantity }}</span>
                </span>
                @endforeach
            </div>

            <div class="d-flex align-items-center justify-content-between mt-3 pt-2 border-top">
                <span class="fw-bold" style="color:#f97316">
                    Rp {{ number_format($order->total_price, 0, ',', '.') }}
                </span>
                <a href="{{ route('user.orders.show', $order) }}"
                   class="btn btn-sm btn-outline-secondary rounded-pill">
                    Detail <i class="bi bi-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-3">{{ $orders->links() }}</div>
@endif
@endsection
