@extends('layouts.app')
@section('title', 'Jadwal Pesanan Otomatis')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
    <h5 class="fw-bold mb-0">
        <i class="bi bi-calendar-week me-2" style="color:#f97316"></i>
        Jadwal Pesanan Otomatis
    </h5>
    <a href="{{ route('user.recurring.create') }}" class="btn btn-sm btn-primary rounded-pill">
        <i class="bi bi-plus-lg me-1"></i> Tambah Jadwal
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
    </div>
@endif

@if($recurringOrders->isEmpty())
    <div class="text-center py-5 text-muted">
        <i class="bi bi-calendar-x fs-1 d-block mb-2"></i>
        Belum ada jadwal. <a href="{{ route('user.recurring.create') }}">Tambah jadwal pertama Anda!</a>
    </div>
@else
<div class="d-flex flex-column gap-3">
    @foreach($recurringOrders as $ro)
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">
            <div class="d-flex align-items-start justify-content-between flex-wrap gap-2">
                <div>
                    <div class="fw-semibold">{{ $ro->menu->name }}</div>
                    <div class="text-muted small mt-1">
                        <i class="bi bi-calendar3 me-1"></i> {{ $ro->day_name }}
                        &nbsp;·&nbsp;
                        <i class="bi bi-alarm me-1"></i> {{ $ro->breakTime->label }}
                        &nbsp;·&nbsp;
                        <i class="bi bi-bag me-1"></i> {{ $ro->qty }} porsi
                    </div>
                    @if($ro->last_run_at)
                    <div class="text-muted small">
                        <i class="bi bi-check-circle me-1 text-success"></i>
                        Terakhir dijalankan: {{ $ro->last_run_at->format('d M Y, H:i') }}
                    </div>
                    @endif
                </div>
                <span class="badge rounded-pill {{ $ro->is_active ? 'bg-success' : 'bg-secondary' }} px-3 py-2">
                    {{ $ro->is_active ? 'Aktif' : 'Nonaktif' }}
                </span>
            </div>

            <div class="d-flex gap-2 mt-3 pt-2 border-top">
                <form method="POST" action="{{ route('user.recurring.toggle', $ro) }}">
                    @csrf @method('PATCH')
                    <button type="submit"
                            class="btn btn-sm {{ $ro->is_active ? 'btn-outline-warning' : 'btn-outline-success' }} rounded-pill">
                        <i class="bi {{ $ro->is_active ? 'bi-pause-circle' : 'bi-play-circle' }} me-1"></i>
                        {{ $ro->is_active ? 'Nonaktifkan' : 'Aktifkan' }}
                    </button>
                </form>
                <form method="POST" action="{{ route('user.recurring.destroy', $ro) }}"
                      onsubmit="return confirm('Hapus jadwal ini?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill">
                        <i class="bi bi-trash me-1"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
