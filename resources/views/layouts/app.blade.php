<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') | E-Canteen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/theme.css'])
    <style>
        :root { --sidebar-width: 240px; --primary: #f97316; }

        body { background-color: var(--bg-main, #f8f9fa); }

        /* ── Sidebar ──────────────────────────────────────── */
        #sidebar {
            width: var(--sidebar-width);
            min-height: 100vh;
            background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
            position: fixed;
            top: 0; left: 0;
            z-index: 1040;
            transition: transform .25s ease;
        }
        #sidebar .brand {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,.07);
        }
        #sidebar .nav-link {
            color: rgba(255,255,255,.65);
            padding: .55rem 1.5rem;
            border-radius: .4rem;
            margin: .05rem .75rem;
            font-size: .875rem;
            transition: all .15s;
        }
        #sidebar .nav-link:hover,
        #sidebar .nav-link.active {
            color: #fff;
            background-color: var(--primary);
        }
        #sidebar .nav-link i { width: 1.25rem; margin-right: .5rem; }
        #sidebar .nav-section {
            font-size: .7rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: rgba(255,255,255,.3);
            padding: 1rem 1.5rem .25rem;
        }

        /* ── Main wrapper ─────────────────────────────────── */
        #main-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: margin-left .25s ease;
        }

        /* ── Topbar ───────────────────────────────────────── */
        #topbar {
            background: #fff;
            border-bottom: 1px solid #e9ecef;
            padding: .75rem 1.5rem;
            position: sticky; top: 0; z-index: 1030;
        }

        /* ── Cards & helpers ──────────────────────────────── */
        .stat-card { border: none; border-radius: .75rem; }
        .badge-status-pending    { background-color: #6c757d; }
        .badge-status-preparing  { background-color: #0d6efd; }
        .badge-status-ready      { background-color: #198754; }
        .badge-status-cancelled  { background-color: #dc3545; }

        /* ── Mobile ───────────────────────────────────────── */
        @media (max-width: 767.98px) {
            #sidebar { transform: translateX(-100%); }
            #sidebar.show { transform: translateX(0); }
            #main-wrapper { margin-left: 0; }
            #sidebar-overlay {
                display: none;
                position: fixed; inset: 0;
                background: rgba(0,0,0,.45);
                z-index: 1039;
            }
            #sidebar-overlay.show { display: block; }
        }

        /* ── Accessibility ─────────────────────────────────── */
        /* Skip-to-content link: hidden until focused */
        .skip-link {
            position: absolute; top: -100%; left: 0;
            z-index: 9999; padding: .5rem 1.25rem;
            background: #0d6efd; color: #fff !important;
            border-radius: 0 0 .35rem 0;
            font-weight: 600; text-decoration: none;
            transition: top .15s;
        }
        .skip-link:focus { top: 0; outline: 3px solid #f97316; }

        /* Font-size levels applied to <html> */
        html[data-font-size="large"]  { font-size: 112.5%; }
        html[data-font-size="larger"] { font-size: 125%;   }

        /* High-contrast mode: boost foreground/background on <html> */
        html[data-contrast="high"] { filter: contrast(1.5); }

        /* Focus ring: ensure visible focus for keyboard users */
        :focus-visible {
            outline: 3px solid #f97316 !important;
            outline-offset: 2px;
        }

        /* Accessibility toolbar buttons */
        .a11y-btn {
            font-size: .75rem;
            font-weight: 700;
            line-height: 1;
            min-width: 28px;
        }
    </style>
    @stack('styles')
</head>
<body data-theme="light">

{{-- Skip-to-main-content link: first focusable element for keyboard/screen-reader users --}}
<a class="skip-link" href="#main-content">Langsung ke konten utama</a>

{{-- Sidebar overlay (mobile) --}}
<div id="sidebar-overlay" onclick="closeSidebar()" aria-hidden="true"></div>

{{-- ── Sidebar ────────────────────────────────────────────── --}}
<nav id="sidebar" role="navigation" aria-label="Navigasi Utama">
    <div class="brand d-flex align-items-center gap-2">
        <span class="fs-4">🍽️</span>
        <div>
            <div class="text-white fw-bold lh-1">E-Canteen</div>
            <div class="text-white-50" style="font-size:.7rem">Pre-Order Kantin</div>
        </div>
    </div>

    <ul class="nav flex-column py-2">

        @if(auth()->user()->isAdmin())
            {{-- ADMIN NAV --}}
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}"
                   class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>

            <li class="nav-section">Pesanan</li>
            <li class="nav-item">
                <a href="{{ route('admin.kitchen') }}"
                   class="nav-link {{ request()->routeIs('admin.kitchen*') ? 'active' : '' }}">
                    <i class="bi bi-display"></i> Dapur KDS
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.orders.index') }}"
                   class="nav-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                    <i class="bi bi-list-check"></i> Antrean Pesanan
                </a>
            </li>

            <li class="nav-section">Manajemen</li>
            <li class="nav-item">
                <a href="{{ route('admin.menus.index') }}"
                   class="nav-link {{ request()->routeIs('admin.menus.*') ? 'active' : '' }}">
                    <i class="bi bi-grid-3x3-gap"></i> Menu
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}"
                   class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                    <i class="bi bi-tags"></i> Kategori
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.break-times.index') }}"
                   class="nav-link {{ request()->routeIs('admin.break-times.*') ? 'active' : '' }}">
                    <i class="bi bi-clock"></i> Waktu Istirahat
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.promotions.index') }}"
                   class="nav-link {{ request()->routeIs('admin.promotions.*') ? 'active' : '' }}">
                    <i class="bi bi-tag"></i> Promosi & Diskon
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.transactions.index') }}"
                   class="nav-link {{ request()->routeIs('admin.transactions.*') ? 'active' : '' }}">
                    <i class="bi bi-arrow-left-right"></i> Transaksi &amp; Refund
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.topup.index') }}"
                   class="nav-link {{ request()->routeIs('admin.topup.*') ? 'active' : '' }}">
                    <i class="bi bi-wallet2"></i> Approval Top-Up
                    @php $pendingTopupCount = \App\Models\BalanceTransaction::where('type','topup')->where('description','pending')->count(); @endphp
                    @if($pendingTopupCount > 0)
                    <span class="badge bg-warning text-dark rounded-pill ms-auto">{{ $pendingTopupCount }}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}"
                   class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Manajemen User
                </a>
            </li>

            <li class="nav-section">Laporan</li>
            <li class="nav-item">
                <a href="{{ route('admin.anomalies.index') }}"
                   class="nav-link {{ request()->routeIs('admin.anomalies.*') ? 'active' : '' }}">
                    <i class="bi bi-shield-exclamation"></i> Anomali
                    @php $anomalyCount = \App\Models\Anomaly::unresolved()->recent(7)->count(); @endphp
                    @if($anomalyCount > 0)
                    <span class="badge bg-danger rounded-pill ms-auto">{{ $anomalyCount }}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.reports.daily') }}"
                   class="nav-link {{ request()->routeIs('admin.reports.*') ? 'active' : '' }}">
                    <i class="bi bi-bar-chart"></i> Laporan Harian
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.exports.index') }}"
                   class="nav-link {{ request()->routeIs('admin.exports.*') ? 'active' : '' }}">
                    <i class="bi bi-cloud-download"></i> Export Data
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.webhooks.index') }}"
                   class="nav-link {{ request()->routeIs('admin.webhooks.*') ? 'active' : '' }}">
                    <i class="bi bi-broadcast"></i> Webhook Outbound
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.feature-flags.index') }}"
                   class="nav-link {{ request()->routeIs('admin.feature-flags.*') ? 'active' : '' }}">
                    <i class="bi bi-toggles"></i> Feature Flags
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.stock-alerts.index') }}"
                   class="nav-link {{ request()->routeIs('admin.stock-alerts.*') ? 'active' : '' }}">
                    <i class="bi bi-exclamation-triangle"></i> Alert Stok
                    @php $alertCount = \App\Models\StockAlert::whereNull('resolved_at')->count(); @endphp
                    @if($alertCount > 0)
                        <span class="badge bg-danger ms-1">{{ $alertCount }}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.restock-requests.index') }}"
                   class="nav-link {{ request()->routeIs('admin.restock-requests.*') ? 'active' : '' }}">
                    <i class="bi bi-arrow-repeat"></i> Permintaan Restock
                    @php $pendingRestock = \App\Models\RestockRequest::where('status','pending')->count(); @endphp
                    @if($pendingRestock > 0)
                        <span class="badge bg-warning text-dark ms-1">{{ $pendingRestock }}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.backups.index') }}"
                   class="nav-link {{ request()->routeIs('admin.backups.*','admin.restore-requests.*') ? 'active' : '' }}">
                    <i class="bi bi-shield-lock"></i> Backup &amp; Restore
                    @php $pendingRestore = \App\Models\BackupRestoreRequest::where('status','pending')->count(); @endphp
                    @if($pendingRestore > 0)
                        <span class="badge bg-warning text-dark ms-1">{{ $pendingRestore }}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.trash.menus') }}"
                   class="nav-link {{ request()->routeIs('admin.trash.*') ? 'active' : '' }}">
                    <i class="bi bi-trash3"></i> Trash Data
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.testing') }}"
                   class="nav-link {{ request()->routeIs('admin.testing') ? 'active' : '' }}">
                    <i class="bi bi-clipboard-check"></i> Checklist Testing
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.health.index') }}"
                   class="nav-link {{ request()->routeIs('admin.health.*') ? 'active' : '' }}">
                    <i class="bi bi-activity"></i> Health &amp; Observability
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.data-privacy.index') }}"
                   class="nav-link {{ request()->routeIs('admin.data-privacy.*') ? 'active' : '' }}">
                    <i class="bi bi-shield-lock"></i> Privasi Data
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.demo-mode.index') }}"
                   class="nav-link {{ request()->routeIs('admin.demo-mode.*') ? 'active' : '' }}">
                    <i class="bi bi-play-circle"></i> Demo Mode
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.demo-checklist.index') }}"
                   class="nav-link {{ request()->routeIs('admin.demo-checklist.*') ? 'active' : '' }}">
                    <i class="bi bi-clipboard2-check"></i> Demo Checklist
                </a>
            </li>

            @if(auth()->user()->isSuperAdmin())
            <li class="nav-section">Super Admin</li>
            <li class="nav-item">
                <a href="{{ route('admin.impersonation.audit') }}"
                   class="nav-link {{ request()->routeIs('admin.impersonation.*') ? 'active' : '' }}">
                    <i class="bi bi-person-badge"></i> Audit Impersonasi
                </a>
            </li>
            @endif

        @else
            {{-- USER NAV --}}
            <li class="nav-section">Menu</li>
            <li class="nav-item">
                <a href="{{ route('user.menus.index') }}"
                   class="nav-link {{ request()->routeIs('user.menus.*') ? 'active' : '' }}">
                    <i class="bi bi-shop"></i> Daftar Menu
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.orders.create') }}"
                   class="nav-link {{ request()->routeIs('user.orders.create') ? 'active' : '' }}">
                    <i class="bi bi-cart-plus"></i> Pre-Order
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.promotions.index') }}"
                   class="nav-link {{ request()->routeIs('user.promotions.*') ? 'active' : '' }}">
                    <i class="bi bi-tags-fill"></i> Promo &amp; Diskon
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.batches.index') }}"
                   class="nav-link {{ request()->routeIs('user.batches.*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Pesan Bareng
                </a>
            </li>

            <li class="nav-section">Akun</li>
            <li class="nav-item">
                <a href="{{ route('user.orders.history') }}"
                   class="nav-link {{ request()->routeIs('user.orders.history') || request()->routeIs('user.orders.show') ? 'active' : '' }}">
                    <i class="bi bi-clock-history"></i> Riwayat Pesanan
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.balance.index') }}"
                   class="nav-link {{ request()->routeIs('user.balance.*') ? 'active' : '' }}">
                    <i class="bi bi-wallet2"></i> Saldo Saya
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.points.index') }}"
                   class="nav-link {{ request()->routeIs('user.points.*') ? 'active' : '' }}">
                    <i class="bi bi-star-fill"></i> Poin Saya
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.privacy.index') }}"
                   class="nav-link {{ request()->routeIs('user.privacy.*') ? 'active' : '' }}">
                    <i class="bi bi-shield-lock"></i> Privasi Data
                </a>
            </li>
        @endif

    </ul>
</nav>

{{-- ── Main Content ──────────────────────────────────────── --}}
<div id="main-wrapper">

    {{-- Topbar --}}
    <header id="topbar" class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-sm btn-outline-secondary d-md-none"
                    onclick="toggleSidebar()"
                    aria-label="Buka atau tutup menu navigasi"
                    aria-controls="sidebar"
                    aria-expanded="false"
                    id="sidebar-toggle-btn">
                <i class="bi bi-list fs-5" aria-hidden="true"></i>
            </button>
            <h6 class="mb-0 fw-semibold text-dark">@yield('title', 'Dashboard')</h6>
        </div>

        <div class="d-flex align-items-center gap-3">
            {{-- Accessibility toolbar --}}
            <div class="d-flex gap-1" role="toolbar" aria-label="Aksesibilitas">
                <button id="a11y-font-size"
                        class="btn btn-sm btn-outline-secondary a11y-btn"
                        title="Ubah ukuran teks"
                        aria-label="Ubah ukuran teks"
                        aria-describedby="a11y-font-hint">
                    <span aria-hidden="true">A+</span>
                </button>
                <button id="a11y-contrast"
                        class="btn btn-sm btn-outline-secondary a11y-btn"
                        title="Kontras tinggi"
                        aria-label="Toggle mode kontras tinggi"
                        aria-pressed="false">
                    <i class="bi bi-circle-half" aria-hidden="true"></i>
                </button>
            </div>
            <span id="a11y-font-hint" class="visually-hidden">Klik berulang untuk memperbesar teks (normal → besar → lebih besar → normal)</span>

            <button id="theme-toggle" class="btn btn-sm btn-outline-secondary" title="Ganti Tema" aria-label="Ganti tema terang/gelap">
                <span id="theme-icon" aria-hidden="true">🌙</span>
            </button>

            @if(!auth()->user()->isAdmin())
            <span class="badge bg-success fs-7">
                <i class="bi bi-wallet2 me-1"></i>
                Rp {{ number_format(auth()->user()->balance, 0, ',', '.') }}
            </span>
            @endif

            {{-- Notification bell (admin only) --}}
            @if(auth()->user()->isAdmin())
            @php $bellCount = auth()->user()->unreadNotifications()->count(); @endphp
            <a href="{{ route('admin.stock-alerts.index') }}"
               class="btn btn-sm btn-outline-secondary position-relative"
               title="Alert Stok Rendah"
               aria-label="Alert stok rendah{{ $bellCount > 0 ? ", {$bellCount} belum dibaca" : '' }}">
                <i class="bi bi-bell" aria-hidden="true"></i>
                @if($bellCount > 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                          style="font-size:.65rem">
                        {{ $bellCount > 99 ? '99+' : $bellCount }}
                    </span>
                @endif
            </a>
            @endif

            <div class="dropdown">
                <button class="btn btn-sm btn-light dropdown-toggle d-flex align-items-center gap-2"
                        type="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        aria-label="Menu akun pengguna {{ auth()->user()->name }}">
                    <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center"
                         style="width:28px;height:28px;font-size:.75rem">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <span class="d-none d-sm-inline text-truncate" style="max-width:120px">
                        {{ auth()->user()->name }}
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li><span class="dropdown-item-text small text-muted">{{ auth()->user()->email }}</span></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item text-danger">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    {{-- Impersonation Banner (visible only during active impersonation) --}}
    @if(session('impersonated_by'))
    <div class="alert alert-warning mb-0 rounded-0 d-flex align-items-center justify-content-between px-4 py-2"
         style="border-left:5px solid #f97316" role="alert" aria-live="polite">
        <div>
            <i class="bi bi-person-fill-exclamation me-2 text-danger"></i>
            <strong>Mode Impersonasi Aktif</strong> — Anda sedang masuk sebagai
            <strong>{{ auth()->user()->name }}</strong>.
            Semua tindakan akan tercatat atas nama user ini.
        </div>
        <form action="{{ route('impersonate.stop') }}" method="POST" class="ms-3 flex-shrink-0">
            @csrf
            <button type="submit" class="btn btn-sm btn-danger">
                <i class="bi bi-stop-circle me-1"></i>Hentikan Impersonasi
            </button>
        </form>
    </div>
    @endif

    {{-- Page Content --}}
    <main id="main-content" class="p-3 p-md-4" tabindex="-1">
        {{-- Live region: accessibility announcements --}}
        <div id="a11y-announcer" class="visually-hidden" aria-live="polite" aria-atomic="true"></div>
        {{-- Flash Messages --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <i class="bi bi-info-circle me-2"></i>{{ session('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')

        {{-- Demo Mode Banner --}}
        @php $demoActive = app(\App\Services\DemoModeService::class)->isEnabled(); @endphp
        @if($demoActive)
            <div class="position-fixed bottom-0 start-0 end-0 text-center py-2 z-3"
                 style="background:rgba(255,193,7,.95); font-size:.8rem; font-weight:600; z-index:2000;">
                <i class="bi bi-play-circle me-1"></i>
                DEMO MODE AKTIF — data ini tidak nyata.
                @if(auth()->check() && auth()->user()->isAdmin())
                    <a href="{{ route('admin.demo-mode.index') }}" class="ms-2 text-dark text-decoration-underline">Kelola</a>
                @endif
            </div>
        @endif
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    /* ── Sidebar ── */
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const btn     = document.getElementById('sidebar-toggle-btn');
        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
        if (btn) btn.setAttribute('aria-expanded', sidebar.classList.contains('show') ? 'true' : 'false');
    }
    function closeSidebar() {
        document.getElementById('sidebar').classList.remove('show');
        document.getElementById('sidebar-overlay').classList.remove('show');
        const btn = document.getElementById('sidebar-toggle-btn');
        if (btn) btn.setAttribute('aria-expanded', 'false');
    }

    /* ── Theme Toggle ── */
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn  = document.getElementById('theme-toggle');
        const themeIcon  = document.getElementById('theme-icon');
        const savedTheme = localStorage.getItem('theme') || 'light';

        function applyTheme(theme) {
            document.body.setAttribute('data-theme', theme);
            themeIcon.textContent = theme === 'dark' ? '☀️' : '🌙';
            toggleBtn.title = theme === 'dark' ? 'Ganti ke Light Mode' : 'Ganti ke Dark Mode';
        }

        applyTheme(savedTheme);

        toggleBtn.addEventListener('click', function () {
            const current  = document.body.getAttribute('data-theme');
            const newTheme = current === 'dark' ? 'light' : 'dark';
            applyTheme(newTheme);
            localStorage.setItem('theme', newTheme);
        });
    });
</script>

{{-- ── Accessibility Preferences ─────────────────────────────────────────── --}}
<script>
(function () {
    'use strict';

    var PREFS_KEY = 'usk_a11y_prefs';
    var FONT_SIZES = ['normal', 'large', 'larger'];

    function getPrefs() {
        try { return JSON.parse(localStorage.getItem(PREFS_KEY) || '{}'); } catch (e) { return {}; }
    }
    function savePrefs(p) { localStorage.setItem(PREFS_KEY, JSON.stringify(p)); }

    // ── Apply font size ──────────────────────────────────────────────────────
    function applyFontSize(size) {
        if (size && size !== 'normal') {
            document.documentElement.setAttribute('data-font-size', size);
        } else {
            document.documentElement.removeAttribute('data-font-size');
        }
        var btn = document.getElementById('a11y-font-size');
        if (btn) {
            var labels = { normal: 'A+ (Normal)', large: 'A+ (Besar)', larger: 'A+ (Lebih Besar)' };
            btn.setAttribute('aria-label', 'Ukuran teks: ' + (labels[size] || 'Normal') + '. Klik untuk ganti.');
        }
        announce(size === 'normal' || !size ? 'Ukuran teks: normal' : 'Ukuran teks diperbesar: ' + size);
    }

    // ── Apply high contrast ──────────────────────────────────────────────────
    function applyContrast(high) {
        if (high) {
            document.documentElement.setAttribute('data-contrast', 'high');
        } else {
            document.documentElement.removeAttribute('data-contrast');
        }
        var btn = document.getElementById('a11y-contrast');
        if (btn) btn.setAttribute('aria-pressed', high ? 'true' : 'false');
        announce(high ? 'Mode kontras tinggi aktif' : 'Mode kontras tinggi dinonaktifkan');
    }

    // ── Announce to screen readers ───────────────────────────────────────────
    function announce(msg) {
        var el = document.getElementById('a11y-announcer');
        if (!el) return;
        el.textContent = '';
        // Brief timeout forces screen readers to re-read the updated text
        setTimeout(function () { el.textContent = msg; }, 50);
    }

    // ── Make all Bootstrap icons aria-hidden ────────────────────────────────
    function ariaHideIcons() {
        document.querySelectorAll('i.bi').forEach(function (el) {
            if (!el.getAttribute('aria-label') && !el.getAttribute('role')) {
                el.setAttribute('aria-hidden', 'true');
            }
        });
    }

    // ── Restore preferences on page load ────────────────────────────────────
    var prefs = getPrefs();
    if (prefs.fontSize) applyFontSize(prefs.fontSize);
    if (prefs.highContrast) applyContrast(true);

    document.addEventListener('DOMContentLoaded', function () {
        ariaHideIcons();

        // Font-size cycling: normal → large → larger → normal
        var fontBtn = document.getElementById('a11y-font-size');
        if (fontBtn) {
            fontBtn.addEventListener('click', function () {
                var p    = getPrefs();
                var cur  = p.fontSize || 'normal';
                var next = FONT_SIZES[(FONT_SIZES.indexOf(cur) + 1) % FONT_SIZES.length];
                p.fontSize = next;
                savePrefs(p);
                applyFontSize(next);
            });
        }

        // High-contrast toggle
        var contrastBtn = document.getElementById('a11y-contrast');
        if (contrastBtn) {
            contrastBtn.addEventListener('click', function () {
                var p = getPrefs();
                p.highContrast = !p.highContrast;
                savePrefs(p);
                applyContrast(p.highContrast);
            });
        }

        // Nav links: add aria-current="page" to active links
        document.querySelectorAll('#sidebar .nav-link.active').forEach(function (a) {
            a.setAttribute('aria-current', 'page');
        });
    });
})();
</script>
@stack('scripts')

{{-- ── Service Worker registration & offline queue bridge ─────────────────── --}}
<script>
(function () {
    'use strict';

    // ── Register service worker ──────────────────────────────────────────────
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js', { scope: '/' })
                .catch(err => console.warn('[SW] Registration failed:', err));
        });

        // ── Handle messages sent back from SW ────────────────────────────────
        navigator.serviceWorker.addEventListener('message', event => {
            const { type, id, status } = event.data || {};

            if (type === 'SW_GET_QUEUE') {
                // SW asked for the queue + CSRF token (background sync path)
                const queue = JSON.parse(localStorage.getItem('usk_order_queue') || '[]')
                    .filter(e => e.attempts < 5);
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';
                event.ports[0].postMessage({ queue, csrfToken });
            }

            if (type === 'SW_ORDER_DONE') {
                // SW successfully submitted (or gave up on) an entry — remove from queue
                const queue = JSON.parse(localStorage.getItem('usk_order_queue') || '[]')
                    .filter(e => e.id !== id);
                localStorage.setItem('usk_order_queue', JSON.stringify(queue));
                window.dispatchEvent(new CustomEvent('orderQueue:swDone', { detail: { id, status } }));

                // If submission was successful, show a toast and offer redirect
                if (status >= 200 && status < 300) {
                    _showOfflineToast('Pesanan yang tertunda berhasil dikirim! <a href="/orders/history" class="alert-link">Lihat riwayat</a>');
                }
            }
        });
    }

    // ── Retry queue when coming back online ─────────────────────────────────
    window.addEventListener('online', () => {
        _flushQueueOnline();
    });

    async function _flushQueueOnline() {
        const queue = JSON.parse(localStorage.getItem('usk_order_queue') || '[]')
            .filter(e => e.attempts < 5);
        if (queue.length === 0) return;

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';

        for (const entry of queue) {
            try {
                const body = _buildFormData(entry, csrfToken);
                const res  = await fetch('/orders', {
                    method:  'POST',
                    headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': csrfToken },
                    body:    body,
                });

                // Increment attempts
                _updateQueueEntry(entry.id, { attempts: entry.attempts + 1 });

                if (res.ok) {
                    const json = await res.json().catch(() => ({}));
                    _removeQueueEntry(entry.id);
                    _showOfflineToast('Pesanan yang tertunda berhasil dikirim! <a href="' + (json.redirect_url || '/orders/history') + '" class="alert-link">Lihat pesanan</a>');
                } else if (res.status === 422) {
                    // Permanent failure (validation error) — remove to avoid infinite retry
                    _removeQueueEntry(entry.id);
                }
            } catch { /* stay in queue */ }
        }
    }

    function _buildFormData(entry, csrfToken) {
        const data = new FormData();
        data.append('_token',          csrfToken);
        data.append('break_time_id',   entry.break_time_id);
        data.append('idempotency_key', entry.id);
        if (entry.note) data.append('note', entry.note);
        (entry.items || []).forEach((item, i) => {
            data.append('items[' + i + '][menu_id]',  item.menu_id);
            data.append('items[' + i + '][quantity]', item.quantity);
        });
        return data;
    }

    function _removeQueueEntry(id) {
        const q = JSON.parse(localStorage.getItem('usk_order_queue') || '[]').filter(e => e.id !== id);
        localStorage.setItem('usk_order_queue', JSON.stringify(q));
    }

    function _updateQueueEntry(id, patch) {
        const q = JSON.parse(localStorage.getItem('usk_order_queue') || '[]')
            .map(e => e.id === id ? Object.assign({}, e, patch) : e);
        localStorage.setItem('usk_order_queue', JSON.stringify(q));
    }

    function _showOfflineToast(html) {
        let container = document.getElementById('offline-toast-container');
        if (!container) {
            container = document.createElement('div');
            container.id = 'offline-toast-container';
            container.style.cssText = 'position:fixed;bottom:1rem;right:1rem;z-index:9999;min-width:280px;max-width:380px';
            document.body.appendChild(container);
        }
        const toast = document.createElement('div');
        toast.className = 'alert alert-success shadow-sm d-flex align-items-start gap-2 mb-2';
        toast.innerHTML = '<i class="bi bi-wifi flex-shrink-0 mt-1"></i><div class="small">' + html + '</div>'
            + '<button type="button" class="btn-close btn-sm ms-auto flex-shrink-0" onclick="this.closest(\'.alert\').remove()"></button>';
        container.appendChild(toast);
        setTimeout(() => toast.remove(), 8000);
    }

    // ── Offline indicator banner ─────────────────────────────────────────────
    function _setOfflineBanner(offline) {
        let banner = document.getElementById('offline-banner');
        if (!offline) { if (banner) banner.remove(); return; }
        if (banner) return;
        banner = document.createElement('div');
        banner.id = 'offline-banner';
        banner.className = 'alert alert-warning mb-0 rounded-0 py-2 text-center small';
        banner.style.cssText = 'position:sticky;top:0;z-index:1050';
        banner.innerHTML = '<i class="bi bi-wifi-off me-2"></i>Anda sedang offline. Pesanan akan dikirim otomatis saat koneksi pulih.';
        document.body.prepend(banner);
    }

    window.addEventListener('offline', () => _setOfflineBanner(true));
    window.addEventListener('online',  () => _setOfflineBanner(false));
    if (!navigator.onLine) _setOfflineBanner(true);
})();
</script>
</body>
</html>
