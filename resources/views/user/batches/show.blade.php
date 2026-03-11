@extends('layouts.app')
@section('title', 'Batch #' . $batch->id . ' – ' . $batch->class_name)

@push('styles')
<style>
.member-card { border-left: 3px solid #dee2e6; }
.member-card.is-me { border-left-color: #0d6efd; }
.member-card.payment-paid   { border-left-color: #198754; }
.member-card.payment-waived { border-left-color: #0dcaf0; }

.item-row > td { vertical-align: middle; }

/* Item editor */
#item-editor .qty-btn { width: 28px; height: 28px; padding: 0; line-height: 1; }
#item-editor .item-name { font-size: .82rem; font-weight: 600; }
#item-editor .item-price { font-size: .75rem; color: #888; }
.qty-display { min-width: 24px; text-align: center; font-weight: 700; }
</style>
@endpush

@section('content')

{{-- Flash messages --}}
@foreach(['success','error','info'] as $type)
@if(session($type))
<div class="alert alert-{{ $type === 'error' ? 'danger' : $type }} alert-dismissible fade show border-0 shadow-sm rounded-3 mb-3" role="alert">
    {!! session($type) !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
@endforeach

{{-- Header --}}
<div class="d-flex align-items-center gap-3 mb-3 flex-wrap">
    <a href="{{ route('user.batches.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Kembali
    </a>
    <h5 class="fw-bold mb-0">
        {{ $batch->class_name }}
        <span class="text-muted fw-normal small">#{{ $batch->id }}</span>
    </h5>
    <span class="badge bg-{{ $batch->status_color }}">{{ $batch->status_label }}</span>

    @if($batch->isOpen())
    <span class="badge bg-light text-dark border font-monospace ms-auto">
        Kode: <strong>{{ $batch->code }}</strong>
        <button class="btn btn-link btn-sm p-0 ms-1 text-secondary" id="copy-code" title="Salin">
            <i class="bi bi-clipboard" id="copy-icon"></i>
        </button>
    </span>
    @endif
</div>

<div class="row g-3">

    {{-- ── LEFT: Batch info + actions ─────────────────────────── --}}
    <div class="col-lg-4">

        {{-- Info card --}}
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-info-circle me-2 text-primary"></i>Info Batch</h6>
            </div>
            <div class="card-body">
                <table class="table table-sm small mb-0">
                    <tr>
                        <td class="text-muted py-1" width="110">Pembuat</td>
                        <td>{{ $batch->createdBy->name }}</td>
                    </tr>
                    <tr>
                        <td class="text-muted py-1">Slot Ambil</td>
                        <td>
                            {{ $batch->breakTime->label }}
                            <span class="text-muted">({{ \Carbon\Carbon::parse($batch->breakTime->getRawOriginal('start_time'))->format('H:i') }})</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted py-1">Anggota</td>
                        <td>{{ $batch->members->count() }} orang</td>
                    </tr>
                    @if($batch->note)
                    <tr>
                        <td class="text-muted py-1">Catatan</td>
                        <td>{{ $batch->note }}</td>
                    </tr>
                    @endif
                    <tr class="table-light">
                        <td class="py-2 fw-bold">Total Batch</td>
                        <td class="fw-bold" style="color:#f97316">
                            Rp {{ number_format($batch->members->sum('subtotal'), 0, ',', '.') }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Actions --}}
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-gear me-2 text-secondary"></i>Aksi</h6>
            </div>
            <div class="card-body d-flex flex-column gap-2">

                {{-- JOIN (not yet a member, batch open) --}}
                @if($batch->isOpen() && !$isMember)
                <form action="{{ route('user.batches.join', $batch) }}" method="POST">
                    @csrf
                    <button class="btn btn-success w-100">
                        <i class="bi bi-person-plus me-1"></i>Bergabung ke Batch
                    </button>
                </form>
                @endif

                {{-- LOCK (creator, open) --}}
                @if($isCreator && $batch->isOpen())
                <form action="{{ route('user.batches.lock', $batch) }}" method="POST">
                    @csrf @method('PATCH')
                    <button class="btn btn-warning w-100"
                            onclick="return confirm('Kunci batch? Anggota tidak bisa mengubah item setelah ini.')">
                        <i class="bi bi-lock me-1"></i>Kunci Batch
                    </button>
                </form>
                @endif

                {{-- CHECKOUT (creator, locked) --}}
                @if($isCreator && $batch->isLocked())
                <a href="{{ route('user.batches.checkout', $batch) }}" class="btn btn-primary">
                    <i class="bi bi-cash-coin me-1"></i>Proses Checkout
                </a>
                @endif

                {{-- LEAVE (member, not creator, open) --}}
                @if($isMember && !$isCreator && $batch->isOpen())
                <form action="{{ route('user.batches.leave', $batch) }}" method="POST"
                      onsubmit="return confirm('Keluar dari batch ini?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-outline-secondary w-100">
                        <i class="bi bi-box-arrow-left me-1"></i>Keluar dari Batch
                    </button>
                </form>
                @endif

                {{-- CANCEL (creator, not already checked-out-and-done) --}}
                @if($isCreator && !$batch->isCancelled())
                <form action="{{ route('user.batches.cancel', $batch) }}" method="POST"
                      onsubmit="return confirm('Batalkan batch ini? {{ $batch->isCheckedOut() ? 'Semua pesanan akan dibatalkan dan saldo dikembalikan.' : '' }}')">
                    @csrf @method('DELETE')
                    <button class="btn btn-outline-danger w-100">
                        <i class="bi bi-x-circle me-1"></i>Batalkan Batch
                    </button>
                </form>
                @endif

                {{-- CHECKED OUT info --}}
                @if($batch->isCheckedOut())
                <div class="alert alert-info small mb-0">
                    <i class="bi bi-check-circle-fill me-1"></i>
                    Batch sudah di-checkout. Tiap anggota bisa cek pesanan mereka di Riwayat.
                </div>
                @endif

            </div>
        </div>

    </div>

    {{-- ── RIGHT: Members + Item editor ───────────────────────── --}}
    <div class="col-lg-8">

        {{-- Item Editor (only when open + member) --}}
        @if($batch->isOpen() && $isMember)
        <div class="card border-0 shadow-sm rounded-3 mb-3" id="item-editor">
            <div class="card-header bg-white border-0 pt-3 pb-1 d-flex align-items-center justify-content-between">
                <h6 class="fw-bold mb-0"><i class="bi bi-cart3 me-2 text-success"></i>Item Saya</h6>
                <span class="badge bg-primary" id="editor-total">
                    Rp {{ number_format($myMember?->subtotal ?? 0, 0, ',', '.') }}
                </span>
            </div>
            <div class="card-body">
                <form action="{{ route('user.batches.items', $batch) }}" method="POST" id="items-form">
                    @csrf

                    @foreach($menus as $category => $menuItems)
                    <div class="mb-3">
                        <div class="text-muted small fw-semibold text-uppercase mb-2"
                             style="letter-spacing:.06em">{{ $category }}</div>
                        @foreach($menuItems as $menu)
                        <div class="d-flex align-items-center justify-content-between mb-2 py-1
                                    border-bottom" data-menu-id="{{ $menu->id }}"
                             data-price="{{ $menu->price }}">
                            <div>
                                <div class="item-name">{{ $menu->name }}</div>
                                <div class="item-price">Rp {{ number_format($menu->price, 0, ',', '.') }}</div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary qty-btn btn-minus"
                                        data-id="{{ $menu->id }}">−</button>
                                <span class="qty-display" id="qty-{{ $menu->id }}">
                                    {{-- Fill from saved items --}}
                                    {{ $myMember?->items->where('menu_id', $menu->id)->first()?->quantity ?? 0 }}
                                </span>
                                <button type="button" class="btn btn-sm btn-outline-primary qty-btn btn-plus"
                                        data-id="{{ $menu->id }}" data-max="{{ $menu->stock }}">+</button>
                                {{-- Hidden input maintained by JS --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach

                    <div id="hidden-items-container"></div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-semibold">Subtotal saya: <span id="editor-total-text"
                              style="color:#f97316">Rp 0</span></span>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-save me-1"></i>Simpan Item
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endif

        {{-- Members list --}}
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-people me-2 text-warning"></i>Daftar Anggota</h6>
            </div>
            <div class="card-body p-0">
                @foreach($batch->members->sortByDesc('subtotal') as $member)
                @php
                    $isMe = $member->user_id === auth()->id();
                    $payClass = $member->isPaid() ? 'payment-paid' : ($member->isWaived() ? 'payment-waived' : '');
                @endphp
                <div class="member-card p-3 border-bottom {{ $isMe ? 'is-me' : '' }} {{ $payClass }}">
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                        <div>
                            <span class="fw-semibold">{{ $member->user->name }}</span>
                            @if($isMe) <span class="badge bg-primary-subtle text-primary ms-1 small">Saya</span> @endif
                            @if($batch->created_by_user_id === $member->user_id)
                                <span class="badge bg-secondary-subtle text-secondary ms-1 small">Pembuat</span>
                            @endif
                        </div>
                        <div class="text-end">
                            <span class="fw-semibold" style="color:#f97316">
                                Rp {{ number_format($member->subtotal, 0, ',', '.') }}
                            </span>
                            @if($batch->isCheckedOut())
                                @if($member->isPaid())
                                    <span class="badge bg-success ms-1 small">Dibayar</span>
                                @elseif($member->isWaived())
                                    <span class="badge bg-info ms-1 small">Dibayarkan</span>
                                @endif
                            @endif
                            @if($member->order_id)
                            <div>
                                <a href="{{ route('user.orders.show', $member->order_id) }}"
                                   class="small text-decoration-none">
                                    <i class="bi bi-receipt me-1"></i>Pesanan #{{ $member->order_id }}
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    @if($member->items->isNotEmpty())
                    <ul class="list-unstyled mb-0 mt-2 ps-1 small text-muted">
                        @foreach($member->items as $item)
                        <li>· {{ $item->quantity }}× {{ $item->menu_name }}
                            <span class="text-muted">(Rp {{ number_format($item->subtotal, 0, ',', '.') }})</span>
                        </li>
                        @endforeach
                    </ul>
                    @else
                    <div class="small text-muted mt-1 fst-italic">Belum ada item.</div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

<script>
// ── Copy code ─────────────────────────────────────────────────────────────────
document.getElementById('copy-code')?.addEventListener('click', function () {
    navigator.clipboard?.writeText('{{ $batch->code }}');
    document.getElementById('copy-icon').className = 'bi bi-clipboard-check text-success';
    setTimeout(() => document.getElementById('copy-icon').className = 'bi bi-clipboard', 2000);
});

// ── Item editor quantity manager ──────────────────────────────────────────────
@if($batch->isOpen() && $isMember)
(function () {
    const prices = {};
    const quantities = {};

    // Initialise from rendered badges
    document.querySelectorAll('[data-menu-id]').forEach(row => {
        const id    = row.dataset.menuId;
        const price = parseFloat(row.dataset.price);
        const qty   = parseInt(document.getElementById('qty-' + id)?.textContent.trim() ?? '0', 10);
        prices[id]    = price;
        quantities[id] = qty;
    });

    function recalc() {
        let total = 0;
        Object.keys(quantities).forEach(id => {
            total += (quantities[id] || 0) * (prices[id] || 0);
        });
        const fmt = 'Rp ' + Math.round(total).toLocaleString('id-ID');
        document.getElementById('editor-total').textContent      = fmt;
        document.getElementById('editor-total-text').textContent = fmt;
    }

    function buildHiddenInputs() {
        const container = document.getElementById('hidden-items-container');
        container.innerHTML = '';
        let idx = 0;
        Object.keys(quantities).forEach(id => {
            const qty = quantities[id] || 0;
            if (qty > 0) {
                container.innerHTML +=
                    `<input type="hidden" name="items[${idx}][menu_id]" value="${id}">` +
                    `<input type="hidden" name="items[${idx}][quantity]" value="${qty}">`;
                idx++;
            }
        });
    }

    document.querySelectorAll('.btn-plus').forEach(btn => {
        btn.addEventListener('click', function () {
            const id  = this.dataset.id;
            const max = parseInt(this.dataset.max, 10);
            if ((quantities[id] || 0) < max) {
                quantities[id] = (quantities[id] || 0) + 1;
            }
            document.getElementById('qty-' + id).textContent = quantities[id];
            recalc();
        });
    });

    document.querySelectorAll('.btn-minus').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.dataset.id;
            if ((quantities[id] || 0) > 0) {
                quantities[id]--;
            }
            document.getElementById('qty-' + id).textContent = quantities[id];
            recalc();
        });
    });

    document.getElementById('items-form').addEventListener('submit', function () {
        buildHiddenInputs();
    });

    recalc();
})();
@endif
</script>

@endsection
