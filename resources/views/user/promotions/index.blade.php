@extends('layouts.app')
@section('title', 'Promo & Diskon')

@push('styles')
<style>
    /* ── Promo card accents ───────────────────────────────────────── */
    .promo-card {
        border-left: 4px solid transparent;
        transition: box-shadow .15s, transform .1s;
        position: relative;
        overflow: hidden;
    }
    .promo-card:hover { box-shadow: 0 6px 20px rgba(0,0,0,.1); transform: translateY(-2px); }
    .promo-card.type-bundle { border-left-color: #f97316; }
    .promo-card.type-time   { border-left-color: #0dcaf0; }

    /* Ribbon for "Sedang Aktif" */
    .promo-ribbon {
        position: absolute;
        top: 12px; right: -28px;
        background: #198754;
        color: #fff;
        font-size: .65rem;
        font-weight: 700;
        letter-spacing: .05em;
        padding: 2px 32px;
        transform: rotate(40deg);
        text-transform: uppercase;
    }

    /* Discount badge */
    .discount-badge {
        font-size: 1.4rem;
        font-weight: 800;
        line-height: 1;
    }

    /* Timer countdown */
    #happy-hour-block .time-chip {
        background: rgba(13,202,240,.12);
        border: 1px solid #0dcaf0;
        border-radius: .4rem;
        padding: .2rem .55rem;
        font-size: .78rem;
        font-weight: 600;
    }

    /* Requirement row */
    .req-row {
        background: #f8f9fa;
        border-radius: .4rem;
        padding: .45rem .75rem;
        font-size: .8rem;
    }
    [data-theme="dark"] .req-row { background: #1e1e2e; }
</style>
@endpush

@section('content')
<div class="container-fluid py-2">

    {{-- ── Header ───────────────────────────────────────────────────────── --}}
    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
        <div>
            <h4 class="fw-bold mb-0">
                <i class="bi bi-tags-fill me-2" style="color:#f97316"></i>Promo &amp; Diskon
            </h4>
            <small class="text-muted">Promosi aktif yang bisa kamu pakai saat pre-order hari ini.</small>
        </div>
        <a href="{{ route('user.orders.create') }}" class="btn fw-semibold btn-sm"
           style="background:#f97316;color:#fff">
            <i class="bi bi-cart-plus me-1"></i>Pre-Order Sekarang
        </a>
    </div>

    {{-- ── No promos at all ─────────────────────────────────────────────── --}}
    @if($activePromos->isEmpty() && $upcomingPromos->isEmpty())
        <div class="text-center py-5 text-muted">
            <i class="bi bi-megaphone fs-1 d-block mb-3 opacity-25"></i>
            <div class="fw-semibold">Belum ada promosi yang tersedia.</div>
            <div class="small mt-1">Pantau terus halaman ini untuk penawaran spesial!</div>
            <a href="{{ route('user.orders.create') }}" class="btn btn-outline-secondary btn-sm mt-3">
                <i class="bi bi-cart-plus me-1"></i>Pesan Sekarang
            </a>
        </div>
    @endif

    {{-- ══════════════════════════════════════════════════════════════════════
         SECTION: AKTIF SEKARANG
    ══════════════════════════════════════════════════════════════════════ --}}
    @if($activePromos->isNotEmpty())
    <h6 class="fw-bold text-success mb-3">
        <i class="bi bi-lightning-charge-fill me-1"></i>Aktif Sekarang
        <span class="badge bg-success ms-1 fw-normal" style="font-size:.7rem">{{ $activePromos->count() }}</span>
    </h6>

    <div class="row g-3 mb-5">
        @foreach($activePromos as $promo)
        @php
            $isBundle   = $promo->type === \App\Models\Promotion::TYPE_BUNDLE;
            $isTime     = $promo->type === \App\Models\Promotion::TYPE_TIME;
            $isPct      = $promo->discount_type === \App\Models\Promotion::DISCOUNT_PERCENTAGE;
            $params     = $promo->params ?? [];
            $cardClass  = $isBundle ? 'type-bundle' : 'type-time';
            $iconClass  = $isBundle ? 'bi-bag-heart-fill' : 'bi-clock-fill';
            $accentColor= $isBundle ? '#f97316' : '#0dcaf0';
            $accentBg   = $isBundle ? 'rgba(249,115,22,.1)' : 'rgba(13,202,240,.1)';
        @endphp
        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-3 h-100 promo-card {{ $cardClass }}">
                {{-- Ribbon --}}
                <div class="promo-ribbon">Aktif</div>

                <div class="card-body p-4">
                    {{-- Type + Name row --}}
                    <div class="d-flex align-items-start gap-3 mb-3">
                        <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0"
                             style="width:3rem;height:3rem;background:{{ $accentBg }}">
                            <i class="bi {{ $iconClass }} fs-4" style="color:{{ $accentColor }}"></i>
                        </div>
                        <div>
                            <span class="badge rounded-pill mb-1"
                                  style="background:{{ $accentBg }};color:{{ $accentColor }};border:1px solid {{ $accentColor }};font-size:.67rem">
                                {{ $promo->getTypeLabel() }}
                                @if($promo->stackable)
                                    &middot; Bisa digabung
                                @endif
                            </span>
                            <div class="fw-bold lh-sm">{{ $promo->name }}</div>
                        </div>
                    </div>

                    {{-- Discount highlight --}}
                    <div class="d-flex align-items-center gap-3 p-3 rounded-3 mb-3"
                         style="background:{{ $accentBg }}">
                        <div>
                            <div class="small text-muted" style="font-size:.7rem">Diskon</div>
                            <div class="discount-badge" style="color:{{ $accentColor }}">
                                {{ $promo->getDiscountLabel() }}
                            </div>
                            @if($isPct)
                                <div class="small text-muted" style="font-size:.7rem">dari total belanja</div>
                            @else
                                <div class="small text-muted" style="font-size:.7rem">potongan langsung</div>
                            @endif
                        </div>
                    </div>

                    {{-- Requirements --}}
                    <div class="mb-3">
                        <div class="small fw-semibold mb-2 text-muted text-uppercase"
                             style="letter-spacing:.05em;font-size:.67rem">Syarat</div>

                        @if($isBundle)
                            @php
                                $minItems  = $params['min_items'] ?? 2;
                                $menuIds   = array_filter(array_map('intval', $params['menu_ids'] ?? []));
                            @endphp
                            <div class="req-row d-flex align-items-center gap-2 mb-1">
                                <i class="bi bi-cart3" style="color:#f97316"></i>
                                <span>Pesan minimal <strong>{{ $minItems }} item</strong></span>
                            </div>
                            @if(! empty($menuIds))
                                <div class="req-row d-flex align-items-start gap-2">
                                    <i class="bi bi-list-check mt-1 flex-shrink-0" style="color:#f97316"></i>
                                    <span>
                                        Berlaku untuk:
                                        @foreach($menuIds as $mid)
                                            <span class="badge bg-warning text-dark me-1" style="font-size:.68rem">
                                                {{ $bundleMenus[$mid] ?? 'Menu #'.$mid }}
                                            </span>
                                        @endforeach
                                    </span>
                                </div>
                            @else
                                <div class="req-row d-flex align-items-center gap-2">
                                    <i class="bi bi-check2-all" style="color:#f97316"></i>
                                    <span>Berlaku untuk semua menu</span>
                                </div>
                            @endif
                        @elseif($isTime)
                            @php
                                $startTime = $params['start_time'] ?? '00:00';
                                $endTime   = $params['end_time']   ?? '23:59';
                                $days      = isset($params['days'])
                                    ? array_map('intval', (array) $params['days'])
                                    : range(0, 6);
                                $dayNames  = ['Min','Sen','Sel','Rab','Kam','Jum','Sab'];
                                $allDays   = count($days) === 7;
                            @endphp
                            <div class="req-row d-flex align-items-center gap-2 mb-1">
                                <i class="bi bi-clock" style="color:#0dcaf0"></i>
                                <span>
                                    Pesan antara pukul
                                    <strong>{{ $startTime }}</strong> – <strong>{{ $endTime }}</strong> WIB
                                </span>
                            </div>
                            <div class="req-row d-flex align-items-center gap-2">
                                <i class="bi bi-calendar-week" style="color:#0dcaf0"></i>
                                <span>
                                    @if($allDays)
                                        Setiap hari
                                    @else
                                        <span class="d-flex flex-wrap gap-1 mt-1">
                                            @foreach(range(0,6) as $d)
                                                <span class="badge {{ in_array($d, $days) ? 'bg-info text-dark' : 'bg-light text-muted border' }}"
                                                      style="font-size:.65rem">
                                                    {{ $dayNames[$d] }}
                                                </span>
                                            @endforeach
                                        </span>
                                    @endif
                                </span>
                            </div>
                        @endif
                    </div>

                    {{-- Validity window --}}
                    @if($promo->end_at)
                        <div class="small text-danger mb-3">
                            <i class="bi bi-hourglass-split me-1"></i>
                            Berakhir {{ $promo->end_at->locale('id')->diffForHumans() }}
                            ({{ $promo->end_at->format('d M Y H:i') }})
                        </div>
                    @else
                        <div class="small text-muted mb-3">
                            <i class="bi bi-infinity me-1"></i>Tidak ada batas waktu
                        </div>
                    @endif

                    {{-- CTA --}}
                    <a href="{{ route('user.orders.create') }}"
                       class="btn w-100 fw-semibold btn-sm"
                       style="background:#f97316;color:#fff">
                        <i class="bi bi-cart-plus me-1"></i>Gunakan Promo Ini
                    </a>
                    <p class="text-muted text-center mt-2 mb-0" style="font-size:.7rem">
                        <i class="bi bi-info-circle me-1"></i>Diskon diterapkan otomatis saat checkout jika syarat terpenuhi.
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    {{-- ══════════════════════════════════════════════════════════════════════
         SECTION: AKAN DATANG
    ══════════════════════════════════════════════════════════════════════ --}}
    @if($upcomingPromos->isNotEmpty())
    <h6 class="fw-bold text-secondary mb-3">
        <i class="bi bi-calendar-event me-1"></i>Akan Datang
        <span class="badge bg-secondary ms-1 fw-normal" style="font-size:.7rem">{{ $upcomingPromos->count() }}</span>
    </h6>

    <div class="row g-3">
        @foreach($upcomingPromos as $promo)
        @php
            $isBundle   = $promo->type === \App\Models\Promotion::TYPE_BUNDLE;
            $accentColor= $isBundle ? '#f97316' : '#0dcaf0';
        @endphp
        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-3 h-100 promo-card {{ $isBundle ? 'type-bundle' : 'type-time' }}"
                 style="opacity:.65">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge bg-secondary" style="font-size:.67rem">
                            <i class="bi bi-clock me-1"></i>Segera Hadir
                        </span>
                        <span class="badge" style="background:rgba(0,0,0,.07);color:#555;font-size:.67rem">
                            {{ $promo->getTypeLabel() }}
                        </span>
                    </div>
                    <div class="fw-bold mb-1">{{ $promo->name }}</div>
                    <div class="fs-5 fw-bold mb-2" style="color:{{ $accentColor }}">
                        {{ $promo->getDiscountLabel() }} off
                    </div>
                    @if($promo->start_at)
                        <div class="small text-muted">
                            <i class="bi bi-calendar2-check me-1"></i>
                            Mulai {{ $promo->start_at->locale('id')->translatedFormat('l, d M Y') }}
                            pukul {{ $promo->start_at->format('H:i') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    {{-- ── Tip box ─────────────────────────────────────────────────────── --}}
    @if($activePromos->isNotEmpty())
    <div class="alert alert-info d-flex gap-3 align-items-start mt-4 mb-0">
        <i class="bi bi-lightbulb-fill fs-5 flex-shrink-0 text-info mt-1"></i>
        <div>
            <div class="fw-semibold">Cara pakai promo</div>
            <ul class="mb-0 mt-1 small">
                <li>Buka halaman <strong>Pre-Order</strong> dan tambahkan menu ke keranjang.</li>
                <li>Promo aktif diterapkan <strong>otomatis</strong> saat syarat terpenuhi — kamu langsung lihat potongan harga sebelum konfirmasi.</li>
                <li>Promo <em>Bisa digabung</em> bisa aktif bersamaan dengan promo lain.</li>
                <li>Happy Hour hanya aktif pada rentang waktu yang tercantum.</li>
            </ul>
        </div>
    </div>
    @endif

</div>
@endsection
