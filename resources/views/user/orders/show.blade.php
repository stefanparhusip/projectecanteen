@extends('layouts.app')
@section('title', 'Detail Pesanan #' . $order->id)

@section('content')

{{-- Flash messages --}}
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-3" role="alert">
    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 mb-3" role="alert">
    <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

@php
$bgMap = ['secondary'=>'#6c757d','primary'=>'#0d6efd','success'=>'#198754','danger'=>'#dc3545','info'=>'#0dcaf0'];
$bg    = $bgMap[$order->status_color] ?? '#6c757d';
$label = $order->status === 'ready' ? '✓ ' . $order->status_label : $order->status_label;
@endphp

<div class="row justify-content-center">
<div class="col-lg-6">

    {{-- Status banner --}}
    <div class="rounded-3 text-white text-center p-4 mb-3"
         style="background:{{ $bg }}">
        <div class="fs-5 fw-bold">{{ $label }}</div>
        @if($order->isReady())
        <div class="small mt-1 opacity-75">Tunjukkan QR Code di bawah kepada petugas kantin</div>
        @elseif($order->isCollected())
        <div class="small mt-1 opacity-75">Pesanan telah diambil — terima kasih!</div>
        @endif
    </div>

    {{-- QR Code section (only when ready & QR available) --}}
    @if($order->isReady() && $order->orderQr && $order->orderQr->isValid())
    <div class="card border-0 shadow-sm rounded-3 mb-3">
        <div class="card-header bg-white border-0 pt-3 pb-1">
            <h6 class="fw-bold mb-0">
                <i class="bi bi-qr-code me-2 text-success"></i>QR Pengambilan Pesanan
            </h6>
        </div>
        <div class="card-body text-center">
            <p class="small text-muted mb-3">
                Tunjukkan kode QR ini kepada petugas untuk mengambil pesanan.<br>
                Berlaku hingga <strong>{{ $order->orderQr->expires_at->format('H:i') }} WIB</strong>.
            </p>
            <canvas id="qr-canvas" class="mb-3"></canvas>
            <div class="d-flex gap-2 justify-content-center flex-wrap">
                <a href="{{ route('user.orders.qr.print', $order) }}" target="_blank"
                   class="btn btn-outline-success btn-sm">
                    <i class="bi bi-printer me-1"></i>Cetak / Simpan
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.4/build/qrcode.min.js"></script>
    <script>
    QRCode.toCanvas(
        document.getElementById('qr-canvas'),
        {{ json_encode($order->orderQr->token) }},
        { width: 220, margin: 2, color: { dark: '#000000', light: '#ffffff' } }
    );
    </script>
    @endif

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">

            <div class="d-flex justify-content-between mb-3">
                <div>
                    <div class="fw-bold fs-6">Pesanan #{{ $order->id }}</div>
                    <div class="text-muted small">{{ $order->ordered_at->format('d M Y, H:i') }}</div>
                </div>
                <div class="text-end">
                    <div class="small text-muted">Waktu Ambil</div>
                    <div class="fw-semibold small">{{ $order->breakTime->label }}</div>
                    <div class="text-muted" style="font-size:.72rem">
                        {{ \Carbon\Carbon::parse($order->breakTime->start_time)->format('H:i') }} –
                        {{ \Carbon\Carbon::parse($order->breakTime->end_time)->format('H:i') }}
                    </div>
                </div>
            </div>

            <hr>

            <h6 class="fw-semibold mb-3">Item Pesanan</h6>
            @foreach($order->items as $item)
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    <div class="small fw-semibold">{{ $item->menu_name }}</div>
                    <div class="text-muted" style="font-size:.75rem">
                        Rp {{ number_format($item->menu_price, 0, ',', '.') }} × {{ $item->quantity }}
                    </div>
                </div>
                <div class="fw-semibold small">
                    Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                </div>
            </div>
            @endforeach

            <hr>
            <div class="d-flex justify-content-between fw-bold">
                <span>Total</span>
                <span style="color:#f97316">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
            </div>

            @if($order->note)
            <hr>
            <div class="small">
                <span class="text-muted">Catatan:</span> {{ $order->note }}
            </div>
            @endif

        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('user.orders.history') }}" class="btn btn-outline-secondary w-100">
            <i class="bi bi-arrow-left me-2"></i>Kembali ke Riwayat
        </a>
    </div>

</div>
</div>
@endsection
