@extends('layouts.app')
@section('title', 'Audit Log Impersonasi')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Audit Log Impersonasi</h5>
        <p class="text-muted small mb-0">Semua sesi impersonasi tercatat secara permanen di sini.</p>
    </div>
</div>

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        @if($logs->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-person-badge fs-1 d-block mb-2"></i>
                Belum ada log impersonasi.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Admin (Impersonator)</th>
                        <th>User Target</th>
                        <th>IP Address</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th class="text-center">Durasi</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $log)
                    <tr>
                        <td class="text-muted small">{{ $log->id }}</td>
                        <td>
                            <span class="fw-semibold">{{ $log->impersonator?->name ?? '—' }}</span>
                            <div class="text-muted small">{{ $log->impersonator?->email }}</div>
                        </td>
                        <td>
                            <span class="fw-semibold">{{ $log->target?->name ?? '—' }}</span>
                            <div class="text-muted small">{{ $log->target?->email }}</div>
                        </td>
                        <td class="font-monospace small">{{ $log->ip_address ?? '—' }}</td>
                        <td class="small">{{ $log->started_at?->format('d/m/Y H:i:s') }}</td>
                        <td class="small">{{ $log->ended_at?->format('d/m/Y H:i:s') ?? '—' }}</td>
                        <td class="text-center small">
                            @if($log->ended_at)
                                {{ gmdate('H:i:s', $log->started_at->diffInSeconds($log->ended_at)) }}
                            @else
                                <span class="text-warning">Aktif</span>
                            @endif
                        </td>
                        <td class="text-center">
                            @if($log->isActive())
                                <span class="badge bg-warning text-dark">Berlangsung</span>
                            @else
                                <span class="badge bg-secondary">Selesai</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-3 py-2">
            {{ $logs->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
