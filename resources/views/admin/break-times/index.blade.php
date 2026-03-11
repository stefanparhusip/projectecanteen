@extends('layouts.app')
@section('title', 'Waktu Istirahat')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <h5 class="fw-bold mb-0">Jadwal Waktu Istirahat</h5>
    <a href="{{ route('admin.break-times.create') }}" class="btn fw-semibold"
       style="background:#f97316;color:#fff">
        <i class="bi bi-plus-lg me-1"></i>Tambah Jadwal
    </a>
</div>

<div class="row g-3">
    @forelse($breakTimes as $bt)
    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                     style="width:52px;height:52px;background:#fff7ed">
                    <i class="bi bi-alarm fs-4" style="color:#f97316"></i>
                </div>
                <div class="flex-grow-1">
                    <div class="fw-bold">{{ $bt->label }}</div>
                    <div class="small text-muted">
                        Istirahat:
                        {{ \Carbon\Carbon::parse($bt->start_time)->format('H:i') }} –
                        {{ \Carbon\Carbon::parse($bt->end_time)->format('H:i') }}
                    </div>
                    <div class="small text-danger">
                        <i class="bi bi-exclamation-circle me-1"></i>Deadline order:
                        {{ \Carbon\Carbon::parse($bt->order_deadline)->format('H:i') }}
                    </div>
                </div>
                <div class="d-flex gap-1">
                    <a href="{{ route('admin.break-times.edit', $bt) }}"
                       class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('admin.break-times.destroy', $bt) }}" method="POST"
                          onsubmit="return confirm('Hapus jadwal ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5 text-muted">
        <i class="bi bi-clock fs-1 d-block mb-2"></i>
        Belum ada jadwal istirahat.
    </div>
    @endforelse
</div>
@endsection
