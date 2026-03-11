@extends('layouts.app')
@section('title', 'Permintaan Restore')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Permintaan Restore Database</h5>
        <p class="text-muted small mb-0">
            Restore dieksekusi manual via CLI setelah disetujui super admin
        </p>
    </div>
    <a href="{{ route('admin.backups.index') }}" class="btn btn-outline-primary btn-sm">
        <i class="bi bi-archive me-1"></i>Daftar Backup
    </a>
</div>

@foreach(['success','error','info'] as $type)
    @if(session($type))
        <div class="alert alert-{{ $type === 'error' ? 'danger' : ($type === 'info' ? 'info' : 'success') }} alert-dismissible fade show">
            {{ session($type) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
@endforeach

{{-- New Request Form --}}
@if($availableBackups->isNotEmpty())
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-header bg-transparent pt-3 pb-2">
        <h6 class="fw-semibold mb-0"><i class="bi bi-plus-circle me-1"></i>Ajukan Permintaan Restore Baru</h6>
    </div>
    <div class="card-body">
        <div class="alert alert-warning small">
            <i class="bi bi-exclamation-triangle-fill me-1"></i>
            Restore bersifat <strong>destruktif</strong> — seluruh data saat ini akan diganti dengan snapshot backup yang dipilih.
            Eksekusi memerlukan akses CLI ke server.
        </div>
        <form action="{{ route('admin.restore-requests.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-5">
                <label class="form-label fw-semibold small">Pilih Backup <span class="text-danger">*</span></label>
                <select name="backup_id" class="form-select" required>
                    <option value="">— Pilih backup —</option>
                    @foreach($availableBackups as $backup)
                        <option value="{{ $backup->id }}">
                            #{{ $backup->id }} — {{ $backup->filename }} ({{ $backup->human_size }}, {{ $backup->created_at->format('d M Y H:i') }})
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label class="form-label fw-semibold small">Alasan Restore <span class="text-danger">*</span></label>
                <input type="text" name="reason" class="form-control" required maxlength="1000"
                       placeholder="Jelaskan alasan mengapa restore diperlukan…">
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-warning w-100 fw-semibold">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Ajukan
                </button>
            </div>
        </form>
    </div>
</div>
@endif

{{-- Request List --}}
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-transparent pt-3 pb-0">
        <h6 class="fw-semibold mb-0">
            <i class="bi bi-list-check me-1"></i>
            Riwayat Permintaan
            <span class="badge bg-secondary ms-1">{{ $requests->total() }}</span>
        </h6>
    </div>
    <div class="card-body p-0 pt-2">
        @if($requests->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                Belum ada permintaan restore.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Backup</th>
                        <th>Diminta oleh</th>
                        <th>Alasan</th>
                        <th class="text-center">Status</th>
                        <th>Catatan Admin</th>
                        <th>Waktu</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($requests as $req)
                    <tr>
                        <td class="text-muted small">{{ $req->id }}</td>
                        <td class="font-monospace" style="font-size:0.7rem;max-width:160px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">
                            {{ $req->backup?->filename ?? 'Backup #' . $req->backup_id }}
                        </td>
                        <td class="small">{{ $req->requester?->name ?? '—' }}</td>
                        <td class="small" style="max-width:200px;">{{ Str::limit($req->reason ?? '', 60) }}</td>
                        <td class="text-center">
                            @php
                                $badge = match($req->status) {
                                    'pending'     => 'warning text-dark',
                                    'approved'    => 'primary',
                                    'in_progress' => 'info',
                                    'completed'   => 'success',
                                    'rejected'    => 'secondary',
                                    'failed'      => 'danger',
                                    default       => 'secondary',
                                };
                            @endphp
                            <span class="badge bg-{{ $badge }}">{{ $req->status }}</span>
                        </td>
                        <td class="small" style="max-width:200px;">
                            @if($req->note)
                                <code class="small">{{ $req->note }}</code>
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td class="small text-nowrap">{{ $req->created_at->format('d M Y H:i') }}</td>
                        <td class="text-end text-nowrap">
                            @if($req->status === 'pending')
                                @if(auth()->user()->isSuperAdmin())
                                    <form action="{{ route('admin.restore-requests.approve', $req) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-primary me-1" title="Setujui">
                                            <i class="bi bi-check-lg"></i>
                                        </button>
                                    </form>
                                @endif
                                <form action="{{ route('admin.restore-requests.reject', $req) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Tolak request restore #{{ $req->id }}?')">
                                    @csrf
                                    <button class="btn btn-sm btn-outline-danger" title="Tolak">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3">{{ $requests->links() }}</div>
        @endif
    </div>
</div>
@endsection
