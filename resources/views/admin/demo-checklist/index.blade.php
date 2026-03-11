@extends('layouts.app')

@section('title', 'Demo Checklist — 10 Menit')

@push('styles')
<style>
    /* ── Checklist card styles ─────────────────────────────────────── */
    .step-card {
        border-left: 4px solid transparent;
        transition: box-shadow .15s, border-color .15s;
    }
    .step-card:hover { box-shadow: 0 4px 16px rgba(0,0,0,.09); }
    .step-card.border-primary  { border-left-color: #0d6efd !important; }
    .step-card.border-info     { border-left-color: #0dcaf0 !important; }
    .step-card.border-warning  { border-left-color: #ffc107 !important; }
    .step-card.border-danger   { border-left-color: #dc3545 !important; }
    .step-card.border-success  { border-left-color: #198754 !important; }
    .step-card.border-secondary{ border-left-color: #6c757d !important; }
    .step-card.border-dark     { border-left-color: #212529 !important; }

    .step-number {
        width: 2rem; height: 2rem; line-height: 2rem;
        border-radius: 50%; font-weight: 700; font-size: .85rem;
        text-align: center; flex-shrink: 0;
    }

    .time-badge {
        font-size: .7rem; font-weight: 600;
        letter-spacing: .04em;
        padding: .2rem .5rem;
    }

    .stat-mini {
        border-radius: .5rem;
        padding: .75rem 1rem;
        min-width: 7rem;
        text-align: center;
    }

    /* ── Print overrides ──────────────────────────────────────────── */
    @media print {
        #sidebar, #topbar, #sidebar-overlay,
        .no-print, .btn, .alert, .demo-banner { display: none !important; }
        #main-wrapper { margin-left: 0 !important; }
        body { background: #fff !important; }
        .step-card { border: 1px solid #dee2e6 !important; page-break-inside: avoid; }
        .form-check-input { border: 1px solid #333 !important; }
        .container-fluid { padding: 1rem !important; }
        .card { box-shadow: none !important; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid py-4">

    {{-- ── Header ──────────────────────────────────────────────────── --}}
    <div class="d-flex align-items-start justify-content-between mb-4 flex-wrap gap-2">
        <div class="d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center rounded-3 bg-warning bg-opacity-10"
                 style="width:3rem;height:3rem;">
                <i class="bi bi-clipboard2-check fs-4 text-warning"></i>
            </div>
            <div>
                <h4 class="mb-0 fw-semibold">Demo Checklist <span class="text-muted fw-normal fs-6">— 10 Menit</span></h4>
                <small class="text-muted">Panduan langkah demi langkah untuk presentasi stakeholder.</small>
            </div>
        </div>
        <div class="d-flex gap-2 no-print">
            @if(! $isEnabled)
                <a href="{{ route('admin.demo-mode.index') }}" class="btn btn-warning btn-sm">
                    <i class="bi bi-play-circle me-1"></i>Aktifkan Demo Mode
                </a>
            @endif
            <button onclick="window.print()" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-printer me-1"></i>Cetak Checklist
            </button>
        </div>
    </div>

    {{-- ── Flash messages ───────────────────────────────────────────── --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show no-print">
            <i class="bi bi-check-circle me-2"></i>{!! session('success') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show no-print">
            <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- ── Warning: demo not active ─────────────────────────────────── --}}
    @if(! $isEnabled)
        <div class="alert alert-warning d-flex align-items-center gap-2 mb-4">
            <i class="bi bi-exclamation-triangle-fill flex-shrink-0"></i>
            <span>
                <strong>Demo Mode belum aktif.</strong>
                Data demo (user & menu) belum di-seed. Aktifkan dulu dari
                <a href="{{ route('admin.demo-mode.index') }}">halaman Demo Mode</a> agar tombol <em>Run</em> berjalan.
            </span>
        </div>
    @endif

    {{-- ── Live Stats ──────────────────────────────────────────────── --}}
    <div class="d-flex flex-wrap gap-3 mb-4">
        <div class="stat-mini bg-primary bg-opacity-10 border border-primary border-opacity-25">
            <div class="fs-4 fw-bold text-primary">{{ $demoUserCount }}</div>
            <div class="small text-muted">Demo User</div>
        </div>
        <div class="stat-mini bg-warning bg-opacity-10 border border-warning border-opacity-25">
            <div class="fs-4 fw-bold text-warning">{{ $demoMenuCount }}</div>
            <div class="small text-muted">Demo Menu</div>
        </div>
        <div class="stat-mini bg-info bg-opacity-10 border border-info border-opacity-25">
            <div class="fs-4 fw-bold text-info">{{ $demoOrderCount }}</div>
            <div class="small text-muted">Total Order Demo</div>
        </div>
        <div class="stat-mini {{ $pendingDemoOrders > 0 ? 'bg-success bg-opacity-10 border border-success border-opacity-25' : 'bg-secondary bg-opacity-10 border border-secondary border-opacity-25' }}">
            <div class="fs-4 fw-bold {{ $pendingDemoOrders > 0 ? 'text-success' : 'text-secondary' }}">{{ $pendingDemoOrders }}</div>
            <div class="small text-muted">Pending/Preparing</div>
        </div>
        @if($latestDemoOrder)
        <div class="stat-mini bg-light border">
            <div class="small fw-semibold text-dark">#{{ $latestDemoOrder->id }}</div>
            <div class="small">
                <span class="badge bg-{{ $latestDemoOrder->status_color }}">
                    {{ $latestDemoOrder->status_label }}
                </span>
            </div>
            <div class="small text-muted">Order Terbaru</div>
        </div>
        @endif
    </div>

    {{-- ── Checklist Steps ─────────────────────────────────────────── --}}
    <div class="card shadow-sm">
        <div class="card-header d-flex align-items-center justify-content-between">
            <span class="fw-semibold">
                <i class="bi bi-list-ol me-2 text-warning"></i>Alur Presentasi
            </span>
            <span class="text-muted small">{{ count($steps) }} langkah &bull; ~10 menit</span>
        </div>
        <div class="card-body p-0">
            <div class="list-group list-group-flush">
                @foreach($steps as $step)
                <div class="list-group-item px-3 py-3 step-card border-{{ $step['color'] }}">
                    <div class="d-flex align-items-start gap-3">

                        {{-- Checkbox (print only / manual) --}}
                        <div class="form-check mt-1 no-print">
                            <input class="form-check-input step-check" type="checkbox"
                                   id="step-{{ $step['step'] }}"
                                   onchange="toggleDone(this, {{ $step['step'] }})">
                        </div>
                        {{-- Print: step number circle --}}
                        <div class="step-number bg-{{ $step['color'] }} text-white d-none d-print-flex">
                            {{ $step['step'] }}
                        </div>

                        {{-- Step icon --}}
                        <div class="d-flex align-items-center justify-content-center rounded-2 flex-shrink-0 no-print"
                             style="width:2.25rem;height:2.25rem;background:rgba(var(--bs-{{ $step['color'] }}-rgb),.12)">
                            <i class="bi {{ $step['icon'] }} text-{{ $step['color'] }}"></i>
                        </div>

                        {{-- Content --}}
                        <div class="flex-fill" id="step-content-{{ $step['step'] }}">
                            <div class="d-flex align-items-center gap-2 mb-1 flex-wrap">
                                <span class="badge bg-secondary time-badge">
                                    <i class="bi bi-stopwatch me-1"></i>{{ $step['time'] }}
                                </span>
                                <span class="fw-semibold">Langkah {{ $step['step'] }}: {{ $step['title'] }}</span>
                            </div>
                            <div class="small text-muted">{!! $step['desc'] !!}</div>
                        </div>

                        {{-- Action buttons --}}
                        <div class="d-flex gap-2 flex-shrink-0 align-items-center no-print">
                            {{-- Navigate button --}}
                            @if(! empty($step['route']) && \Illuminate\Support\Facades\Route::has($step['route']))
                                <a href="{{ route($step['route']) }}"
                                   target="_blank"
                                   class="btn btn-outline-{{ $step['color'] }} btn-sm"
                                   title="Buka halaman">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            @endif

                            {{-- Run button (only for steps with action) --}}
                            @if(! empty($step['action']))
                                @if($step['action'] === 'seedQuickOrder')
                                    <form method="POST"
                                          action="{{ route('admin.demo-checklist.seed-order') }}"
                                          onsubmit="return confirmRun('Buat 1 order demo baru?')">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm" title="Jalankan: seed order demo">
                                            <i class="bi bi-play-fill me-1"></i>Run
                                        </button>
                                    </form>
                                @elseif($step['action'] === 'simulateReady')
                                    <form method="POST"
                                          action="{{ route('admin.demo-checklist.simulate-ready') }}"
                                          onsubmit="return confirmRun('Tandai pesanan demo terbaru sebagai Siap Diambil?')">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm" title="Jalankan: simulasi siap">
                                            <i class="bi bi-play-fill me-1"></i>Run
                                        </button>
                                    </form>
                                @endif
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ── Demo Quick Actions panel ─────────────────────────────────── --}}
    <div class="card shadow-sm mt-4 no-print">
        <div class="card-header fw-semibold">
            <i class="bi bi-lightning-charge me-2 text-warning"></i>Quick Actions
        </div>
        <div class="card-body d-flex flex-wrap gap-3">
            <form method="POST" action="{{ route('admin.demo-checklist.seed-order') }}"
                  onsubmit="return confirmRun('Buat 1 order demo baru?')">
                @csrf
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-cart-plus me-2"></i>Seed Quick Order
                </button>
            </form>
            <form method="POST" action="{{ route('admin.demo-checklist.simulate-ready') }}"
                  onsubmit="return confirmRun('Tandai pesanan demo terbaru sebagai Siap Diambil?')">
                @csrf
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check2-circle me-2"></i>Simulate Ready
                </button>
            </form>
            <a href="{{ route('admin.demo-mode.index') }}" class="btn btn-outline-warning">
                <i class="bi bi-arrow-repeat me-2"></i>Reset Demo Data
            </a>
            <a href="{{ route('admin.kitchen') }}" target="_blank" class="btn btn-outline-danger">
                <i class="bi bi-fire me-2"></i>Buka Dapur
            </a>
            <a href="{{ route('admin.orders.index') }}" target="_blank" class="btn btn-outline-secondary">
                <i class="bi bi-list-task me-2"></i>Antrian Pesanan
            </a>
        </div>
    </div>

    {{-- ── Print legend ─────────────────────────────────────────────── --}}
    <div class="d-none d-print-block mt-4">
        <hr>
        <small class="text-muted">
            Dicetak pada: {{ now()->format('d M Y H:i') }} &bull; E-Canteen USK &bull; /admin/demo-checklist
        </small>
    </div>

</div>
@endsection

@push('scripts')
<script>
    /**
     * Strike-through a step row when its checkbox is ticked (live presenter mode).
     */
    function toggleDone(checkbox, stepNum) {
        const content = document.getElementById('step-content-' + stepNum);
        if (checkbox.checked) {
            content.style.opacity = '0.45';
            content.style.textDecoration = 'line-through';
        } else {
            content.style.opacity = '';
            content.style.textDecoration = '';
        }
    }

    /**
     * Light confirm dialog before Run buttons fire.
     */
    function confirmRun(message) {
        return window.confirm(message);
    }

    /* Auto-dismiss success/error alerts after 6 s */
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.alert.alert-success, .alert.alert-danger').forEach(function (el) {
            setTimeout(function () {
                const bsAlert = bootstrap.Alert.getOrCreateInstance(el);
                bsAlert.close();
            }, 6000);
        });
    });
</script>
@endpush
