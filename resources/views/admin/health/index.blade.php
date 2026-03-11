@extends('layouts.app')
@section('title', 'Health & Observability')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Health &amp; Observability</h5>
        <p class="text-muted small mb-0">
            Versi: <span class="font-monospace">{{ $appVersion }}</span> &bull;
            Env: <span class="badge bg-{{ config('app.env') === 'production' ? 'danger' : 'secondary' }}">{{ config('app.env') }}</span>
        </p>
    </div>
    <div class="d-flex gap-2">
        @if(auth()->user()->isSuperAdmin())
            <form action="{{ route('admin.health.trigger-exception') }}" method="POST">
                @csrf
                <button class="btn btn-outline-warning btn-sm"
                        onclick="return confirm('Kirim test exception ke Sentry?')"
                        title="Test Sentry integration">
                    <i class="bi bi-bug me-1"></i>Trigger Test Exception
                </button>
            </form>
        @endif
        <a href="{{ url('/metrics') }}" class="btn btn-outline-secondary btn-sm" target="_blank"
           title="Raw Prometheus metrics endpoint — requires Bearer token">
            <i class="bi bi-bar-chart-line me-1"></i>/metrics
        </a>
    </div>
</div>

@foreach(['success','error','info'] as $type)
    @if(session($type))
        <div class="alert alert-{{ $type === 'error' ? 'danger' : ($type === 'info' ? 'info' : 'success') }} alert-dismissible fade show">
            {{ session($type) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
@endforeach

{{-- System Health Checks --}}
@php
    $statusColor = fn($s) => match($s) {
        'ok', 'configured' => 'success',
        'degraded', 'late', 'unknown' => 'warning',
        'not_configured' => 'secondary',
        default => 'danger',
    };
    $statusIcon = fn($s) => match($s) {
        'ok', 'configured' => 'bi-check-circle-fill',
        'degraded', 'late', 'unknown' => 'bi-exclamation-circle-fill',
        'not_configured' => 'bi-dash-circle',
        default => 'bi-x-circle-fill',
    };
@endphp

<div class="row g-3 mb-4">

    {{-- Database --}}
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <i class="bi {{ $statusIcon($checks['database']['status']) }} text-{{ $statusColor($checks['database']['status']) }} fs-2"></i>
                <div>
                    <div class="fw-semibold">Database</div>
                    <div class="text-muted small">
                        @if(isset($checks['database']['response_ms']))
                            {{ $checks['database']['response_ms'] }} ms
                        @else
                            {{ $checks['database']['message'] ?? '—' }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Cache --}}
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <i class="bi {{ $statusIcon($checks['cache']['status']) }} text-{{ $statusColor($checks['cache']['status']) }} fs-2"></i>
                <div>
                    <div class="fw-semibold">Cache</div>
                    <div class="text-muted small">
                        Driver: {{ config('cache.default') }} &bull; {{ $checks['cache']['status'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Storage --}}
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <i class="bi {{ $statusIcon($checks['storage']['status']) }} text-{{ $statusColor($checks['storage']['status']) }} fs-2"></i>
                <div>
                    <div class="fw-semibold">Storage</div>
                    <div class="text-muted small">{{ $checks['storage']['status'] }}</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Queue --}}
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body d-flex align-items-center gap-3">
                <i class="bi {{ $statusIcon($checks['queue']['status']) }} text-{{ $statusColor($checks['queue']['status']) }} fs-2"></i>
                <div>
                    <div class="fw-semibold">Queue</div>
                    <div class="text-muted small">
                        {{ $checks['queue']['driver'] ?? '?' }} &bull;
                        Pending: {{ $checks['queue']['pending'] ?? 0 }} &bull;
                        <span class="{{ ($checks['queue']['failed'] ?? 0) > 0 ? 'text-danger fw-semibold' : '' }}">
                            Failed: {{ $checks['queue']['failed'] ?? 0 }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">

    {{-- Cron Health --}}
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
                <h6 class="fw-semibold mb-0"><i class="bi bi-clock me-1"></i>Cron Health</h6>
            </div>
            <div class="card-body p-0 pt-1">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle small">
                        <thead class="table-light">
                            <tr>
                                <th>Job</th>
                                <th class="text-center">Status</th>
                                <th>Terakhir Berjalan</th>
                                <th class="text-end">Usia</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($checks['cron'] as $job => $info)
                            <tr>
                                <td class="font-monospace">{{ $job }}</td>
                                <td class="text-center">
                                    <span class="badge bg-{{ $statusColor($info['status']) }}">{{ $info['status'] }}</span>
                                </td>
                                <td>
                                    @if($info['last_run'])
                                        {{ \Carbon\Carbon::createFromTimestamp($info['last_run'])->format('d M Y H:i') }}
                                    @else
                                        <span class="text-muted">belum pernah berjalan</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    @if(isset($info['age_min']))
                                        {{ $info['age_min'] < 60 ? $info['age_min'] . ' mnt' : round($info['age_min']/60, 1) . ' jam' }}
                                    @else
                                        —
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Sentry & Business Metrics --}}
    <div class="col-lg-4">
        {{-- Sentry --}}
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
                <h6 class="fw-semibold mb-0">
                    <img src="https://sentry-brand.storage.googleapis.com/sentry-glyph-black.png"
                         width="16" class="me-1" alt="Sentry" style="filter:invert(.5)">
                    Sentry
                </h6>
            </div>
            <div class="card-body pt-2 pb-3">
                @if($sentryEnabled)
                    <span class="badge bg-success me-1">Aktif</span>
                    <span class="text-muted small">DSN dikonfigurasi</span>
                @else
                    <span class="badge bg-secondary me-1">Nonaktif</span>
                    <span class="text-muted small">Set <code>SENTRY_DSN</code> di .env untuk mengaktifkan</span>
                @endif
                <div class="mt-2 small text-muted">
                    Traces sample rate: <strong>{{ config('sentry.traces_sample_rate', 0) * 100 }}%</strong>
                </div>
            </div>
        </div>

        {{-- Business Snapshot --}}
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
                <h6 class="fw-semibold mb-0"><i class="bi bi-graph-up me-1"></i>Snapshot Bisnis</h6>
            </div>
            <div class="card-body pt-2 pb-3">
                <div class="row g-2 text-center">
                    <div class="col-6">
                        <div class="fw-bold fs-5 text-primary">{{ $stats['orders_today'] }}</div>
                        <div class="text-muted" style="font-size:0.7rem">Order Hari Ini</div>
                    </div>
                    <div class="col-6">
                        <div class="fw-bold fs-5 {{ $stats['pending_orders'] > 0 ? 'text-warning' : 'text-success' }}">
                            {{ $stats['pending_orders'] }}
                        </div>
                        <div class="text-muted" style="font-size:0.7rem">Order Pending</div>
                    </div>
                    <div class="col-6">
                        <div class="fw-bold fs-5">{{ $stats['total_users'] }}</div>
                        <div class="text-muted" style="font-size:0.7rem">Total User</div>
                    </div>
                    <div class="col-6">
                        <div class="fw-bold fs-5">{{ $stats['backups_completed'] }}</div>
                        <div class="text-muted" style="font-size:0.7rem">Backup OK</div>
                    </div>
                    @if($stats['failed_jobs'] > 0)
                    <div class="col-12">
                        <div class="alert alert-danger py-1 mb-0 small">
                            <i class="bi bi-exclamation-triangle me-1"></i>
                            {{ $stats['failed_jobs'] }} failed job(s) perlu ditangani!
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Prometheus Info --}}
<div class="card border-0 shadow-sm">
    <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
        <h6 class="fw-semibold mb-0"><i class="bi bi-terminal me-1"></i>Prometheus Scrape Config</h6>
    </div>
    <div class="card-body pb-3">
        <p class="text-muted small mb-2">
            Tambahkan job berikut ke <code>prometheus.yml</code> untuk scraping metrik aplikasi:
        </p>
        <pre class="bg-dark text-light p-3 rounded small mb-0" style="font-size:0.75rem"><code>- job_name: 'usk_canteen'
  scrape_interval: 30s
  static_configs:
    - targets: ['{{ request()->getHost() }}']
  metrics_path: /metrics
  authorization:
    credentials: "&lt;METRICS_SECRET&gt;"</code></pre>
        <div class="mt-2 small text-muted">
            <i class="bi bi-info-circle me-1"></i>
            Set <code>METRICS_SECRET</code> di .env, lalu gunakan nilai tersebut sebagai Bearer token.
        </div>
    </div>
</div>
@endsection
