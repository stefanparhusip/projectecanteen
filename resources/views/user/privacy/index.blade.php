@extends('layouts.app')

@section('title', 'Privasi Data Saya')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="d-flex align-items-center mb-4">
                <i class="bi bi-shield-lock fs-3 text-primary me-3"></i>
                <div>
                    <h4 class="mb-0 fw-semibold">Privasi &amp; Data Saya</h4>
                    <small class="text-muted">Kelola data pribadi, ekspor &amp; permintaan penghapusan akun.</small>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- ── Data Export ─────────────────────────────── --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white fw-semibold">
                    <i class="bi bi-download me-2 text-success"></i>Ekspor Data Saya
                </div>
                <div class="card-body">
                    <p class="text-muted small mb-3">
                        Unduh salinan semua data pribadi, riwayat pesanan, dan transaksi saldo Anda.
                        File akan tersedia selama <strong>48 jam</strong>.
                    </p>

                    <form action="{{ route('user.privacy.export') }}" method="POST" class="row g-2 align-items-center mb-3">
                        @csrf
                        <div class="col-auto">
                            <select name="format" class="form-select form-select-sm">
                                <option value="json">JSON</option>
                                <option value="csv">CSV</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-sm btn-success">
                                <i class="bi bi-cloud-download me-1"></i>Minta Ekspor
                            </button>
                        </div>
                    </form>

                    @if($exports->isNotEmpty())
                        <div class="table-responsive">
                            <table class="table table-sm table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Format</th>
                                        <th>Status</th>
                                        <th>Ukuran</th>
                                        <th>Berlaku sampai</th>
                                        <th>Tanggal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($exports as $exp)
                                    <tr>
                                        <td><span class="badge bg-secondary">{{ strtoupper($exp->format) }}</span></td>
                                        <td>
                                            @php
                                                $badgeClass = match($exp->status) {
                                                    'ready'       => 'success',
                                                    'processing'  => 'warning',
                                                    'pending'     => 'secondary',
                                                    'downloaded'  => 'info',
                                                    'expired','failed' => 'danger',
                                                    default       => 'secondary',
                                                };
                                            @endphp
                                            <span class="badge bg-{{ $badgeClass }}">{{ $exp->status }}</span>
                                        </td>
                                        <td>{{ $exp->file_size ? number_format($exp->file_size / 1024, 1) . ' KB' : '-' }}</td>
                                        <td class="small">{{ $exp->expires_at?->format('d M Y H:i') ?? '-' }}</td>
                                        <td class="small text-muted">{{ $exp->created_at->format('d M Y H:i') }}</td>
                                        <td>
                                            @if($exp->isDownloadable())
                                                <a href="{{ route('user.privacy.export.download', $exp) }}"
                                                   class="btn btn-xs btn-outline-success">
                                                    <i class="bi bi-download"></i> Unduh
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted small mb-0">Belum ada permintaan ekspor.</p>
                    @endif
                </div>
            </div>

            {{-- ── Deletion / Right to be Forgotten ───────── --}}
            <div class="card shadow-sm border-danger">
                <div class="card-header bg-white fw-semibold text-danger">
                    <i class="bi bi-trash3 me-2"></i>Hapus Akun (Right to be Forgotten)
                </div>
                <div class="card-body">
                    @if($activeDeletion)
                        <div class="alert alert-warning mb-3">
                            <strong>Permintaan aktif:</strong>
                            Status permintaan penghapusan Anda saat ini adalah
                            <span class="badge bg-warning text-dark">{{ $activeDeletion->status }}</span>
                            (diajukan {{ $activeDeletion->created_at->diffForHumans() }}).
                        </div>

                        @if($activeDeletion->isPending())
                            <form action="{{ route('user.privacy.deletion.cancel', $activeDeletion) }}"
                                  method="POST"
                                  onsubmit="return confirm('Batalkan permintaan penghapusan akun?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-x-circle me-1"></i>Batalkan Permintaan
                                </button>
                            </form>
                        @endif
                    @else
                        <p class="text-muted small mb-3">
                            Setelah disetujui, <strong>semua data pribadi Anda akan dianonimkan secara permanen</strong>
                            dan akun Anda tidak dapat diakses lagi. Riwayat transaksi tetap disimpan secara anonim
                            untuk keperluan akuntansi.
                        </p>

                        <form action="{{ route('user.privacy.deletion') }}" method="POST"
                              onsubmit="return confirm('Yakin ingin mengajukan permintaan penghapusan akun? Tindakan ini tidak dapat dibatalkan setelah disetujui admin.')">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Alasan (opsional)</label>
                                <textarea name="reason" class="form-control form-control-sm" rows="3"
                                          placeholder="Jelaskan mengapa Anda ingin menghapus akun..."></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="confirm" value="1" id="confirmDeletion">
                                <label class="form-check-label small" for="confirmDeletion">
                                    Saya memahami bahwa penghapusan akun bersifat permanen dan tidak dapat dipulihkan.
                                </label>
                                @error('confirm')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-exclamation-triangle me-1"></i>Ajukan Penghapusan Akun
                            </button>
                        </form>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
