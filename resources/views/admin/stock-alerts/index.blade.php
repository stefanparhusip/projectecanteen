@extends('layouts.app')
@section('title', 'Alert Stok Rendah')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Alert Stok Rendah</h5>
        <p class="text-muted small mb-0">Menu yang stoknya mencapai atau di bawah batas minimum</p>
    </div>
    <a href="{{ route('admin.restock-requests.index') }}" class="btn btn-outline-primary btn-sm">
        <i class="bi bi-arrow-repeat me-1"></i>Permintaan Restock
    </a>
</div>

@foreach(['success','error','info'] as $type)
    @if(session($type))
        <div class="alert alert-{{ $type === 'error' ? 'danger' : ($type === 'info' ? 'info' : 'success') }} alert-dismissible fade show">
            {{ session($type) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
@endforeach

{{-- Unresolved Alerts --}}
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
        <h6 class="fw-semibold mb-0 text-danger">
            <i class="bi bi-exclamation-triangle-fill me-1"></i>
            Alert Aktif
            @if($unresolved->isNotEmpty())
                <span class="badge bg-danger ms-1">{{ $unresolved->count() }}</span>
            @endif
        </h6>
    </div>
    <div class="card-body p-0 pt-2">
        @if($unresolved->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-check-circle fs-1 d-block mb-2 text-success"></i>
                Tidak ada alert aktif. Semua stok dalam kondisi baik.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Menu</th>
                        <th class="text-center">Stok Saat Alert</th>
                        <th class="text-center">Threshold</th>
                        <th class="text-center">Auto-Restock</th>
                        <th>Waktu</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unresolved as $alert)
                    <tr>
                        <td>
                            <span class="fw-semibold">{{ $alert->menu->name }}</span>
                            <br>
                            <small class="text-muted">
                                Stok sekarang:
                                <span class="{{ $alert->menu->stock <= $alert->threshold ? 'text-danger fw-bold' : 'text-success' }}">
                                    {{ $alert->menu->stock }}
                                </span>
                            </small>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-danger">{{ $alert->stock_at_alert }}</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-warning text-dark">{{ $alert->threshold }}</span>
                        </td>
                        <td class="text-center">
                            @if($alert->auto_restock_triggered)
                                <span class="badge bg-info">Dipicu</span>
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td>
                            <small class="text-muted">{{ $alert->created_at->diffForHumans() }}</small>
                        </td>
                        <td class="text-end">
                            <form action="{{ route('admin.stock-alerts.resolve', $alert) }}" method="POST"
                                  onsubmit="return confirm('Tandai alert ini sebagai resolved?')">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-success">
                                    <i class="bi bi-check-lg me-1"></i>Resolve
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

{{-- Recently Resolved --}}
@if($recentResolved->isNotEmpty())
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
        <h6 class="fw-semibold mb-0 text-muted">
            <i class="bi bi-clock-history me-1"></i>Riwayat Alert (20 Terakhir)
        </h6>
    </div>
    <div class="card-body p-0 pt-2">
        <div class="table-responsive">
            <table class="table mb-0 align-middle text-muted">
                <thead class="table-light">
                    <tr>
                        <th>Menu</th>
                        <th class="text-center">Stok Saat Alert</th>
                        <th class="text-center">Threshold</th>
                        <th>Dipicu</th>
                        <th>Di-resolve</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentResolved as $alert)
                    <tr>
                        <td>{{ $alert->menu->name }}</td>
                        <td class="text-center">{{ $alert->stock_at_alert }}</td>
                        <td class="text-center">{{ $alert->threshold }}</td>
                        <td><small>{{ $alert->created_at->format('d/m/Y H:i') }}</small></td>
                        <td><small>{{ $alert->resolved_at->format('d/m/Y H:i') }}</small></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
@endsection
