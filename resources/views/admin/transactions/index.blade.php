@extends('layouts.app')
@section('title', 'Transaksi & Refund')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

{{-- Header --}}
<div class="d-flex justify-content-between align-items-start mb-3">
    <div>
        <h5 class="fw-bold mb-0">Transaksi & Refund</h5>
        <p class="text-muted small mb-0">Riwayat semua mutasi saldo — filter, ekspor, dan bulk refund</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.transactions.bulk-refund') }}"
           class="btn btn-sm btn-outline-danger fw-semibold">
            <i class="bi bi-arrow-counterclockwise me-1"></i> Bulk Refund
        </a>
        <a href="{{ route('admin.transactions.export', request()->all()) }}"
           class="btn btn-sm btn-outline-success fw-semibold">
            <i class="bi bi-download me-1"></i> Export CSV
        </a>
    </div>
</div>

{{-- Summary Cards --}}
<div class="row g-3 mb-4">
    <div class="col-sm-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                     style="width:42px;height:42px;background:#dcfce7">
                    <i class="bi bi-arrow-down-circle text-success fs-5"></i>
                </div>
                <div>
                    <div class="small text-muted">Total Top-Up</div>
                    <div class="fw-bold">Rp {{ number_format($summary->total_topup ?? 0, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                     style="width:42px;height:42px;background:#fee2e2">
                    <i class="bi bi-arrow-up-circle text-danger fs-5"></i>
                </div>
                <div>
                    <div class="small text-muted">Total Debit</div>
                    <div class="fw-bold">Rp {{ number_format($summary->total_debit ?? 0, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                     style="width:42px;height:42px;background:#fef3c7">
                    <i class="bi bi-arrow-repeat text-warning fs-5"></i>
                </div>
                <div>
                    <div class="small text-muted">Total Refund</div>
                    <div class="fw-bold">Rp {{ number_format($summary->total_refund ?? 0, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Filters --}}
<div class="card border-0 shadow-sm rounded-3 mb-3">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.transactions.index') }}"
              class="row g-2 align-items-end">
            <div class="col-sm-2">
                <label class="form-label small fw-semibold mb-1">Tipe</label>
                <select name="type" class="form-select form-select-sm">
                    <option value="">Semua</option>
                    <option value="topup"  {{ request('type') === 'topup'  ? 'selected' : '' }}>Top-Up</option>
                    <option value="debit"  {{ request('type') === 'debit'  ? 'selected' : '' }}>Debit</option>
                    <option value="refund" {{ request('type') === 'refund' ? 'selected' : '' }}>Refund</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label class="form-label small fw-semibold mb-1">User</label>
                <select name="user_id" class="form-select form-select-sm">
                    <option value="">Semua User</option>
                    @foreach($users as $u)
                        <option value="{{ $u->id }}" {{ request('user_id') == $u->id ? 'selected' : '' }}>
                            {{ $u->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <label class="form-label small fw-semibold mb-1">Dari Tanggal</label>
                <input type="date" name="date_from" class="form-control form-control-sm"
                       value="{{ request('date_from') }}">
            </div>
            <div class="col-sm-2">
                <label class="form-label small fw-semibold mb-1">Sampai Tanggal</label>
                <input type="date" name="date_to" class="form-control form-control-sm"
                       value="{{ request('date_to') }}">
            </div>
            <div class="col-sm-3 d-flex gap-2">
                <button type="submit" class="btn btn-sm btn-primary fw-semibold">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
                <a href="{{ route('admin.transactions.index') }}" class="btn btn-sm btn-outline-secondary">
                    Reset
                </a>
            </div>
        </form>
    </div>
</div>

{{-- Transaction Table --}}
<div class="card border-0 shadow-sm rounded-3">
    @if($transactions->isEmpty())
        <div class="card-body text-center py-5 text-muted">
            <i class="bi bi-inbox display-5 opacity-25 d-block mb-2"></i>
            Tidak ada transaksi untuk filter ini.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-3">#</th>
                        <th>User</th>
                        <th>Tipe</th>
                        <th>Order</th>
                        <th class="text-end">Jumlah</th>
                        <th class="text-end">Saldo Sesudah</th>
                        <th>Keterangan</th>
                        <th class="pe-3">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $tx)
                    <tr>
                        <td class="ps-3 text-muted small">{{ $tx->id }}</td>
                        <td class="small fw-semibold">{{ $tx->user?->name ?? '—' }}</td>
                        <td>
                            @if($tx->type === 'topup')
                                <span class="badge bg-success">Top-Up</span>
                            @elseif($tx->type === 'debit')
                                <span class="badge bg-danger">Debit</span>
                            @else
                                <span class="badge bg-warning text-dark">Refund</span>
                            @endif
                        </td>
                        <td class="small text-muted">
                            @if($tx->order_id)
                                <a href="{{ route('admin.orders.show', $tx->order_id) }}"
                                   class="text-decoration-none">#{{ $tx->order_id }}</a>
                            @else
                                —
                            @endif
                        </td>
                        <td class="text-end small fw-semibold {{ $tx->type === 'debit' ? 'text-danger' : 'text-success' }}">
                            {{ $tx->type === 'debit' ? '-' : '+' }}Rp {{ number_format($tx->amount, 0, ',', '.') }}
                        </td>
                        <td class="text-end small text-muted">
                            Rp {{ number_format($tx->balance_after, 0, ',', '.') }}
                        </td>
                        <td class="small text-muted" style="max-width:200px">
                            <span class="text-truncate d-block" title="{{ $tx->description }}">
                                {{ $tx->description ?? '—' }}
                            </span>
                        </td>
                        <td class="pe-3 small text-muted text-nowrap">
                            {{ $tx->created_at->format('d M Y, H:i') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between">
            <span class="small text-muted">
                {{ $transactions->total() }} transaksi ditemukan
            </span>
            {{ $transactions->links() }}
        </div>
    @endif
</div>

@endsection
