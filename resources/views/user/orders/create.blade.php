@extends('layouts.app')
@section('title', 'Buat Pesanan')

@push('styles')
<style>
    /* ── Menu cards ────────────────────────────────────── */
    .menu-card {
        cursor: pointer;
        transition: all .15s;
        border: 2px solid transparent;
        user-select: none;
    }
    .menu-card:hover  { border-color: #f97316; transform: translateY(-2px); }
    .menu-card.selected { border-color: #f97316; background-color: #fff7ed; }
    [data-theme="dark"] .menu-card.selected { background-color: #2a1a08; }
    .menu-card .qty-badge {
        position: absolute; top: -8px; right: -8px;
        background: #f97316; color: #fff;
        border-radius: 50%; width: 22px; height: 22px;
        font-size: .72rem; font-weight: 700;
        display: none; align-items: center; justify-content: center;
    }
    .menu-card.selected .qty-badge { display: flex; }

    /* ── Category labels ───────────────────────────────── */
    .cat-label {
        font-size: .7rem; letter-spacing: .06em; text-transform: uppercase;
        color: #6c757d; font-weight: 600; margin: .75rem 0 .4rem;
    }

    /* ── Break time radio cards ────────────────────────── */
    .bt-option {
        border: 2px solid var(--border-color, #dee2e6);
        border-radius: .5rem;
        padding: .6rem .75rem;
        margin-bottom: .4rem;
        transition: border-color .15s;
    }
    .bt-option:has(input:checked)  { border-color: #f97316; background-color: #fff7ed; }
    [data-theme="dark"] .bt-option:has(input:checked) { background-color: #2a1a08; }
    .bt-option.bt-closed {
        opacity: .55;
        cursor: not-allowed;
        background-color: #f8f9fa;
    }
    [data-theme="dark"] .bt-option.bt-closed { background-color: #1a1a1a; }
</style>
@endpush

@section('content')

{{-- ── Validation errors ─────────────────────────────────────────────── --}}
@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show mb-4">
    <i class="bi bi-exclamation-triangle me-2"></i>
    <strong>Pesanan gagal:</strong>
    <ul class="mb-0 mt-1 ps-3">
        @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

{{-- ── Server-time & order-window widget ───────────────────────────────── --}}
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-body py-2 px-3">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">

            {{-- Waktu server --}}
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-clock-history fs-5 text-muted"></i>
                <div>
                    <div class="small text-muted lh-1">Tanggal</div>
                    <div class="fw-semibold small">{{ $now->locale('id')->translatedFormat('l, d F Y') }}</div>
                </div>
                <div class="vr mx-2"></div>
                <div>
                    <div class="small text-muted lh-1">Jam sekarang</div>
                    <div class="fw-semibold small">{{ $now->format('H:i') }} <span class="text-muted fw-normal">WIB</span></div>
                </div>
            </div>

            {{-- Status masing-masing slot --}}
            <div class="d-flex flex-wrap gap-2">
                @foreach($breakTimes as $bt)
                    <div class="d-flex align-items-center gap-1 rounded-pill px-2 py-1
                        {{ $bt->canOrder() ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }}"
                        style="font-size:.72rem; border: 1px solid currentColor">
                        <i class="bi {{ $bt->canOrder() ? 'bi-check-circle' : 'bi-x-circle' }}"></i>
                        <span class="fw-semibold">{{ $bt->label }}</span>
                        <span>— {{ $bt->canOrder() ? 'Masih bisa dipesan' : 'Sudah ditutup' }}</span>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

{{-- ── Banner: belum buka ────────────────────────────────────────────────── --}}
@if(! $orderOpen)
<div class="alert alert-warning d-flex align-items-center gap-3 mb-4">
    <i class="bi bi-lock fs-4 flex-shrink-0"></i>
    <div>
        <strong>Pemesanan belum dibuka.</strong>
        Sistem pre-order baru bisa digunakan mulai pukul <strong>07:00 WIB</strong>.
        Silakan kembali lagi nanti.
    </div>
</div>
@endif

{{-- ── Main rows ────────────────────────────────────────────────────────── --}}
<div class="row g-4">

    {{-- ── Kiri: Daftar menu per kategori ─────────────────────────── --}}
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <div class="d-flex align-items-center justify-content-between gap-2">
                    <div>
                        <h6 class="fw-bold mb-0">
                            <i class="bi bi-grid-3x3-gap me-2" style="color:#f97316" aria-hidden="true"></i>Pilih Menu
                        </h6>
                        <p class="text-muted small mb-0">Klik atau tekan Enter pada menu untuk menambahkan ke keranjang</p>
                    </div>
                    {{-- Voice ordering button (shown only when Web Speech API is available) --}}
                    <button type="button" id="voice-order-btn"
                            class="btn btn-sm btn-outline-secondary d-none"
                            aria-pressed="false"
                            aria-label="Aktifkan pesan suara. Ucapkan nama menu untuk menambahkan ke keranjang.">
                        <i class="bi bi-mic me-1" aria-hidden="true"></i>Pesan Suara
                    </button>
                </div>
                {{-- Voice status (aria-live so screen readers announce changes) --}}
                <div id="voice-status" class="small text-muted mt-1 d-none"
                     aria-live="polite" aria-atomic="true" role="status"></div>
            </div>
            <div class="card-body">
                @forelse($menus as $categoryName => $categoryMenus)
                    <div class="cat-label"><i class="bi bi-tag me-1"></i>{{ $categoryName }}</div>
                    <div class="row row-cols-2 row-cols-sm-3 g-2 mb-2">
                        @foreach($categoryMenus as $menu)
                        <div class="col">
                            @php
                                $disabled   = ($menu->stock == 0 || ! $orderOpen);
                                $priceLabel = 'Rp ' . number_format($menu->price, 0, ',', '.');
                                $stockLabel = $menu->stock > 0 ? "Stok: {$menu->stock}" : 'Habis';
                            @endphp
                            <div class="card menu-card h-100 border-0 shadow-sm rounded-3 position-relative
                                        {{ $disabled ? 'opacity-50 pe-none' : '' }}"
                                 data-id="{{ $menu->id }}"
                                 data-name="{{ addslashes($menu->name) }}"
                                 data-price="{{ $menu->price }}"
                                 data-stock="{{ $menu->stock }}"
                                 role="button"
                                 tabindex="{{ $disabled ? '-1' : '0' }}"
                                 aria-label="{{ $menu->name }}, {{ $priceLabel }}, {{ $stockLabel }}"
                                 aria-pressed="false"
                                 aria-disabled="{{ $disabled ? 'true' : 'false' }}"
                                 onclick="{{ $disabled ? '' : 'addItem(this)' }}"
                                 onkeydown="if(!{{ $disabled ? 'true' : 'false' }} && (event.key==='Enter'||event.key===' ')){event.preventDefault();addItem(this);}">
                                <div class="qty-badge" id="badge-{{ $menu->id }}" aria-hidden="true">1</div>
                                @if($menu->image_url)
                                    <img src="{{ $menu->image_url }}"
                                         class="card-img-top object-fit-cover rounded-top-3"
                                         style="height:85px" alt="{{ $menu->name }}"
                                         onerror="this.style.display='none'">
                                @else
                                    <div class="rounded-top-3 bg-light d-flex align-items-center
                                                justify-content-center" style="height:85px">
                                        <i class="bi bi-image text-muted fs-3"></i>
                                    </div>
                                @endif
                                <div class="card-body p-2">
                                    <div class="small fw-semibold" style="line-height:1.2">{{ $menu->name }}</div>
                                    <div class="fw-bold small mt-1" style="color:#f97316">
                                        Rp {{ number_format($menu->price, 0, ',', '.') }}
                                    </div>
                                    @if($menu->stock > 0)
                                        <span class="badge bg-success-subtle text-success mt-1"
                                              style="font-size:.6rem">Stok: {{ $menu->stock }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger mt-1"
                                              style="font-size:.6rem">Habis</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @empty
                    <div class="text-center py-5 text-muted">
                        <i class="bi bi-inbox fs-2 d-block mb-2"></i>
                        Belum ada menu yang tersedia.
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    {{-- ── Kanan: Keranjang + Form ────────────────────────────────── --}}
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-3 sticky-top" style="top:80px">
            <div class="card-header bg-white border-0 pt-3">
                <h6 class="fw-bold mb-0">
                    <i class="bi bi-cart3 me-2" style="color:#f97316" aria-hidden="true"></i>Keranjang Pesanan
                </h6>
            </div>
            <div class="card-body">

                <form action="{{ route('user.orders.store') }}" method="POST" id="order-form">
                    @csrf

                    {{-- ── Waktu Pengambilan ──────────────────────── --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">
                            <i class="bi bi-clock me-1"></i>Waktu Pengambilan
                        </label>

                        @foreach($breakTimes as $bt)
                        @php $available = $bt->canOrder() && $orderOpen; @endphp
                        <div class="bt-option {{ $available ? '' : 'bt-closed' }}">
                            <div class="d-flex align-items-start gap-2">
                                <input class="form-check-input mt-1 flex-shrink-0"
                                       type="radio"
                                       name="break_time_id"
                                       id="bt-{{ $bt->id }}"
                                       value="{{ $bt->id }}"
                                       {{ old('break_time_id') == $bt->id ? 'checked' : '' }}
                                       {{ ! $available ? 'disabled' : '' }}
                                       required>
                                <label class="w-100 {{ ! $available ? 'text-muted' : '' }}"
                                       for="{{ $available ? 'bt-'.$bt->id : '' }}"
                                       style="{{ $available ? 'cursor:pointer' : 'cursor:not-allowed' }}">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold small">{{ $bt->label }}</span>
                                        @if($available)
                                            <span class="badge bg-success-subtle text-success"
                                                  style="font-size:.6rem">
                                                <i class="bi bi-check-circle me-1"></i>Masih bisa dipesan
                                            </span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger"
                                                  style="font-size:.6rem">
                                                <i class="bi bi-x-circle me-1"></i>Sudah Ditutup
                                            </span>
                                        @endif
                                    </div>
                                    <div class="text-muted mt-1" style="font-size:.69rem">
                                        <i class="bi bi-alarm me-1"></i>
                                        Ambil:
                                        {{ \Carbon\Carbon::parse($bt->getRawOriginal('start_time'))->format('H:i') }}
                                        –
                                        {{ \Carbon\Carbon::parse($bt->getRawOriginal('end_time'))->format('H:i') }}
                                    </div>
                                    <div class="{{ $available ? 'text-danger' : 'text-muted' }}"
                                         style="font-size:.68rem">
                                        <i class="bi bi-stopwatch me-1"></i>
                                        Deadline order: {{ $bt->deadlineToday()->format('H:i') }} WIB
                                    </div>
                                </label>
                            </div>
                        </div>
                        @endforeach

                        @error('break_time_id')
                            <div class="text-danger small mt-1">
                                <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- ── Item yang dipilih ──────────────────────── --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold small" id="cart-label">Item Dipilih</label>
                        <div id="item-list"
                             aria-labelledby="cart-label"
                             aria-live="polite"
                             aria-atomic="false"
                             role="region">
                            <p class="text-muted small mb-0" id="empty-hint">
                                <i class="bi bi-hand-index me-1" aria-hidden="true"></i>Belum ada menu yang dipilih.
                            </p>
                        </div>
                        <div id="items-input-container" aria-hidden="true"></div>
                    </div>

                    {{-- ── Catatan ──────────────────────────────────── --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">
                            Catatan <span class="text-muted fw-normal">(opsional)</span>
                        </label>
                        <textarea name="note" class="form-control form-control-sm" rows="2"
                                  placeholder="Contoh: tidak pedas, tanpa bawang...">{{ old('note') }}</textarea>
                    </div>

                    {{-- ── Ringkasan saldo/total ────────────────────── --}}
                    <div class="rounded-3 bg-light p-3 mb-3">
                        <div class="d-flex justify-content-between small mb-1">
                            <span class="text-muted">Saldo Anda</span>
                            <span class="fw-semibold">
                                Rp {{ number_format(auth()->user()->balance, 0, ',', '.') }}
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">Total Pesanan</span>
                            <span class="fw-bold fs-6" id="total-price" style="color:#f97316">Rp 0</span>
                        </div>
                        <div class="small text-danger mt-1 d-none" id="balance-warning">
                            <i class="bi bi-exclamation-triangle me-1"></i>Saldo tidak mencukupi!
                        </div>
                    </div>

                    {{-- ── Submit ───────────────────────────────────── --}}
                    <button type="submit" id="submit-btn" disabled
                            class="btn w-100 fw-semibold"
                            style="background-color:#f97316;color:#fff">
                        <i class="bi bi-bag-check me-2"></i>Buat Pesanan
                    </button>

                    @if(! $orderOpen)
                    <div class="text-center mt-2 small text-warning">
                        <i class="bi bi-lock me-1"></i>Pemesanan dibuka pukul 07:00 WIB
                    </div>
                    @else
                    <div class="text-center mt-2 small text-muted">
                        <i class="bi bi-shield-check me-1"></i>Saldo dipotong otomatis saat konfirmasi
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
// ── Konstanta dari server ───────────────────────────────────────────────
const ORDER_OPEN   = {{ $orderOpen ? 'true' : 'false' }};   // jam buka 07:00 terpenuhi?
const USER_BALANCE = {{ (float) auth()->user()->balance }};

// ── State keranjang ────────────────────────────────────────────────────
const cart = {}; // { menuId: { name, price, qty, stock } }

function fmt(num) {
    return 'Rp ' + Math.round(num).toLocaleString('id-ID');
}

// ── Tambah item ke keranjang ───────────────────────────────────────────
function addItem(card) {
    if (! ORDER_OPEN) return; // blok dari sisi client jika belum jam 07:00

    const id    = card.dataset.id;
    const name  = card.dataset.name;
    const price = parseFloat(card.dataset.price);
    const stock = parseInt(card.dataset.stock);

    if (cart[id]) {
        if (cart[id].qty >= stock) return; // batasi stok
        cart[id].qty++;
    } else {
        cart[id] = { name, price, qty: 1, stock };
        card.classList.add('selected');
        card.setAttribute('aria-pressed', 'true');
    }

    document.getElementById('badge-' + id).textContent = cart[id].qty;
    // Update aria-label with current qty
    card.setAttribute('aria-label', name + ', Rp ' + Math.round(price).toLocaleString('id-ID') + ', dipilih ' + cart[id].qty);
    renderCart();
}

// ── Ubah jumlah item ───────────────────────────────────────────────────
function changeQty(id, delta) {
    if (! cart[id]) return;
    const newQty = cart[id].qty + delta;
    if (newQty > cart[id].stock) return; // batas stok
    if (newQty <= 0) { removeItem(id); return; }
    cart[id].qty = newQty;
    document.getElementById('badge-' + id).textContent = cart[id].qty;
    renderCart();
}

// ── Hapus item dari keranjang ──────────────────────────────────────────
function removeItem(id) {
    delete cart[id];
    const card = document.querySelector('[data-id="' + id + '"]');
    if (card) {
        card.classList.remove('selected');
        card.setAttribute('aria-pressed', 'false');
        // Restore original aria-label
        const name  = card.dataset.name;
        const price = parseFloat(card.dataset.price);
        const stock = parseInt(card.dataset.stock);
        const stockLabel = stock > 0 ? 'Stok: ' + stock : 'Habis';
        card.setAttribute('aria-label', name + ', Rp ' + Math.round(price).toLocaleString('id-ID') + ', ' + stockLabel);
        const badge = document.getElementById('badge-' + id);
        if (badge) badge.textContent = 1;
    }
    renderCart();
}

// ── Render ulang keranjang ─────────────────────────────────────────────
function renderCart() {
    const list      = document.getElementById('item-list');
    const container = document.getElementById('items-input-container');
    const btn       = document.getElementById('submit-btn');
    const warning   = document.getElementById('balance-warning');

    list.innerHTML      = '';
    container.innerHTML = '';

    const keys = Object.keys(cart);

    if (keys.length === 0) {
        list.innerHTML = '<p class="text-muted small mb-0" id="empty-hint">' +
            '<i class="bi bi-hand-index me-1"></i>Belum ada menu yang dipilih.</p>';
        document.getElementById('total-price').textContent = 'Rp 0';
        warning.classList.add('d-none');
        btn.disabled = true;
        btn.innerHTML = '<i class="bi bi-bag-check me-2"></i>Buat Pesanan';
        return;
    }

    let total = 0;

    keys.forEach((id, idx) => {
        const item = cart[id];
        total += item.price * item.qty;

        // Baris tampilan item
        const row = document.createElement('div');
        row.className = 'd-flex align-items-center justify-content-between gap-2 bg-light rounded-3 p-2 mb-1';
        row.innerHTML =
            `<div class="small fw-semibold flex-grow-1 text-truncate">${item.name}</div>` +
            `<div class="d-flex align-items-center gap-1 flex-shrink-0">` +
            `  <button type="button" class="btn btn-sm btn-outline-secondary py-0 px-1 lh-1"
                       aria-label="Kurangi jumlah ${item.name}"
                       onclick="changeQty('${id}',-1)">−</button>` +
            `  <span class="small fw-bold px-1" style="min-width:18px;text-align:center"
                     aria-label="Jumlah: ${item.qty}">${item.qty}</span>` +
            `  <button type="button" class="btn btn-sm btn-outline-secondary py-0 px-1 lh-1"
                       aria-label="Tambah jumlah ${item.name}"
                       onclick="changeQty('${id}',1)">+</button>` +
            `  <button type="button" class="btn btn-sm btn-link text-danger p-0 ms-1 lh-1"
                       aria-label="Hapus ${item.name} dari keranjang"
                       onclick="removeItem('${id}')"><i class="bi bi-x" aria-hidden="true"></i></button>` +
            `</div>`;
        list.appendChild(row);

        // Subtotal kecil
        const sub = document.createElement('div');
        sub.className = 'text-end text-muted mb-2';
        sub.style.fontSize = '.7rem';
        sub.textContent = fmt(item.price) + ' × ' + item.qty + ' = ' + fmt(item.price * item.qty);
        list.appendChild(sub);

        // Hidden inputs form
        container.innerHTML +=
            `<input type="hidden" name="items[${idx}][menu_id]" value="${id}">` +
            `<input type="hidden" name="items[${idx}][quantity]" value="${item.qty}">`;
    });

    document.getElementById('total-price').textContent = fmt(total);

    const notEnoughBalance = total > USER_BALANCE;
    warning.classList.toggle('d-none', ! notEnoughBalance);

    // Tombol disabled jika: belum jam 07:00  ATAU  keranjang kosong  ATAU  saldo kurang
    const shouldDisable = ! ORDER_OPEN || keys.length === 0 || notEnoughBalance;
    btn.disabled = shouldDisable;

    if (! ORDER_OPEN) {
        btn.innerHTML = '<i class="bi bi-lock me-2"></i>Pemesanan Belum Dibuka';
    } else if (notEnoughBalance) {
        btn.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i>Saldo Tidak Cukup';
    } else {
        btn.innerHTML = '<i class="bi bi-bag-check me-2"></i>Buat Pesanan — ' + fmt(total);
    }
}

// ── Optimistic submit with offline queue ─────────────────────────────────────
(function () {
    const QUEUE_KEY  = 'usk_order_queue';
    const MAX_TRIES  = 5;

    function uuidv4() {
        if (typeof crypto !== 'undefined' && crypto.randomUUID) return crypto.randomUUID();
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
            const r = (Math.random() * 16) | 0;
            return (c === 'x' ? r : (r & 0x3) | 0x8).toString(16);
        });
    }

    function loadQueue() {
        try { return JSON.parse(localStorage.getItem(QUEUE_KEY) || '[]'); } catch { return []; }
    }
    function saveQueue(q) { localStorage.setItem(QUEUE_KEY, JSON.stringify(q)); }

    function enqueue(entry) {
        const q = loadQueue();
        q.push(entry);
        saveQueue(q);
    }
    function dequeue(id) { saveQueue(loadQueue().filter(e => e.id !== id)); }
    function updateEntry(id, patch) {
        saveQueue(loadQueue().map(e => e.id === id ? Object.assign({}, e, patch) : e));
    }

    function buildFormData(entry, csrf) {
        const d = new FormData();
        d.append('_token',          csrf);
        d.append('break_time_id',   entry.break_time_id);
        d.append('idempotency_key', entry.id);
        if (entry.note) d.append('note', entry.note);
        (entry.items || []).forEach((item, i) => {
            d.append('items[' + i + '][menu_id]',  item.menu_id);
            d.append('items[' + i + '][quantity]', item.quantity);
        });
        return d;
    }

    function showSubmitState(state, msg) {
        const btn = document.getElementById('submit-btn');
        if (!btn) return;
        btn.disabled = true;
        const labels = {
            sending:  '<span class="spinner-border spinner-border-sm me-2"></span>Mengirim…',
            queued:   '<i class="bi bi-clock-history me-2"></i>Tersimpan, menunggu koneksi…',
            success:  '<i class="bi bi-check-circle me-2"></i>Berhasil!',
            error:    '<i class="bi bi-exclamation-triangle me-2"></i>' + (msg || 'Gagal'),
        };
        btn.innerHTML = labels[state] || labels.sending;
    }

    function showBanner(type, html) {
        let el = document.getElementById('order-result-banner');
        if (!el) {
            el = document.createElement('div');
            el.id = 'order-result-banner';
            el.className = 'alert alert-dismissible fade show mb-3';
            el.role = 'alert';
            document.getElementById('order-form')?.before(el);
        }
        el.className = 'alert alert-dismissible fade show mb-3 alert-' + (type === 'success' ? 'success' : 'danger');
        el.innerHTML = html + '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
    }

    document.getElementById('order-form')?.addEventListener('submit', async function (e) {
        e.preventDefault();

        const form    = this;
        const csrf    = document.querySelector('meta[name="csrf-token"]')?.content || form.querySelector('[name="_token"]')?.value || '';
        const note    = form.querySelector('[name="note"]')?.value || null;
        const btInput = form.querySelector('input[name="break_time_id"]:checked');

        if (!btInput) {
            showBanner('error', '<i class="bi bi-exclamation-triangle me-2"></i>Pilih waktu pengambilan terlebih dahulu.');
            return;
        }

        const items = Object.keys(cart).map(id => ({ menu_id: parseInt(id), quantity: cart[id].qty }));
        if (items.length === 0) {
            showBanner('error', '<i class="bi bi-exclamation-triangle me-2"></i>Tambahkan minimal 1 menu.');
            return;
        }

        const total = Object.values(cart).reduce((s, v) => s + v.price * v.qty, 0);

        const entry = {
            id:              uuidv4(),     // idempotency key
            break_time_id:   btInput.value,
            items:           items,
            note:            note,
            estimated_total: total,
            created_at:      new Date().toISOString(),
            attempts:        0,
            last_error:      null,
        };

        // ── Optimistic UI: immediately show sending state ──────────────────
        showSubmitState('sending');

        if (!navigator.onLine) {
            // Offline path: queue and show feedback
            enqueue(entry);
            showSubmitState('queued');
            showBanner('warning', '<i class="bi bi-wifi-off me-2"></i>Anda offline. Pesanan disimpan dan akan dikirim otomatis saat koneksi pulih.');
            // Tell service worker to register a background sync
            if ('serviceWorker' in navigator && navigator.serviceWorker.controller) {
                navigator.serviceWorker.controller.postMessage({ type: 'QUEUE_ORDER', payload: entry });
            }
            return;
        }

        // Online path: enqueue first (handles tab-close mid-flight), then POST
        enqueue(entry);
        try {
            const res = await fetch('/orders', {
                method:  'POST',
                headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': csrf },
                body:    buildFormData(entry, csrf),
            });

            updateEntry(entry.id, { attempts: 1 });

            if (res.ok) {
                const json = await res.json().catch(() => ({}));
                dequeue(entry.id);
                showSubmitState('success');
                // Redirect to order detail
                window.location.href = json.redirect_url || '/orders/history';
            } else {
                const json = await res.json().catch(() => ({}));
                const msg  = json.message || ('Server error ' + res.status);
                // Business errors (422) are permanent — dequeue
                if (res.status === 422 || res.status === 403) dequeue(entry.id);
                showSubmitState('error', msg);
                showBanner('error', '<i class="bi bi-exclamation-triangle me-2"></i>' + msg);
                // Re-enable button so user can retry
                const btn = document.getElementById('submit-btn');
                if (btn) { btn.disabled = false; renderCart(); }
            }
        } catch (networkErr) {
            // Network failure while nominally online — keep in queue
            updateEntry(entry.id, { last_error: networkErr.message });
            showSubmitState('queued');
            showBanner('warning', '<i class="bi bi-wifi-off me-2"></i>Koneksi terputus. Pesanan disimpan dan akan dikirim saat online.');
        }
    });
})();
</script>

{{-- ── Voice Ordering (Web Speech API) ──────────────────────────────────────
     Uses the browser's built-in SpeechRecognition API (Chrome/Edge).
     The button is hidden by default and shown only when the API is available.
     Supported phrases (Indonesian):
       "tambah nasi goreng"          → adds Nasi Goreng ×1
       "dua nasi goreng"             → adds Nasi Goreng ×2
       "hapus nasi goreng"           → removes Nasi Goreng from cart
 --}}
<script>
(function () {
    'use strict';

    var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    var voiceBtn    = document.getElementById('voice-order-btn');
    var statusDiv   = document.getElementById('voice-status');
    var recognition = null;
    var listening   = false;

    if (!SpeechRecognition || !voiceBtn) return;

    // Show the button only when the API is available
    voiceBtn.classList.remove('d-none');

    function setStatus(msg) {
        if (!statusDiv) return;
        statusDiv.textContent = msg;
        statusDiv.classList.remove('d-none');
    }

    function clearStatus() {
        if (statusDiv) {
            statusDiv.textContent = '';
            statusDiv.classList.add('d-none');
        }
    }

    function setVoiceState(active) {
        listening = active;
        if (!voiceBtn) return;
        voiceBtn.setAttribute('aria-pressed', active ? 'true' : 'false');
        if (active) {
            voiceBtn.classList.add('btn-danger');
            voiceBtn.classList.remove('btn-outline-secondary');
            voiceBtn.innerHTML = '<i class="bi bi-mic-fill me-1" aria-hidden="true"></i>Mendengarkan…';
            voiceBtn.setAttribute('aria-label', 'Pesan suara aktif – sedang mendengarkan. Klik untuk berhenti.');
        } else {
            voiceBtn.classList.remove('btn-danger');
            voiceBtn.classList.add('btn-outline-secondary');
            voiceBtn.innerHTML = '<i class="bi bi-mic me-1" aria-hidden="true"></i>Pesan Suara';
            voiceBtn.setAttribute('aria-label', 'Aktifkan pesan suara. Ucapkan nama menu untuk menambahkan ke keranjang.');
        }
    }

    function startListening() {
        recognition = new SpeechRecognition();
        recognition.lang = 'id-ID';
        recognition.continuous = false;
        recognition.interimResults = false;
        recognition.maxAlternatives = 1;

        recognition.onstart  = function () { setVoiceState(true); setStatus('🎤 Mendengarkan…'); };
        recognition.onend    = function () { setVoiceState(false); };
        recognition.onerror  = function (e) {
            var msgs = { 'not-allowed': 'Akses mikrofon ditolak.', 'no-speech': 'Tidak ada ucapan terdeteksi.' };
            setStatus('⚠ ' + (msgs[e.error] || 'Error: ' + e.error));
            setVoiceState(false);
        };
        recognition.onresult = function (e) {
            var transcript = e.results[0][0].transcript.toLowerCase().trim();
            setStatus('🔍 Didengar: "' + transcript + '"');
            processVoiceCommand(transcript);
        };

        try { recognition.start(); } catch (err) { setStatus('⚠ Tidak dapat memulai pengenalan suara.'); }
    }

    function stopListening() {
        if (recognition) { try { recognition.stop(); } catch (e) {} }
        setVoiceState(false);
        clearStatus();
    }

    voiceBtn.addEventListener('click', function () {
        if (listening) { stopListening(); } else { startListening(); }
    });

    // ── Command parser ───────────────────────────────────────────────────────
    function processVoiceCommand(transcript) {
        // "hapus/hilangkan {name}"
        var removeMatch = transcript.match(/^(?:hapus|hilangkan|buang|remove)\s+(.+)$/);
        if (removeMatch) {
            var name = removeMatch[1].trim();
            if (!tryRemoveByName(name)) setStatus('⚠ "' + name + '" tidak ada di keranjang.');
            return;
        }

        // "[tambah] [angka] {name}"
        var qty = 1;
        var term = transcript.replace(/^(?:tambah|tambahkan|order|pesan|beli)\s+/i, '');
        var qtyWords = { satu:1, dua:2, tiga:3, empat:4, lima:5, enam:6, tujuh:7, delapan:8, sembilan:9, sepuluh:10 };
        var qtyMatch = term.match(/^(\d+|satu|dua|tiga|empat|lima|enam|tujuh|delapan|sembilan|sepuluh)\s+(.+)$/);
        if (qtyMatch) {
            qty  = parseInt(qtyMatch[1]) || qtyWords[qtyMatch[1]] || 1;
            term = qtyMatch[2].trim();
        }

        if (!tryAddByName(term, qty)) {
            setStatus('⚠ Menu "' + term + '" tidak ditemukan. Coba ucapkan nama menu dengan lebih jelas.');
        }
    }

    function tryAddByName(searchTerm, qty) {
        var cards = document.querySelectorAll('.menu-card:not(.pe-none):not(.opacity-50)');
        for (var i = 0; i < cards.length; i++) {
            var card     = cards[i];
            var cardName = (card.dataset.name || '').toLowerCase();
            if (cardName.includes(searchTerm) || searchTerm.includes(cardName.split(' ')[0])) {
                for (var j = 0; j < qty; j++) addItem(card);
                setStatus('✅ Ditambahkan: ' + card.dataset.name + (qty > 1 ? ' ×' + qty : ''));
                return true;
            }
        }
        return false;
    }

    function tryRemoveByName(searchTerm) {
        for (var id in cart) {
            if (!Object.prototype.hasOwnProperty.call(cart, id)) continue;
            var cartName = cart[id].name.toLowerCase();
            if (cartName.includes(searchTerm) || searchTerm.includes(cartName.split(' ')[0])) {
                var removedName = cart[id].name;
                removeItem(id);
                setStatus('✅ Dihapus: ' + removedName);
                return true;
            }
        }
        return false;
    }
})();
</script>
@endpush