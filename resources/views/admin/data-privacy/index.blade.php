@extends('layouts.app')

@section('title', 'Antrian Privasi Data')

@section('content')
<div class="container-fluid py-4">

    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h4 class="mb-0 fw-semibold"><i class="bi bi-shield-lock me-2 text-danger"></i>Antrian Privasi Data</h4>
            <small class="text-muted">Tinjau &amp; proses permintaan penghapusan akun (GDPR / UU PDP).</small>
        </div>
    </div>

    {{-- Stats --}}
    <div class="row g-3 mb-4">
        @foreach([
            ['label' => 'Menunggu',      'key' => 'pending',      'color' => 'warning'],
            ['label' => 'Ditinjau',      'key' => 'under_review', 'color' => 'info'],
            ['label' => 'Disetujui',     'key' => 'approved',     'color' => 'primary'],
            ['label' => 'Selesai',       'key' => 'completed',    'color' => 'success'],
        ] as $stat)
        <div class="col-sm-6 col-md-3">
            <div class="card border-{{ $stat['color'] }} shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="fs-2 fw-bold text-{{ $stat['color'] }}">{{ $counts[$stat['key']] }}</div>
                    <div class="small text-muted">{{ $stat['label'] }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Filter --}}
    <div class="mb-3 d-flex gap-2 flex-wrap">
        @foreach(['pending' => 'Menunggu', 'under_review' => 'Ditinjau', 'approved' => 'Disetujui', 'rejected' => 'Ditolak', 'completed' => 'Selesai', 'all' => 'Semua'] as $key => $label)
            <a href="{{ route('admin.data-privacy.index', ['status' => $key]) }}"
               class="btn btn-sm {{ $status === $key ? 'btn-primary' : 'btn-outline-secondary' }}">
                {{ $label }}
            </a>
        @endforeach
    </div>

    {{-- Table --}}
    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Alasan</th>
                        <th>Ditinjau oleh</th>
                        <th>Diajukan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($requests as $dr)
                    <tr>
                        <td class="text-muted small">{{ $dr->id }}</td>
                        <td>
                            <div class="fw-semibold">{{ $dr->user?->name ?? 'Dihapus' }}</div>
                            <div class="text-muted small">{{ $dr->user?->email ?? '-' }}</div>
                        </td>
                        <td>
                            @php
                                $cls = match($dr->status) {
                                    'pending'      => 'warning',
                                    'under_review' => 'info',
                                    'approved'     => 'primary',
                                    'rejected'     => 'danger',
                                    'completed'    => 'success',
                                    default        => 'secondary',
                                };
                            @endphp
                            <span class="badge bg-{{ $cls }}">{{ $dr->status }}</span>
                        </td>
                        <td class="small text-muted" style="max-width:200px">
                            {{ Str::limit($dr->reason, 80) ?? '-' }}
                        </td>
                        <td class="small">{{ $dr->reviewer?->name ?? '-' }}</td>
                        <td class="small text-muted">{{ $dr->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <a href="{{ route('admin.data-privacy.show', $dr) }}"
                               class="btn btn-xs btn-outline-primary">Detail</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">Tidak ada permintaan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($requests->hasPages())
            <div class="card-footer">{{ $requests->links() }}</div>
        @endif
    </div>

</div>
@endsection
