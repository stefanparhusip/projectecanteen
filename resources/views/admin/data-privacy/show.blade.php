@extends('layouts.app')

@section('title', 'Detail Permintaan Penghapusan')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="d-flex align-items-center mb-4">
                <a href="{{ route('admin.data-privacy.index') }}" class="btn btn-sm btn-outline-secondary me-3">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h5 class="mb-0 fw-semibold">Permintaan Penghapusan #{{ $deletionRequest->id }}</h5>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row g-4 mb-4">
                {{-- Request details --}}
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-header fw-semibold">Detail Permintaan</div>
                        <div class="card-body">
                            <dl class="row mb-0">
                                <dt class="col-5 small">User</dt>
                                <dd class="col-7 small">{{ $deletionRequest->user?->name ?? '—' }}<br>
                                    <span class="text-muted">{{ $deletionRequest->user?->email ?? '—' }}</span></dd>

                                <dt class="col-5 small">Status</dt>
                                <dd class="col-7 small">
                                    <span class="badge bg-{{ match($deletionRequest->status) {
                                        'pending' => 'warning', 'approved' => 'primary',
                                        'rejected' => 'danger', 'completed' => 'success',
                                        default => 'secondary'} }}">{{ $deletionRequest->status }}</span>
                                </dd>

                                <dt class="col-5 small">Alasan</dt>
                                <dd class="col-7 small">{{ $deletionRequest->reason ?? '—' }}</dd>

                                <dt class="col-5 small">IP</dt>
                                <dd class="col-7 small text-muted">{{ $deletionRequest->ip_address ?? '—' }}</dd>

                                <dt class="col-5 small">Diajukan</dt>
                                <dd class="col-7 small">{{ $deletionRequest->created_at->format('d M Y H:i') }}</dd>

                                @if($deletionRequest->reviewed_at)
                                <dt class="col-5 small">Ditinjau</dt>
                                <dd class="col-7 small">
                                    {{ $deletionRequest->reviewed_at->format('d M Y H:i') }}<br>
                                    <span class="text-muted">oleh {{ $deletionRequest->reviewer?->name ?? '—' }}</span>
                                </dd>
                                @endif

                                @if($deletionRequest->admin_note)
                                <dt class="col-5 small">Catatan Admin</dt>
                                <dd class="col-7 small">{{ $deletionRequest->admin_note }}</dd>
                                @endif
                            </dl>
                        </div>
                    </div>
                </div>

                {{-- Actions --}}
                @if($deletionRequest->isPending())
                <div class="col-md-6">
                    <div class="card shadow-sm border-success h-100">
                        <div class="card-header fw-semibold text-success">Setujui Permintaan</div>
                        <div class="card-body">
                            <form action="{{ route('admin.data-privacy.approve', $deletionRequest) }}"
                                  method="POST"
                                  onsubmit="return confirm('Setujui penghapusan akun ini? Akun akan dianonimkan permanen.')">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label small">Catatan (opsional)</label>
                                    <textarea name="admin_note" class="form-control form-control-sm" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm w-100">
                                    <i class="bi bi-check-circle me-1"></i>Setujui &amp; Anonimkan
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="card shadow-sm border-danger mt-3">
                        <div class="card-header fw-semibold text-danger">Tolak Permintaan</div>
                        <div class="card-body">
                            <form action="{{ route('admin.data-privacy.reject', $deletionRequest) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label small">Alasan penolakan <span class="text-danger">*</span></label>
                                    <textarea name="admin_note" class="form-control form-control-sm" rows="3" required></textarea>
                                    @error('admin_note')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-danger btn-sm w-100">
                                    <i class="bi bi-x-circle me-1"></i>Tolak Permintaan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            {{-- Consent audit log --}}
            <div class="card shadow-sm">
                <div class="card-header fw-semibold">
                    <i class="bi bi-journal-text me-2 text-primary"></i>Log Riwayat Privasi
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Aksi</th>
                                <th>Metadata</th>
                                <th>IP</th>
                                <th>Dilakukan oleh</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($consentLogs as $log)
                            <tr>
                                <td><span class="badge bg-secondary">{{ $log->action }}</span></td>
                                <td class="small text-muted" style="max-width:250px">
                                    {{ $log->metadata ? json_encode($log->metadata, JSON_UNESCAPED_UNICODE) : '-' }}
                                </td>
                                <td class="small text-muted">{{ $log->ip_address ?? '-' }}</td>
                                <td class="small">{{ $log->performer?->name ?? '-' }}</td>
                                <td class="small text-muted">{{ $log->created_at->format('d M Y H:i:s') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-3">Belum ada log.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
