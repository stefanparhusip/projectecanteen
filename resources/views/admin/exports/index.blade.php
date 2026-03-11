@extends('layouts.app')
@section('title', 'Export Data')

@section('content')

<div class="d-flex align-items-center justify-content-between mb-4">
    <h5 class="fw-bold mb-0"><i class="bi bi-cloud-download me-2 text-primary"></i>Export Data</h5>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="row g-4">

    {{-- ── Export Request Form ─────────────────────────────────────── --}}
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-funnel me-2 text-primary"></i>Buat Export Baru</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.exports.store') }}" method="POST">
                    @csrf

                    {{-- Type --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="type">Jenis Data</label>
                        <select name="type" id="type" class="form-select @error('type') is-invalid @enderror" onchange="toggleFilters(this.value)">
                            <option value="">-- Pilih --</option>
                            <option value="transactions" {{ old('type') === 'transactions' ? 'selected' : '' }}>Transaksi Saldo</option>
                            <option value="orders"       {{ old('type') === 'orders'       ? 'selected' : '' }}>Pesanan</option>
                            <option value="users"        {{ old('type') === 'users'        ? 'selected' : '' }}>Pengguna</option>
                        </select>
                        @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    {{-- Common: Date range --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Rentang Tanggal</label>
                        <div class="input-group">
                            <input type="date" name="date_from" id="date_from"
                                   value="{{ old('date_from') }}"
                                   class="form-control @error('date_from') is-invalid @enderror">
                            <span class="input-group-text">s/d</span>
                            <input type="date" name="date_to" id="date_to"
                                   value="{{ old('date_to') }}"
                                   class="form-control @error('date_to') is-invalid @enderror">
                        </div>
                        @error('date_from')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                        @error('date_to')  <div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>

                    {{-- Filter: Status (orders only) --}}
                    <div id="filter-status" class="mb-3 d-none">
                        <label class="form-label fw-semibold">Status Pesanan</label>
                        <select name="status" class="form-select">
                            <option value="">Semua Status</option>
                            <option value="pending">Pending</option>
                            <option value="preparing">Sedang Diproses</option>
                            <option value="ready">Siap Diambil</option>
                            <option value="collected">Sudah Diambil</option>
                            <option value="cancelled">Dibatalkan</option>
                        </select>
                    </div>

                    {{-- Filter: Transaction type (transactions only) --}}
                    <div id="filter-tx-type" class="mb-3 d-none">
                        <label class="form-label fw-semibold">Jenis Transaksi</label>
                        <select name="type_filter" class="form-select">
                            <option value="">Semua Jenis</option>
                            <option value="topup">Top-up</option>
                            <option value="debit">Debit</option>
                            <option value="refund">Refund</option>
                        </select>
                    </div>

                    {{-- Filter: Role (users only) --}}
                    <div id="filter-role" class="mb-3 d-none">
                        <label class="form-label fw-semibold">Role Pengguna</label>
                        <select name="role" class="form-select">
                            <option value="">Semua Role</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        <i class="bi bi-play-fill me-1"></i>Mulai Export
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ── Export History ──────────────────────────────────────────── --}}
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-clock-history me-2 text-primary"></i>Riwayat Export</h6>
            </div>
            <div class="card-body p-0">
                @if($exports->isEmpty())
                    <p class="text-muted text-center py-4">Belum ada riwayat export.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-sm table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Jenis</th>
                                    <th>Filter</th>
                                    <th>Status</th>
                                    <th>Baris</th>
                                    <th>Oleh</th>
                                    <th>Dibuat</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($exports as $export)
                                <tr>
                                    <td>
                                        <span class="badge bg-secondary-subtle text-secondary-emphasis">
                                            {{ ucfirst($export->type) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($export->filters)
                                            @foreach($export->filters as $k => $v)
                                                <span class="badge bg-light text-dark border me-1" style="font-size:.7rem;">
                                                    {{ $k }}: {{ $v }}
                                                </span>
                                            @endforeach
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                            $statusColor = match($export->status) {
                                                'pending'    => 'warning',
                                                'processing' => 'info',
                                                'done'       => 'success',
                                                'failed'     => 'danger',
                                                default      => 'secondary',
                                            };
                                        @endphp
                                        <span class="badge bg-{{ $statusColor }}-subtle text-{{ $statusColor }}-emphasis">
                                            {{ ucfirst($export->status) }}
                                        </span>
                                        @if($export->status === 'failed' && $export->error_message)
                                            <small class="d-block text-danger mt-1" style="font-size:.7rem;" title="{{ $export->error_message }}">
                                                {{ Str::limit($export->error_message, 40) }}
                                            </small>
                                        @endif
                                    </td>
                                    <td>{{ $export->row_count !== null ? number_format($export->row_count) : '—' }}</td>
                                    <td>{{ $export->user->name ?? '—' }}</td>
                                    <td>{{ $export->created_at->format('d/m/Y H:i') }}</td>
                                    <td class="text-end">
                                        @if($export->status === 'done')
                                            <a href="{{ route('admin.exports.download', $export) }}"
                                               class="btn btn-sm btn-outline-success me-1">
                                                <i class="bi bi-download"></i>
                                            </a>
                                        @endif
                                        <form action="{{ route('admin.exports.destroy', $export) }}"
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Hapus riwayat export ini?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="px-3 py-2">
                        {{ $exports->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script>
function toggleFilters(type) {
    document.getElementById('filter-status').classList.add('d-none');
    document.getElementById('filter-tx-type').classList.add('d-none');
    document.getElementById('filter-role').classList.add('d-none');

    if (type === 'orders')       document.getElementById('filter-status').classList.remove('d-none');
    if (type === 'transactions') document.getElementById('filter-tx-type').classList.remove('d-none');
    if (type === 'users')        document.getElementById('filter-role').classList.remove('d-none');
}

// Restore on old() value
document.addEventListener('DOMContentLoaded', function() {
    var sel = document.getElementById('type');
    if (sel && sel.value) toggleFilters(sel.value);
});
</script>
@endpush
