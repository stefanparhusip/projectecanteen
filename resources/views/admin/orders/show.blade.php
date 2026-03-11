@extends('layouts.app')
@section('title', 'Detail Pesanan #' . $order->id)

@section('content')

<div class="mb-4 d-flex align-items-center gap-3">
    <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Kembali
    </a>
    <h5 class="fw-bold mb-0">Detail Pesanan <span class="text-muted">#{{ $order->id }}</span></h5>
    <span class="badge bg-{{ $order->status_color }} ms-1">{{ $order->status_label }}</span>
    <a href="{{ route('admin.orders.invoice', $order) }}" class="btn btn-sm btn-outline-primary ms-auto" target="_blank">
        <i class="bi bi-file-earmark-pdf me-1"></i>Invoice PDF
    </a>
</div>

<div class="row g-3">

    {{-- Info Pesanan --}}
    <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-info-circle me-2 text-primary"></i>Informasi Pesanan</h6>
            </div>
            <div class="card-body">
                <table class="table table-sm mb-0 small">
                    <tr>
                        <td class="text-muted py-1" width="130">No. Pesanan</td>
                        <td class="fw-semibold">#{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted py-1">Pemesan</td>
                        <td>{{ $order->user->name }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted py-1">Email</td>
                        <td class="text-muted">{{ $order->user->email }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted py-1">Waktu Istirahat</td>
                        <td>
                            {{ $order->breakTime->label }}
                            <span class="text-muted">({{ $order->breakTime->start_time->format('H:i') }}–{{ $order->breakTime->end_time->format('H:i') }})</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted py-1">Waktu Pesan</td>
                        <td>{{ $order->ordered_at->format('d M Y, H:i') }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted py-1">Status</td>
                        <td>
                            <span class="badge bg-{{ $order->status_color }}">{{ $order->status_label }}</span>
                        </td>
                    </tr>
                    @if($order->note)
                    <tr>
                        <td class="text-muted py-1">Catatan</td>
                        <td>{{ $order->note }}</td>
                    </tr>
                    @endif
                    <tr class="table-light">
                        <td class="py-2 fw-bold">Total Bayar</td>
                        <td class="fw-bold" style="color:#f97316">
                            Rp {{ number_format($order->total_price, 0, ',', '.') }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Action Buttons --}}
        @if($order->isPreparing())
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-gear me-2 text-secondary"></i>Ubah Status</h6>
            </div>
            <div class="card-body d-flex gap-2 flex-wrap">
                <form action="{{ route('admin.orders.status', $order) }}" method="POST">
                    @csrf @method('PATCH')
                    <input type="hidden" name="status" value="ready">
                    <button class="btn btn-success">
                        <i class="bi bi-check-circle me-1"></i>Tandai Siap Diambil
                    </button>
                </form>
                <form action="{{ route('admin.orders.status', $order) }}" method="POST">
                    @csrf @method('PATCH')
                    <input type="hidden" name="status" value="cancelled">
                    <button class="btn btn-outline-danger"
                            onclick="return confirm('Batalkan pesanan ini?')">
                        <i class="bi bi-x-circle me-1"></i>Batalkan Pesanan
                    </button>
                </form>
            </div>
        </div>
        @elseif($order->isReady())
        <div class="alert alert-success d-flex align-items-center gap-2 rounded-3">
            <i class="bi bi-check-circle-fill fs-5"></i>
            <span>Pesanan ini <strong>Siap Diambil</strong>. Scan QR pengguna untuk menyelesaikan.</span>
        </div>
        <a href="{{ route('admin.qr.scan') }}" class="btn btn-primary mb-2">
            <i class="bi bi-qr-code-scan me-1"></i>Buka Scanner QR
        </a>
        {{-- Tombol hapus ke Trash (hanya untuk pesanan selesai/dibatalkan) --}}
        <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="mt-2"
              onsubmit="return confirm('Pindahkan pesanan #{{ $order->id }} ke Trash?')">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-trash3 me-1"></i>Pindahkan ke Trash
            </button>
        </form>
        @elseif($order->isCollected())
        <div class="alert alert-info d-flex align-items-center gap-2 rounded-3">
            <i class="bi bi-bag-check-fill fs-5"></i>
            <div>
                <strong>Sudah Diambil</strong>
                @if($order->orderQr?->used_at)
                <span class="d-block small text-muted mt-1">
                    Diambil pada {{ $order->orderQr->used_at->format('d M Y, H:i') }} WIB
                </span>
                @endif
            </div>
        </div>
        <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="mt-2"
              onsubmit="return confirm('Pindahkan pesanan #{{ $order->id }} ke Trash?')">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-trash3 me-1"></i>Pindahkan ke Trash
            </button>
        </form>
        @elseif($order->isCancelled())
        <div class="alert alert-danger d-flex align-items-center gap-2 rounded-3">
            <i class="bi bi-x-circle-fill fs-5"></i>
            <span>Pesanan ini <strong>Dibatalkan</strong>.</span>
        </div>
        <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="mt-2"
              onsubmit="return confirm('Pindahkan pesanan #{{ $order->id }} ke Trash?')">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-trash3 me-1"></i>Pindahkan ke Trash
            </button>
        </form>
        @endif
    </div>

    {{-- Item List --}}
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-bag me-2 text-success"></i>Item Pesanan</h6>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0 align-middle small">
                    <thead class="table-light">
                        <tr>
                            <th width="40">#</th>
                            <th>Menu</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Harga</th>
                            <th class="text-end">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->items as $i => $item)
                        <tr>
                            <td class="text-muted">{{ $i + 1 }}</td>
                            <td class="fw-semibold">{{ $item->menu_name }}</td>
                            <td class="text-center">{{ $item->quantity }}</td>
                            <td class="text-end text-muted">
                                Rp {{ number_format($item->menu_price, 0, ',', '.') }}
                            </td>
                            <td class="text-end fw-semibold">
                                Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <td colspan="4" class="text-end fw-bold">Total</td>
                            <td class="text-end fw-bold" style="color:#f97316">
                                Rp {{ number_format($order->total_price, 0, ',', '.') }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
