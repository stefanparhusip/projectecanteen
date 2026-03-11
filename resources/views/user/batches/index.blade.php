@extends('layouts.app')
@section('title', 'Pesan Bareng (Batch)')

@section('content')

{{-- Flash messages --}}
@foreach(['success','error','info'] as $type)
@if(session($type))
<div class="alert alert-{{ $type === 'error' ? 'danger' : $type }} alert-dismissible fade show border-0 shadow-sm rounded-3 mb-3" role="alert">
    {!! session($type) !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
@endforeach

<div class="row g-3">

    {{-- ── Left: My Batches ──────────────────────────────────── --}}
    <div class="col-lg-8">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="fw-bold mb-0"><i class="bi bi-people me-2 text-primary"></i>Pesan Bareng</h5>
        </div>

        @forelse($myBatches as $batch)
        @php
            $iAmCreator = $batch->created_by_user_id === auth()->id();
            $myMember   = $batch->members->firstWhere('user_id', auth()->id());
        @endphp
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between flex-wrap gap-2">
                    <div>
                        <div class="fw-bold">{{ $batch->class_name }}</div>
                        <div class="text-muted small">
                            <i class="bi bi-clock me-1"></i>{{ $batch->breakTime->label }}
                            &nbsp;·&nbsp;
                            <i class="bi bi-people me-1"></i>{{ $batch->members->count() }} anggota
                            &nbsp;·&nbsp;
                            <i class="bi bi-person me-1"></i>{{ $batch->createdBy->name }}
                        </div>
                        @if($batch->isOpen())
                        <div class="mt-1">
                            <span class="badge bg-light text-dark border font-monospace small">
                                Kode: <strong>{{ $batch->code }}</strong>
                                <button class="btn btn-link btn-sm p-0 ms-1 text-secondary copy-code"
                                        data-code="{{ $batch->code }}" title="Salin kode">
                                    <i class="bi bi-clipboard"></i>
                                </button>
                            </span>
                        </div>
                        @endif
                    </div>
                    <div class="text-end">
                        <span class="badge bg-{{ $batch->status_color }}">{{ $batch->status_label }}</span>
                        @if($myMember)
                        <div class="small text-muted mt-1">
                            Subtotal Saya: <strong style="color:#f97316">Rp {{ number_format($myMember->subtotal, 0, ',', '.') }}</strong>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="mt-3 d-flex gap-2 flex-wrap">
                    <a href="{{ route('user.batches.show', $batch) }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-eye me-1"></i>Lihat Detail
                    </a>
                    @if($batch->isLocked() && $iAmCreator)
                    <a href="{{ route('user.batches.checkout', $batch) }}" class="btn btn-sm btn-success">
                        <i class="bi bi-cash-coin me-1"></i>Checkout
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body text-center py-5 text-muted">
                <i class="bi bi-people fs-1 d-block mb-2"></i>
                Belum ada batch. Buat batch baru atau bergabung dengan kode dari teman.
            </div>
        </div>
        @endforelse
    </div>

    {{-- ── Right: Create + Join ───────────────────────────────── --}}
    <div class="col-lg-4">

        {{-- Join by code --}}
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-key me-2 text-warning"></i>Gabung dengan Kode</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('user.batches.join.code') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="code" class="form-control text-uppercase font-monospace fw-bold"
                               placeholder="ABCDEF" maxlength="8" autocomplete="off"
                               style="letter-spacing:.2em" required>
                        <button class="btn btn-warning" type="submit">
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                    <div class="form-text">Masukkan kode 6 huruf yang dikirim temanmu.</div>
                </form>
            </div>
        </div>

        {{-- Create new batch --}}
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-plus-circle me-2 text-success"></i>Buat Batch Baru</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('user.batches.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nama Kelas / Grup</label>
                        <input type="text" name="class_name" class="form-control"
                               placeholder="mis. XII IPA 1, Guru Lantai 2…"
                               value="{{ old('class_name') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Slot Istirahat</label>
                        <select name="break_time_id" class="form-select" required>
                            <option value="">-- Pilih slot --</option>
                            @foreach($breakTimes as $bt)
                            <option value="{{ $bt->id }}" {{ old('break_time_id') == $bt->id ? 'selected' : '' }}>
                                {{ $bt->label }} ({{ \Carbon\Carbon::parse($bt->getRawOriginal('start_time'))->format('H:i') }})
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Catatan <span class="text-muted">(opsional)</span></label>
                        <input type="text" name="note" class="form-control"
                               placeholder="mis. minta pisahkan sambal…"
                               value="{{ old('note') }}" maxlength="255">
                    </div>
                    <button type="submit" class="btn btn-success w-100">
                        <i class="bi bi-plus-lg me-1"></i>Buat Batch
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
document.querySelectorAll('.copy-code').forEach(btn => {
    btn.addEventListener('click', function () {
        navigator.clipboard?.writeText(this.dataset.code);
        const icon = this.querySelector('i');
        icon.className = 'bi bi-clipboard-check text-success';
        setTimeout(() => icon.className = 'bi bi-clipboard', 2000);
    });
});
</script>
@endsection
