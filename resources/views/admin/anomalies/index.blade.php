@extends('layouts.app')
@section('title', 'Anomali Sistem')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h4 class="fw-bold mb-1"><i class="bi bi-shield-exclamation me-2 text-danger"></i>Anomali Sistem</h4>
        <p class="text-muted mb-0 small">Deteksi lonjakan order, refund massal, dan topup mencurigakan.</p>
    </div>
    @if($unresolvedCount > 0)
    <form action="{{ route('admin.anomalies.resolve-all') }}" method="POST"
          onsubmit="return confirm('Tandai semua {{ $unresolvedCount }} anomali sebagai selesai?')">
        @csrf
        <button class="btn btn-sm btn-outline-success">
            <i class="bi bi-check2-all me-1"></i>Selesaikan Semua ({{ $unresolvedCount }})
        </button>
    </form>
    @endif
</div>

{{-- Flash messages --}}
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

{{-- Filters --}}
<div class="card border-0 shadow-sm rounded-3 mb-3">
    <div class="card-body py-2">
        <form method="GET" class="row g-2 align-items-end">
            <div class="col-sm-4">
                <label class="form-label small mb-1">Tipe</label>
                <select name="type" class="form-select form-select-sm">
                    <option value="">Semua tipe</option>
                    <option value="order_spike"  {{ request('type') === 'order_spike'  ? 'selected' : '' }}>Order Spike</option>
                    <option value="refund_spike" {{ request('type') === 'refund_spike' ? 'selected' : '' }}>Refund Spike</option>
                    <option value="topup_spike"  {{ request('type') === 'topup_spike'  ? 'selected' : '' }}>Topup Spike</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label class="form-label small mb-1">Status</label>
                <select name="resolved" class="form-select form-select-sm">
                    <option value="">Semua</option>
                    <option value="0" {{ request('resolved') === '0' ? 'selected' : '' }}>Belum selesai</option>
                    <option value="1" {{ request('resolved') === '1' ? 'selected' : '' }}>Sudah selesai</option>
                </select>
            </div>
            <div class="col-sm-auto">
                <button class="btn btn-sm btn-primary">Filter</button>
                <a href="{{ route('admin.anomalies.index') }}" class="btn btn-sm btn-outline-secondary ms-1">Reset</a>
            </div>
        </form>
    </div>
</div>

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        @if($anomalies->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-shield-check fs-2 d-block mb-2 text-success"></i>
                Tidak ada anomali yang ditemukan.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Tipe</th>
                        <th>Terdeteksi</th>
                        <th class="text-end">Dilihat</th>
                        <th class="text-end">Rata-rata</th>
                        <th class="text-end">Std-Dev</th>
                        <th class="text-end">Sigma</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anomalies as $a)
                    <tr class="{{ $a->resolved ? '' : 'table-danger bg-opacity-25' }}">
                        <td class="text-muted">{{ $a->id }}</td>
                        <td>
                            @php
                                $icon = match($a->type) {
                                    'order_spike'  => 'bi-bag-x text-danger',
                                    'refund_spike' => 'bi-arrow-counterclockwise text-warning',
                                    'topup_spike'  => 'bi-wallet2 text-info',
                                    default        => 'bi-question-circle text-secondary',
                                };
                            @endphp
                            <i class="bi {{ $icon }} me-1"></i>
                            {{ str_replace('_', ' ', $a->type) }}
                        </td>
                        <td>{{ $a->detected_at->format('d M Y H:i') }}</td>
                        <td class="text-end fw-bold">{{ $a->observed_value }}</td>
                        <td class="text-end text-muted">{{ number_format($a->baseline_mean, 1) }}</td>
                        <td class="text-end text-muted">{{ number_format($a->baseline_stddev, 1) }}</td>
                        <td class="text-end">
                            <span class="badge {{ $a->sigma >= 3 ? 'bg-danger' : 'bg-warning text-dark' }}">
                                {{ $a->sigma }}σ
                            </span>
                        </td>
                        <td>
                            @if($a->resolved)
                                <span class="badge bg-success">Selesai</span>
                                <div class="text-muted" style="font-size:.7rem">{{ $a->resolved_at?->diffForHumans() }}</div>
                            @else
                                <span class="badge bg-danger">Aktif</span>
                            @endif
                        </td>
                        <td>
                            @if(! $a->resolved)
                            <form action="{{ route('admin.anomalies.resolve', $a) }}" method="POST">
                                @csrf
                                <button class="btn btn-xs btn-outline-success py-0 px-2" style="font-size:.75rem">
                                    <i class="bi bi-check2"></i> Selesai
                                </button>
                            </form>
                            @endif
                            @if($a->context)
                            <button class="btn btn-xs btn-outline-secondary py-0 px-2 ms-1" style="font-size:.75rem"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#ctx-{{ $a->id }}">
                                Konteks
                            </button>
                            @endif
                        </td>
                    </tr>
                    @if($a->context)
                    <tr class="collapse" id="ctx-{{ $a->id }}">
                        <td colspan="9" class="bg-light py-2 px-4">
                            <pre class="mb-0 small text-muted">{{ json_encode($a->context, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end px-3 py-2">
            {{ $anomalies->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
