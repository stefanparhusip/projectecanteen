@extends('layouts.app')
@section('title', 'Checkout Batch #' . $batch->id)

@section('content')

{{-- Flash messages --}}
@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 mb-3" role="alert">
    <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

{{-- Breadcrumb --}}
<div class="d-flex align-items-center gap-3 mb-3">
    <a href="{{ route('user.batches.show', $batch) }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Kembali
    </a>
    <h5 class="fw-bold mb-0">
        <i class="bi bi-cash-coin me-2 text-success"></i>Checkout Batch — {{ $batch->class_name }}
    </h5>
</div>

<div class="row justify-content-center g-3">
<div class="col-lg-7">

    {{-- Summary table --}}
    <div class="card border-0 shadow-sm rounded-3 mb-3">
        <div class="card-header bg-white border-0 pt-3 pb-1">
            <h6 class="fw-bold mb-0"><i class="bi bi-receipt me-2 text-primary"></i>Ringkasan Pesanan</h6>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover small mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Anggota</th>
                        <th>Item</th>
                        <th class="text-end">Subtotal</th>
                        <th class="text-center">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activeMembers as $member)
                    <tr>
                        <td>
                            <div class="fw-semibold">{{ $member->user->name }}</div>
                            @if($member->user_id === auth()->id())
                            <span class="badge bg-primary-subtle text-primary" style="font-size:.65rem">Saya</span>
                            @endif
                        </td>
                        <td>
                            @foreach($member->items as $item)
                            <div>{{ $item->quantity }}× {{ $item->menu_name }}</div>
                            @endforeach
                        </td>
                        <td class="text-end fw-semibold" style="color:#f97316">
                            Rp {{ number_format($member->subtotal, 0, ',', '.') }}
                        </td>
                        <td class="text-center">
                            @php $balance = (float) $member->user->balance; @endphp
                            @if($balance >= (float) $member->subtotal)
                            <span class="badge bg-success-subtle text-success small">
                                Rp {{ number_format($balance, 0, ',', '.') }} ✓
                            </span>
                            @else
                            <span class="badge bg-danger-subtle text-danger small">
                                Rp {{ number_format($balance, 0, ',', '.') }} ✗
                            </span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <td colspan="2" class="fw-bold py-2">Total Batch</td>
                        <td class="text-end fw-bold fs-6" style="color:#f97316" colspan="2">
                            Rp {{ number_format($totalPrice, 0, ',', '.') }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    {{-- Insufficient balance warning --}}
    @if($insufficientMembers->isNotEmpty())
    <div class="alert alert-warning rounded-3 mb-3 small">
        <i class="bi bi-exclamation-triangle-fill me-1"></i>
        <strong>Perhatian:</strong> anggota berikut memiliki saldo kurang untuk Split Bill:
        <ul class="mb-0 mt-1">
            @foreach($insufficientMembers as $m)
            <li>{{ $m->user->name }}
                — perlu Rp {{ number_format($m->subtotal, 0, ',', '.') }},
                punya Rp {{ number_format($m->user->balance, 0, ',', '.') }}
            </li>
            @endforeach
        </ul>
        Gunakan opsi <strong>Saya Bayar Semua</strong> jika memungkinkan.
    </div>
    @endif

    {{-- Payment form --}}
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-0 pt-3 pb-1">
            <h6 class="fw-bold mb-0"><i class="bi bi-wallet2 me-2 text-success"></i>Metode Pembayaran</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('user.batches.checkout.process', $batch) }}" method="POST"
                  id="checkout-form">
                @csrf

                {{-- Split bill option --}}
                <label class="d-flex gap-3 border rounded-3 p-3 mb-3 cursor-pointer
                              {{ $insufficientMembers->isNotEmpty() ? 'opacity-50' : '' }}"
                       id="opt-split" style="cursor:pointer">
                    <input type="radio" name="payment_mode" value="split" class="form-check-input mt-1"
                           id="radio-split" {{ $insufficientMembers->isEmpty() ? 'checked' : 'disabled' }}>
                    <div>
                        <div class="fw-semibold">Split Bill</div>
                        <div class="text-muted small">
                            Setiap anggota membayar dari saldo masing-masing.
                            Saldo Anda dipotong:
                            <strong style="color:#f97316">
                                Rp {{ number_format($activeMembers->firstWhere('user_id', auth()->id())?->subtotal ?? 0, 0, ',', '.') }}
                            </strong>
                        </div>
                    </div>
                </label>

                {{-- One pays option --}}
                <label class="d-flex gap-3 border rounded-3 p-3 mb-3" id="opt-one" style="cursor:pointer">
                    <input type="radio" name="payment_mode" value="one_pays" class="form-check-input mt-1"
                           id="radio-one" {{ $insufficientMembers->isNotEmpty() ? 'checked' : '' }}>
                    <div>
                        <div class="fw-semibold">Saya Bayar Semua</div>
                        <div class="text-muted small">
                            Saldo Anda akan dipotong seluruh total batch:
                            <strong style="color:#f97316">
                                Rp {{ number_format($totalPrice, 0, ',', '.') }}
                            </strong>
                            <br>
                            Saldo Anda saat ini:
                            <strong class="{{ (float)$creator->balance >= $totalPrice ? 'text-success' : 'text-danger' }}">
                                Rp {{ number_format($creator->balance, 0, ',', '.') }}
                            </strong>
                            @if((float)$creator->balance < $totalPrice)
                            <span class="badge bg-danger ms-1">Tidak Cukup</span>
                            @endif
                        </div>
                    </div>
                </label>

                {{-- Summary of selected mode --}}
                <div class="alert alert-secondary small rounded-3 mb-3" id="mode-summary">
                    <i class="bi bi-info-circle me-1"></i>
                    Pilih metode pembayaran di atas.
                </div>

                <button type="submit" class="btn btn-success w-100 fw-semibold"
                        id="btn-checkout" onclick="return confirmCheckout()">
                    <i class="bi bi-lock-fill me-1"></i>Konfirmasi & Proses Checkout
                </button>
                <p class="text-muted small text-center mt-2 mb-0">
                    Tindakan ini tidak dapat dibatalkan tanpa memproses refund.
                </p>

            </form>
        </div>
    </div>

</div>
</div>

<script>
(function () {
    const radios   = document.querySelectorAll('input[name="payment_mode"]');
    const summary  = document.getElementById('mode-summary');
    const total    = 'Rp {{ number_format($totalPrice, 0, ',', '.') }}';
    const myShare  = 'Rp {{ number_format($activeMembers->firstWhere('user_id', auth()->id())?->subtotal ?? 0, 0, ',', '.') }}';

    const messages = {
        split:    `<i class="bi bi-people me-1"></i>Split Bill — saldo Anda akan dipotong <strong>${myShare}</strong>.`,
        one_pays: `<i class="bi bi-person-check me-1"></i>Bayar Semua — saldo Anda akan dipotong seluruh total: <strong>${total}</strong>.`,
    };

    function updateSummary() {
        const selected = document.querySelector('input[name="payment_mode"]:checked');
        if (selected) {
            summary.className = selected.value === 'split'
                ? 'alert alert-primary small rounded-3 mb-3'
                : 'alert alert-warning small rounded-3 mb-3';
            summary.innerHTML = messages[selected.value] || '';
        }
    }

    radios.forEach(r => r.addEventListener('change', updateSummary));
    updateSummary();
})();

function confirmCheckout() {
    const mode = document.querySelector('input[name="payment_mode"]:checked')?.value;
    if (!mode) { alert('Pilih metode pembayaran terlebih dahulu.'); return false; }
    const total = 'Rp {{ number_format($totalPrice, 0, ',', '.') }}';
    const msg = mode === 'split'
        ? 'Proses split bill untuk seluruh anggota. Lanjutkan?'
        : `Anda akan membayar ${total} dari saldo Anda. Lanjutkan?`;
    return confirm(msg);
}
</script>

@endsection
