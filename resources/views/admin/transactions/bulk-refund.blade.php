@extends('layouts.app')
@section('title', 'Bulk Refund')

@section('content')

<div class="d-flex align-items-center gap-2 mb-4">
    <a href="{{ route('admin.transactions.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div>
        <h5 class="fw-bold mb-0">Bulk Refund Pesanan</h5>
        <p class="text-muted small mb-0">
            Pilih pesanan aktif (Menunggu / Sedang Disiapkan) yang akan dibatalkan dan otomatis di-refund.
        </p>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<form method="POST" action="{{ route('admin.transactions.bulk-refund.process') }}" id="bulkForm">
    @csrf

    {{-- Reason input --}}
    <div class="card border-0 shadow-sm rounded-3 mb-3">
        <div class="card-body">
            <label class="form-label fw-semibold">Alasan Refund (opsional)</label>
            <input type="text" name="reason" class="form-control"
                   placeholder="cth: Kantin tutup mendadak, libur nasional, dll."
                   value="{{ old('reason') }}">
            @error('reason') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
        </div>
    </div>

    {{-- Order table --}}
    <div class="card border-0 shadow-sm rounded-3">
        @if($orders->isEmpty())
            <div class="card-body text-center py-5 text-muted">
                <i class="bi bi-check-circle display-5 opacity-25 d-block mb-2"></i>
                Tidak ada pesanan aktif yang perlu di-refund.
            </div>
        @else
            {{-- Controls --}}
            <div class="card-header bg-white border-0 d-flex align-items-center gap-3 pt-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="selectAll">
                    <label class="form-check-label small fw-semibold" for="selectAll">Pilih Semua</label>
                </div>
                <span id="selectedCount" class="badge bg-primary rounded-pill">0 dipilih</span>
                <button type="submit" class="btn btn-sm btn-danger fw-semibold ms-auto"
                        id="submitBtn" disabled
                        onclick="return confirm('Yakin ingin membatalkan dan merefund pesanan yang dipilih?')">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>
                    Proses Refund (<span id="countLabel">0</span> pesanan)
                </button>
            </div>

            @error('order_ids')
                <div class="px-3 pb-2">
                    <div class="text-danger small">{{ $message }}</div>
                </div>
            @enderror

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-3" style="width:40px"></th>
                            <th>#</th>
                            <th>User</th>
                            <th>Slot Istirahat</th>
                            <th>Status</th>
                            <th class="text-end">Total</th>
                            <th class="pe-3">Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="ps-3">
                                <input class="form-check-input order-checkbox" type="checkbox"
                                       name="order_ids[]" value="{{ $order->id }}">
                            </td>
                            <td class="small text-muted">{{ $order->id }}</td>
                            <td class="small fw-semibold">{{ $order->user?->name ?? '—' }}</td>
                            <td class="small">{{ $order->breakTime?->label ?? '—' }}</td>
                            <td>
                                <span class="badge bg-{{ $order->status_color }}">
                                    {{ $order->status_label }}
                                </span>
                            </td>
                            <td class="text-end small fw-semibold">
                                Rp {{ number_format($order->total_price, 0, ',', '.') }}
                            </td>
                            <td class="pe-3 small text-muted text-nowrap">
                                {{ $order->ordered_at?->format('d M Y, H:i') ?? '—' }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($orders->hasPages())
                <div class="card-footer bg-white border-0">
                    {{ $orders->links() }}
                </div>
            @endif
        @endif
    </div>
</form>

<script>
(function () {
    const all       = document.getElementById('selectAll');
    const boxes     = () => document.querySelectorAll('.order-checkbox');
    const badge     = document.getElementById('selectedCount');
    const countLbl  = document.getElementById('countLabel');
    const submitBtn = document.getElementById('submitBtn');

    function updateUI() {
        const checked = document.querySelectorAll('.order-checkbox:checked').length;
        badge.textContent    = checked + ' dipilih';
        countLbl.textContent = checked;
        submitBtn.disabled   = checked === 0;
        if (all) all.checked = checked === boxes().length && boxes().length > 0;
    }

    if (all) {
        all.addEventListener('change', function () {
            boxes().forEach(b => b.checked = this.checked);
            updateUI();
        });
    }

    document.addEventListener('change', function (e) {
        if (e.target.classList.contains('order-checkbox')) updateUI();
    });
})();
</script>
@endsection
