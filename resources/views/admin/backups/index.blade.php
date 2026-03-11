@extends('layouts.app')
@section('title', 'Manajemen Backup')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Manajemen Backup Database</h5>
        <p class="text-muted small mb-0">Backup terenkripsi (AES-256-CBC) — retensi 14/30/90 hari</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.restore-requests.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-clockwise me-1"></i>Permintaan Restore
        </a>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalBackup">
            <i class="bi bi-cloud-upload me-1"></i>Buat Backup
        </button>
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

{{-- Backup List --}}
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
        <h6 class="fw-semibold mb-0">
            <i class="bi bi-archive me-1"></i>
            Daftar Backup
            <span class="badge bg-secondary ms-1">{{ $backups->total() }}</span>
        </h6>
    </div>
    <div class="card-body p-0 pt-2">
        @if($backups->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-database-slash fs-1 d-block mb-2"></i>
                Belum ada backup. Klik "Buat Backup" untuk memulai.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Filename</th>
                        <th class="text-end">Ukuran</th>
                        <th class="text-center">Retensi</th>
                        <th>Kedaluwarsa</th>
                        <th>Dibuat</th>
                        <th>Checksum (SHA-256)</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($backups as $backup)
                    <tr class="{{ $backup->isExpired() ? 'table-warning' : '' }}">
                        <td class="text-muted small">{{ $backup->id }}</td>
                        <td class="font-monospace small">{{ $backup->filename }}</td>
                        <td class="text-end small">{{ $backup->human_size }}</td>
                        <td class="text-center">
                            <span class="badge bg-{{ $backup->retention_days === 14 ? 'warning text-dark' : ($backup->retention_days === 90 ? 'success' : 'primary') }}">
                                {{ $backup->retention_days }}h
                            </span>
                        </td>
                        <td class="small {{ $backup->isExpired() ? 'text-danger fw-semibold' : '' }}">
                            {{ $backup->expires_at->format('d M Y') }}
                            @if($backup->isExpired()) <span class="badge bg-danger">Kedaluwarsa</span> @endif
                        </td>
                        <td class="small">{{ $backup->created_at->format('d M Y H:i') }}</td>
                        <td class="font-monospace" style="font-size:0.65rem;max-width:120px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap"
                            title="{{ $backup->checksum }}">
                            {{ substr($backup->checksum ?? '', 0, 16) }}…
                        </td>
                        <td class="text-end text-nowrap">
                            <a href="{{ route('admin.backups.download', $backup) }}"
                               class="btn btn-sm btn-outline-primary me-1"
                               title="Unduh backup terenkripsi">
                                <i class="bi bi-download"></i>
                            </a>
                            <button type="button"
                                    class="btn btn-sm btn-outline-success me-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalRestore"
                                    data-backup-id="{{ $backup->id }}"
                                    data-backup-name="{{ $backup->filename }}"
                                    title="Ajukan permintaan restore">
                                <i class="bi bi-arrow-counterclockwise"></i>
                            </button>
                            <form action="{{ route('admin.backups.destroy', $backup) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Hapus backup #{{ $backup->id }}? File terenkripsi juga akan dihapus permanen.')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" title="Hapus backup">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3">{{ $backups->links() }}</div>
        @endif
    </div>
</div>

{{-- Recent Restore Requests --}}
@if($restoreRequests->isNotEmpty())
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
        <h6 class="fw-semibold mb-0">
            <i class="bi bi-clock-history me-1"></i>Permintaan Restore Terbaru
        </h6>
    </div>
    <div class="card-body p-0 pt-2">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Backup</th>
                        <th>Diminta oleh</th>
                        <th>Status</th>
                        <th>Alasan</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($restoreRequests as $req)
                    <tr>
                        <td class="text-muted">{{ $req->id }}</td>
                        <td class="font-monospace" style="font-size:0.7rem">{{ $req->backup?->filename ?? '—' }}</td>
                        <td>{{ $req->requester?->name ?? '—' }}</td>
                        <td>
                            @php
                                $badge = match($req->status) {
                                    'pending'     => 'warning text-dark',
                                    'approved'    => 'primary',
                                    'in_progress' => 'info',
                                    'completed'   => 'success',
                                    'rejected','failed' => 'danger',
                                    default       => 'secondary',
                                };
                            @endphp
                            <span class="badge bg-{{ $badge }}">{{ $req->status }}</span>
                        </td>
                        <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">
                            {{ $req->reason }}
                        </td>
                        <td>{{ $req->created_at->format('d M H:i') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

{{-- Modal: Create Backup --}}
<div class="modal fade" id="modalBackup" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.backups.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">
                        <i class="bi bi-cloud-upload me-2"></i>Buat Backup Baru
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Kebijakan Retensi</label>
                        <select name="retention_days" class="form-select" required>
                            <option value="14">14 hari (short-term)</option>
                            <option value="30" selected>30 hari (standar)</option>
                            <option value="90">90 hari (long-term)</option>
                        </select>
                        <div class="form-text">Backup akan dihapus otomatis setelah masa retensi berakhir.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Catatan (opsional)</label>
                        <input type="text" name="note" class="form-control" placeholder="e.g. Pre-deployment backup" maxlength="255">
                    </div>
                    <div class="alert alert-info small mb-0">
                        <i class="bi bi-shield-lock me-1"></i>
                        Backup dienkripsi dengan AES-256-CBC menggunakan APP_KEY aplikasi.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-cloud-upload me-1"></i>Mulai Backup
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal: Request Restore --}}
<div class="modal fade" id="modalRestore" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.restore-requests.store') }}" method="POST">
                @csrf
                <input type="hidden" name="backup_id" id="restoreBackupId">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i>Ajukan Permintaan Restore
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted small mb-3">
                        Backup: <span class="font-monospace fw-semibold" id="restoreBackupName"></span>
                    </p>
                    <div class="alert alert-warning small">
                        <i class="bi bi-exclamation-triangle-fill me-1"></i>
                        Restore akan <strong>menimpa seluruh data saat ini</strong>. Permintaan ini memerlukan
                        persetujuan super admin dan eksekusi manual via CLI.
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Alasan Restore <span class="text-danger">*</span></label>
                        <textarea name="reason" class="form-control" rows="3" required maxlength="1000"
                                  placeholder="Jelaskan mengapa restore diperlukan…"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning fw-semibold">
                        <i class="bi bi-arrow-counterclockwise me-1"></i>Ajukan Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.getElementById('modalRestore').addEventListener('show.bs.modal', function(e) {
    const btn = e.relatedTarget;
    document.getElementById('restoreBackupId').value   = btn.dataset.backupId;
    document.getElementById('restoreBackupName').textContent = btn.dataset.backupName;
});
</script>
@endpush
