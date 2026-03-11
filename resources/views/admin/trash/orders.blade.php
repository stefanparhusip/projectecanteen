@extends('layouts.app')
@section('title', 'Trash — Pesanan')

@section('content')

@include('admin.trash._tabs', ['active' => 'orders'])

@if($orders->isEmpty())
    <div class="text-center py-5 text-muted">
        <i class="bi bi-trash fs-1 d-block mb-2"></i>
        Tidak ada pesanan yang terhapus.
    </div>
@else
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Pemesan</th>
                        <th>Istirahat</th>
                        <th>Status</th>
                        <th class="text-end">Total</th>
                        <th>Waktu Pesan</th>
                        <th>Dihapus Pada</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td class="text-muted fw-semibold">{{ $order->id }}</td>
                        <td>
                            @if($order->user)
                                {{ $order->user->name }}
                                @if($order->user->trashed())
                                    <span class="badge bg-danger ms-1" style="font-size:.65rem">
                                        user terhapus
                                    </span>
                                @endif
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td class="text-muted">
                            {{ $order->breakTime->label ?? '—' }}
                        </td>
                        <td>
                            <span class="badge bg-{{ $order->status_color }}">
                                {{ $order->status_label }}
                            </span>
                        </td>
                        <td class="text-end fw-semibold">
                            Rp {{ number_format($order->total_price, 0, ',', '.') }}
                        </td>
                        <td class="text-muted">
                            {{ $order->ordered_at->format('d M Y') }}<br>
                            <span style="font-size:.7rem">{{ $order->ordered_at->format('H:i') }}</span>
                        </td>
                        <td class="text-muted">
                            {{ $order->deleted_at->format('d M Y') }}<br>
                            <span style="font-size:.7rem">{{ $order->deleted_at->format('H:i') }}</span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                {{-- Restore --}}
                                <form action="{{ route('admin.trash.orders.restore', $order->id) }}" method="POST">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-sm btn-success" title="Pulihkan">
                                        <i class="bi bi-arrow-counterclockwise me-1"></i>Pulihkan
                                    </button>
                                </form>
                                {{-- Force Delete --}}
                                <form action="{{ route('admin.trash.orders.force', $order->id) }}" method="POST"
                                      onsubmit="return confirm('Hapus permanen pesanan #{{ $order->id }}? Semua item pesanan juga akan dihapus.')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" title="Hapus Permanen">
                                        <i class="bi bi-trash3 me-1"></i>Hapus Permanen
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3">{{ $orders->links() }}</div>
    </div>
</div>
@endif

@endsection
