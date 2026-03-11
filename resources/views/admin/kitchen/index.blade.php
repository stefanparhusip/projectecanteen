@extends('layouts.app')
@section('title', 'Dapur KDS')

@push('styles')
<style>
/* ── KDS board layout ─────────────────────────────────────────── */
.kds-board {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
    min-height: calc(100vh - 180px);
}
@media (max-width: 768px) {
    .kds-board { grid-template-columns: 1fr; }
}

/* ── Column ────────────────────────────────────────────────────── */
.kds-col {
    border-radius: .75rem;
    padding: .75rem;
    min-height: 400px;
    display: flex;
    flex-direction: column;
    gap: .6rem;
}
.kds-col-preparing { background: #fff8e1; border: 2px solid #ffc107; }
.kds-col-ready     { background: #e8f5e9; border: 2px solid #4caf50; }
[data-theme="dark"] .kds-col-preparing { background: #2a2400; border-color: #ffc107; }
[data-theme="dark"] .kds-col-ready     { background: #00230a; border-color: #4caf50; }

.kds-col-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: .4rem .5rem .8rem;
    border-bottom: 1px solid rgba(0,0,0,.1);
    margin-bottom: .25rem;
}
.kds-col-header h6 { font-weight: 700; margin: 0; font-size: .95rem; }
.kds-col-header .count-badge {
    font-size: .8rem;
    font-weight: 700;
    padding: .2rem .55rem;
    border-radius: 99px;
}

/* ── Order card ────────────────────────────────────────────────── */
.order-card {
    background: #fff;
    border-radius: .6rem;
    padding: .75rem .9rem;
    box-shadow: 0 1px 4px rgba(0,0,0,.12);
    cursor: grab;
    border-left: 4px solid #0d6efd;
    transition: transform .15s, box-shadow .15s, opacity .2s;
    user-select: none;
}
.order-card:active { cursor: grabbing; }
.order-card.sortable-ghost { opacity: .35; }
.order-card.sortable-chosen { transform: scale(1.02); box-shadow: 0 6px 20px rgba(0,0,0,.2); }
.order-card.priority { border-left-color: #dc3545; animation: pulse-border 1.5s ease-in-out infinite; }
.order-card.status-ready { border-left-color: #198754; cursor: default; }

[data-theme="dark"] .order-card { background: #1e1e1e; color: #e4e4e4; }
[data-theme="dark"] .order-card .text-muted { color: #a0a0a0 !important; }

@keyframes pulse-border {
    0%,100% { border-left-color: #dc3545; }
    50%      { border-left-color: #ff8c00; }
}

/* ── Card sections ─────────────────────────────────────────────── */
.card-order-id   { font-weight: 700; font-size: .85rem; }
.card-user       { font-size: .82rem; }
.card-break      { font-size: .75rem; }
.card-items      { font-size: .78rem; margin-top: .4rem; list-style: none; padding: 0; }
.card-items li   { padding: .1rem 0; }
.card-items li::before { content: "· "; color: #999; }
.card-note       { font-size: .73rem; font-style: italic; color: #888; margin-top: .3rem; }
.card-meta       { display: flex; justify-content: space-between; align-items: center; margin-top: .45rem; }
.card-total      { font-weight: 600; font-size: .82rem; color: #f97316; }
.badge-priority  { font-size: .65rem; background: #dc3545; color: #fff; padding: .15rem .4rem; border-radius: 4px; }
.badge-waiting   { font-size: .65rem; background: #6c757d; color: #fff; padding: .15rem .4rem; border-radius: 4px; }
.badge-urgent    { background: #dc3545; }

/* ── Drop zone highlight ───────────────────────────────────────── */
.kds-col.drop-over { box-shadow: 0 0 0 3px #0d6efd inset; }

/* ── Header toolbar ────────────────────────────────────────────── */
.kds-toolbar {
    display: flex;
    align-items: center;
    gap: .75rem;
    flex-wrap: wrap;
    margin-bottom: 1rem;
}
.kds-toolbar .live-clock {
    font-weight: 700;
    font-family: monospace;
    font-size: 1rem;
    background: #1e293b;
    color: #f97316;
    padding: .25rem .6rem;
    border-radius: 6px;
}
.kds-toolbar .conn-badge {
    font-size: .72rem;
    padding: .25rem .55rem;
    border-radius: 99px;
    font-weight: 600;
}
.conn-live        { background: #d1fae5; color: #065f46; }
.conn-connecting  { background: #fef3c7; color: #92400e; }
.conn-offline     { background: #fee2e2; color: #991b1b; }

/* ── Empty state ───────────────────────────────────────────────── */
.kds-empty {
    display: flex; align-items: center; justify-content: center;
    flex-direction: column; gap: .5rem;
    color: #aaa; padding: 2rem 0; font-size: .85rem;
}

/* ── Fullscreen button ─────────────────────────────────────────── */
.btn-fullscreen { font-size: .78rem; }

/* ── Toast notification ────────────────────────────────────────── */
#kds-toast-container {
    position: fixed; bottom: 1.5rem; right: 1.5rem;
    z-index: 9999; display: flex; flex-direction: column; gap: .5rem;
}
.kds-toast {
    background: #1e293b; color: #fff;
    padding: .65rem 1rem;
    border-radius: 8px;
    font-size: .82rem;
    box-shadow: 0 4px 16px rgba(0,0,0,.25);
    animation: slideUp .25s ease;
    border-left: 4px solid #f97316;
}
.kds-toast.priority { border-left-color: #dc3545; }
@keyframes slideUp {
    from { transform: translateY(1rem); opacity: 0; }
    to   { transform: translateY(0);    opacity: 1; }
}
</style>
@endpush

@section('content')

{{-- Toolbar ──────────────────────────────────────────────────────────────── --}}
<div class="kds-toolbar">
    <span class="live-clock" id="kds-clock">--:--:--</span>
    <span class="conn-badge conn-connecting" id="kds-conn">● Menghubungkan…</span>

    <span class="ms-auto d-flex align-items-center gap-2 flex-wrap">
        {{-- Break time filter --}}
        <select id="kds-filter" class="form-select form-select-sm" style="width:auto">
            <option value="">Semua Slot</option>
            @foreach($breakTimes as $bt)
            <option value="{{ $bt->id }}">{{ $bt->label }} ({{ \Carbon\Carbon::parse($bt->getRawOriginal('start_time'))->format('H:i') }})</option>
            @endforeach
        </select>

        <a href="{{ route('admin.qr.scan') }}" class="btn btn-sm btn-outline-success">
            <i class="bi bi-qr-code-scan me-1"></i>Scanner QR
        </a>
        <button class="btn btn-sm btn-outline-secondary btn-fullscreen" id="btn-fullscreen"
                onclick="toggleFullscreen()" title="Layar Penuh">
            <i class="bi bi-fullscreen" id="fs-icon"></i>
        </button>
    </span>
</div>

{{-- Stats bar --}}
<div class="d-flex gap-2 mb-3 flex-wrap">
    <span class="badge bg-primary fs-7 px-3 py-2">
        <i class="bi bi-hourglass-split me-1"></i>
        Disiapkan: <strong id="stat-preparing">0</strong>
    </span>
    <span class="badge bg-success fs-7 px-3 py-2">
        <i class="bi bi-check-circle me-1"></i>
        Siap: <strong id="stat-ready">0</strong>
    </span>
    <span class="badge bg-secondary fs-7 px-3 py-2">
        <i class="bi bi-bag me-1"></i>
        Total Hari Ini: <strong id="stat-total">0</strong>
    </span>
</div>

{{-- KDS Board ─────────────────────────────────────────────────────────────── --}}
<div class="kds-board">

    {{-- Column: Sedang Disiapkan --}}
    <div class="kds-col kds-col-preparing" id="col-preparing">
        <div class="kds-col-header">
            <h6><i class="bi bi-fire me-2" style="color:#f97316"></i>Sedang Disiapkan</h6>
            <span class="count-badge bg-warning text-dark" id="badge-preparing">0</span>
        </div>
        <div id="list-preparing" class="kds-sortable-list">
            <div class="kds-empty"><i class="bi bi-inbox fs-3"></i>Belum ada pesanan</div>
        </div>
    </div>

    {{-- Column: Siap Diambil --}}
    <div class="kds-col kds-col-ready" id="col-ready">
        <div class="kds-col-header">
            <h6><i class="bi bi-check-circle me-2" style="color:#198754"></i>Siap Diambil</h6>
            <span class="count-badge bg-success text-white" id="badge-ready">0</span>
        </div>
        <div id="list-ready" class="kds-sortable-list">
            <div class="kds-empty"><i class="bi bi-inbox fs-3"></i>Belum ada</div>
        </div>
    </div>

</div>

{{-- Toast container --}}
<div id="kds-toast-container"></div>

{{-- SortableJS (drag & drop) --}}
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.3/Sortable.min.js"></script>

<script>
(function () {
'use strict';

// ── Config ────────────────────────────────────────────────────────────────
const STREAM_URL  = "{{ route('admin.kitchen.stream') }}";
const STATUS_URL  = '/admin/orders/{id}/status';   // PATCH
const CSRF        = document.querySelector('meta[name="csrf-token"]').content;

// ── State ─────────────────────────────────────────────────────────────────
let boardData       = { preparing: [], ready: [] };
let activeFilterBt  = '';
let pendingDrag     = null;   // { orderId, fromStatus, toStatus, el }
let knownOrderIds   = new Set();
let sse             = null;
let reconnectTimer  = null;

// ── DOM refs ──────────────────────────────────────────────────────────────
const listPreparing = document.getElementById('list-preparing');
const listReady     = document.getElementById('list-ready');
const connBadge     = document.getElementById('kds-conn');
const statPreparing = document.getElementById('stat-preparing');
const statReady     = document.getElementById('stat-ready');
const statTotal     = document.getElementById('stat-total');
const badgePreparing = document.getElementById('badge-preparing');
const badgeReady    = document.getElementById('badge-ready');
const filterEl      = document.getElementById('kds-filter');

// ── Clock ─────────────────────────────────────────────────────────────────
setInterval(() => {
    const now = new Date();
    document.getElementById('kds-clock').textContent =
        now.toLocaleTimeString('id-ID', { hour12: false });
}, 1000);

// ── SSE connection ────────────────────────────────────────────────────────
function connect() {
    if (sse) {
        sse.close();
        sse = null;
    }
    clearTimeout(reconnectTimer);

    setConnStatus('connecting');
    sse = new EventSource(STREAM_URL);

    sse.addEventListener('board', function (e) {
        const payload = JSON.parse(e.data);
        handleBoardEvent(payload);
    });

    sse.addEventListener('ping', function () {
        // Heartbeat received — connection is alive
    });

    sse.onopen = function () {
        setConnStatus('live');
    };

    sse.onerror = function () {
        setConnStatus('offline');
        sse.close();
        sse = null;
        reconnectTimer = setTimeout(connect, 4000);
    };
}

function setConnStatus(state) {
    const map = {
        live:        { cls: 'conn-live',       text: '● Live' },
        connecting:  { cls: 'conn-connecting', text: '● Menghubungkan…' },
        offline:     { cls: 'conn-offline',    text: '● Offline — mencoba ulang…' },
    };
    const s = map[state] || map.offline;
    connBadge.className = 'conn-badge ' + s.cls;
    connBadge.textContent = s.text;
}

// ── Board rendering ───────────────────────────────────────────────────────
function handleBoardEvent(payload) {
    const { orders, stats, server_time } = payload;

    // Check for brand-new orders → toast + sound
    orders.forEach(o => {
        if (!knownOrderIds.has(o.id)) {
            if (knownOrderIds.size > 0) {   // skip on first load
                showToast(o);
                playNewOrderSound(o.is_priority);
            }
            knownOrderIds.add(o.id);
        }
    });

    // Partition by status, apply break time filter
    const btFilter = activeFilterBt;
    const filtered = btFilter
        ? orders.filter(o => String(o.break_time_id) === btFilter ||
                              orders.find(x => x.id === o.id))   // fallback: just check
        : orders;

    // We'll filter by label since we don't have break_time_id in payload
    // Re-fetch break_time_id from the select's data-label mapping
    const applyFilter = (arr) => {
        if (!btFilter) return arr;
        const selectedLabel = filterEl.options[filterEl.selectedIndex]?.text?.split(' (')[0] || '';
        return arr.filter(o => o.break_label === selectedLabel);
    };

    boardData.preparing = applyFilter(orders.filter(o => o.status === 'preparing'));
    boardData.ready     = applyFilter(orders.filter(o => o.status === 'ready'));

    renderColumn(listPreparing, boardData.preparing, 'preparing');
    renderColumn(listReady,     boardData.ready,     'ready');

    // Update stats
    statPreparing.textContent = stats.preparing;
    statReady.textContent     = stats.ready;
    statTotal.textContent     = stats.total;
    badgePreparing.textContent = boardData.preparing.length;
    badgeReady.textContent     = boardData.ready.length;
}

function renderColumn(container, orders, colStatus) {
    if (orders.length === 0) {
        container.innerHTML = `<div class="kds-empty"><i class="bi bi-inbox fs-3"></i>Belum ada</div>`;
        return;
    }

    // Build a map of current cards so we can update in-place
    const existing = {};
    container.querySelectorAll('.order-card[data-id]').forEach(el => {
        existing[el.dataset.id] = el;
    });

    const newIds = new Set(orders.map(o => String(o.id)));

    // Remove cards that are no longer in the column
    Object.keys(existing).forEach(id => {
        if (!newIds.has(id)) {
            existing[id].remove();
            delete existing[id];
        }
    });

    // Remove empty state placeholder
    container.querySelectorAll('.kds-empty').forEach(el => el.remove());

    // Add/update cards maintaining order
    orders.forEach((order, index) => {
        const id  = String(order.id);
        let card  = existing[id];

        if (card) {
            // Update existing card content without replacing the element
            updateCard(card, order, colStatus);
        } else {
            card = buildCard(order, colStatus);
            container.appendChild(card);
        }

        // Maintain sort order
        const currentIndex = Array.from(container.children).indexOf(card);
        if (currentIndex !== index) {
            container.insertBefore(card, container.children[index] || null);
        }
    });
}

function buildCard(order, colStatus) {
    const el = document.createElement('div');
    el.className = 'order-card'
        + (order.is_priority ? ' priority' : '')
        + (colStatus === 'ready' ? ' status-ready' : '');
    el.dataset.id     = order.id;
    el.dataset.status = colStatus;
    el.innerHTML = cardInnerHTML(order, colStatus);
    return el;
}

function updateCard(el, order, colStatus) {
    el.className = 'order-card'
        + (order.is_priority ? ' priority' : '')
        + (colStatus === 'ready' ? ' status-ready' : '');
    el.dataset.status = colStatus;
    el.innerHTML = cardInnerHTML(order, colStatus);
}

function cardInnerHTML(o, colStatus) {
    const waitBadge = o.minutes_waiting > 0
        ? `<span class="badge-waiting ${o.minutes_waiting >= 10 ? 'badge-urgent' : ''}">${o.minutes_waiting}m</span>`
        : '';
    const prioBadge = o.is_priority
        ? `<span class="badge-priority ms-1">⚡ PRIORITAS</span>`
        : '';

    const items = o.items.map(i => `<li>${i.qty}× ${escHtml(i.name)}</li>`).join('');

    const noteHtml = o.note
        ? `<div class="card-note"><i class="bi bi-chat-left-text me-1"></i>${escHtml(o.note)}</div>`
        : '';

    const actionBtn = colStatus === 'preparing'
        ? `<button class="btn btn-sm btn-success btn-mark-ready" data-id="${o.id}" title="Tandai Siap">
               <i class="bi bi-check-lg"></i> Siap
           </button>`
        : `<span class="badge bg-success-subtle text-success" style="font-size:.7rem">
               <i class="bi bi-check-circle me-1"></i>Selesai
           </span>`;

    return `
        <div class="d-flex justify-content-between align-items-start mb-1">
            <span class="card-order-id">#${o.id} ${prioBadge}</span>
            <div class="d-flex gap-1">${waitBadge}${actionBtn}</div>
        </div>
        <div class="card-user"><i class="bi bi-person me-1"></i>${escHtml(o.user_name)}</div>
        <div class="card-break text-muted">
            <i class="bi bi-clock me-1"></i>${escHtml(o.break_label)} ${o.break_start}–${o.break_end}
        </div>
        <ul class="card-items">${items}</ul>
        ${noteHtml}
        <div class="card-meta">
            <span class="card-total">Rp ${formatNum(o.total_price)}</span>
            <span class="text-muted" style="font-size:.72rem">Dipesan ${o.ordered_at}</span>
        </div>`;
}

// ── Mark-ready buttons (event delegation) ────────────────────────────────
document.getElementById('col-preparing').addEventListener('click', function (e) {
    const btn = e.target.closest('.btn-mark-ready');
    if (!btn) return;
    const orderId = btn.dataset.id;
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span>';
    changeStatus(orderId, 'ready');
});

// ── Drag & Drop (SortableJS) ──────────────────────────────────────────────
const sortableOptions = (targetStatus) => ({
    group:     { name: 'kds', pull: true, put: true },
    animation: 150,
    ghostClass: 'sortable-ghost',
    chosenClass: 'sortable-chosen',
    draggable: '.order-card[data-status="preparing"]',   // only preparing cards are draggable
    onEnd: function (evt) {
        const el       = evt.item;
        const orderId  = el.dataset.id;
        const fromCol  = evt.from.id.replace('list-', '');
        const toCol    = evt.to.id.replace('list-', '');

        if (fromCol === toCol) return;   // reorder within same column — no status change

        if (fromCol === 'preparing' && toCol === 'ready') {
            changeStatus(orderId, 'ready');
        } else if (fromCol === 'ready' && toCol === 'preparing') {
            // Revert: can't move back (SSE will correct the UI on next tick)
            showToastError('Pesanan tidak bisa dikembalikan ke status Disiapkan.');
            // Move element back (DOM correction handled by SSE re-render)
        }
    },
});

Sortable.create(listPreparing, sortableOptions('preparing'));
Sortable.create(listReady,     sortableOptions('ready'));

// ── Status change API ─────────────────────────────────────────────────────
async function changeStatus(orderId, newStatus) {
    try {
        const url = `/admin/orders/${orderId}/status`;
        const resp = await fetch(url, {
            method: 'PATCH',
            headers: {
                'Content-Type':  'application/json',
                'X-CSRF-TOKEN':  CSRF,
                'Accept':        'application/json',
            },
            body: JSON.stringify({ status: newStatus }),
        });

        const data = await resp.json();

        if (!data.success) {
            showToastError(data.message || 'Gagal mengubah status.');
        }
        // Success: SSE stream will push the updated board automatically
    } catch (err) {
        showToastError('Koneksi gagal: ' + err.message);
    }
}

// ── Notifications ─────────────────────────────────────────────────────────
function showToast(order) {
    const container = document.getElementById('kds-toast-container');
    const t = document.createElement('div');
    t.className = 'kds-toast' + (order.is_priority ? ' priority' : '');
    t.innerHTML = `<strong>🍽️ Pesanan Baru #${order.id}</strong><br>
        ${escHtml(order.user_name)} · ${escHtml(order.break_label)}<br>
        ${order.item_count} item · Rp ${formatNum(order.total_price)}
        ${order.is_priority ? '<br><span style="color:#ff8c00">⚡ Prioritas!</span>' : ''}`;
    container.appendChild(t);
    setTimeout(() => t.remove(), 6000);
}

function showToastError(msg) {
    const container = document.getElementById('kds-toast-container');
    const t = document.createElement('div');
    t.className = 'kds-toast';
    t.style.borderLeftColor = '#dc3545';
    t.innerHTML = `<i class="bi bi-exclamation-triangle me-1"></i>${escHtml(msg)}`;
    container.appendChild(t);
    setTimeout(() => t.remove(), 5000);
}

// ── Sound (Web Audio API — no external files) ─────────────────────────────
let audioCtx = null;

function getAudioCtx() {
    if (!audioCtx) audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    return audioCtx;
}

function playNewOrderSound(isPriority) {
    try {
        const ctx  = getAudioCtx();
        const freqs = isPriority ? [880, 660, 880] : [660, 880];
        let t = ctx.currentTime;
        freqs.forEach(freq => {
            const osc  = ctx.createOscillator();
            const gain = ctx.createGain();
            osc.connect(gain);
            gain.connect(ctx.destination);
            osc.type = 'sine';
            osc.frequency.setValueAtTime(freq, t);
            gain.gain.setValueAtTime(0.25, t);
            gain.gain.exponentialRampToValueAtTime(0.001, t + 0.25);
            osc.start(t);
            osc.stop(t + 0.25);
            t += 0.18;
        });
    } catch (_) {
        // AudioContext not available
    }
}

// ── Fullscreen ────────────────────────────────────────────────────────────
window.toggleFullscreen = function () {
    const fsIcon = document.getElementById('fs-icon');
    if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen?.();
        fsIcon.className = 'bi bi-fullscreen-exit';
    } else {
        document.exitFullscreen?.();
        fsIcon.className = 'bi bi-fullscreen';
    }
};

document.addEventListener('fullscreenchange', () => {
    const fsIcon = document.getElementById('fs-icon');
    fsIcon.className = document.fullscreenElement ? 'bi bi-fullscreen-exit' : 'bi bi-fullscreen';
});

// ── Break time filter ─────────────────────────────────────────────────────
filterEl.addEventListener('change', function () {
    activeFilterBt = this.value;
    // The next SSE event will re-render with filter applied
    // For instant feedback, re-apply filter to current boardData
    if (boardData) {
        const all = [...boardData.preparing, ...boardData.ready];
        handleFilteredRender(all);
    }
});

function handleFilteredRender(orders) {
    const applyFilter = (arr) => {
        if (!activeFilterBt) return arr;
        const selectedLabel = filterEl.options[filterEl.selectedIndex]?.text?.split(' (')[0] || '';
        return arr.filter(o => o.break_label === selectedLabel);
    };
    boardData.preparing = applyFilter(orders.filter(o => o.status === 'preparing'));
    boardData.ready     = applyFilter(orders.filter(o => o.status === 'ready'));
    renderColumn(listPreparing, boardData.preparing, 'preparing');
    renderColumn(listReady,     boardData.ready,     'ready');
    badgePreparing.textContent = boardData.preparing.length;
    badgeReady.textContent     = boardData.ready.length;
}

// ── Helpers ───────────────────────────────────────────────────────────────
function escHtml(str) {
    return String(str ?? '')
        .replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')
        .replace(/"/g,'&quot;').replace(/'/g,'&#39;');
}

function formatNum(n) {
    return Number(n).toLocaleString('id-ID');
}

// ── Boot ──────────────────────────────────────────────────────────────────
connect();

// Reconnect on tab visibility change (handles long-dormant tabs)
document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'visible' && (!sse || sse.readyState === EventSource.CLOSED)) {
        connect();
    }
});

})();
</script>
@endsection
