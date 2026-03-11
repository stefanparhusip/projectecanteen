@extends('layouts.app')
@section('title', 'Promosi & Diskon')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-bold mb-0">Promosi & Diskon</h5>
        <p class="text-muted small mb-0">Kelola bundle combo dan happy hour</p>
    </div>
    <a href="{{ route('admin.promotions.create') }}" class="btn btn-sm fw-semibold"
       style="background:#f97316;color:#fff">
        <i class="bi bi-plus-lg me-1"></i> Tambah Promosi
    </a>
</div>

<div class="card border-0 shadow-sm rounded-3">
    @if($promotions->isEmpty())
        <div class="card-body text-center py-5 text-muted">
            <i class="bi bi-tag display-5 opacity-25 d-block mb-2"></i>
            Belum ada promosi. Buat promosi pertama!
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-3">Nama</th>
                        <th>Tipe</th>
                        <th>Diskon</th>
                        <th>Prioritas</th>
                        <th>Periode</th>
                        <th>Status</th>
                        <th class="text-end pe-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($promotions as $promo)
                    <tr class="{{ $promo->trashed() ? 'table-secondary opacity-50' : '' }}">
                        <td class="ps-3 fw-semibold small">
                            {{ $promo->name }}
                            @if($promo->stackable)
                                <span class="badge bg-info text-dark ms-1 small">Stackable</span>
                            @endif
                        </td>
                        <td>
                            @if($promo->type === 'bundle')
                                <span class="badge bg-primary">Bundle</span>
                            @else
                                <span class="badge bg-warning text-dark">Happy Hour</span>
                            @endif
                        </td>
                        <td class="small fw-semibold">
                            @if($promo->discount_type === 'percentage')
                                {{ number_format($promo->discount_value, 0) }}%
                            @else
                                Rp {{ number_format($promo->discount_value, 0, ',', '.') }}
                            @endif
                        </td>
                        <td class="small">{{ $promo->priority }}</td>
                        <td class="small text-muted">
                            @if($promo->start_at || $promo->end_at)
                                {{ $promo->start_at?->format('d M Y') ?? '∞' }}
                                – {{ $promo->end_at?->format('d M Y') ?? '∞' }}
                            @else
                                <span class="text-muted">Selamanya</span>
                            @endif
                        </td>
                        <td>
                            @if($promo->trashed())
                                <span class="badge bg-secondary">Dihapus</span>
                            @elseif($promo->active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-secondary">Nonaktif</span>
                            @endif
                        </td>
                        <td class="text-end pe-3">
                            @if(! $promo->trashed())
                                {{-- Toggle active --}}
                                <form action="{{ route('admin.promotions.toggle', $promo) }}"
                                      method="POST" class="d-inline">
                                    @csrf @method('PATCH')
                                    <button type="submit"
                                            class="btn btn-sm {{ $promo->active ? 'btn-outline-secondary' : 'btn-outline-success' }}"
                                            title="{{ $promo->active ? 'Nonaktifkan' : 'Aktifkan' }}">
                                        <i class="bi {{ $promo->active ? 'bi-pause' : 'bi-play' }}"></i>
                                    </button>
                                </form>
                                <a href="{{ route('admin.promotions.edit', $promo) }}"
                                   class="btn btn-sm btn-outline-primary ms-1" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.promotions.destroy', $promo) }}"
                                      method="POST" class="d-inline ms-1">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Hapus promosi ini?')" title="Hapus">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($promotions->hasPages())
            <div class="card-footer bg-white border-0">
                {{ $promotions->links() }}
            </div>
        @endif
    @endif
</div>
@endsection
