@extends('layouts.app')
@section('title', 'Tambah Promosi')

@section('content')

<div class="d-flex align-items-center gap-2 mb-4">
    <a href="{{ route('admin.promotions.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div>
        <h5 class="fw-bold mb-0">Tambah Promosi</h5>
        <p class="text-muted small mb-0">Buat promosi bundle atau happy hour baru</p>
    </div>
</div>

<div class="row justify-content-center">
<div class="col-lg-7">
<div class="card border-0 shadow-sm rounded-3">
<div class="card-body p-4">

<form action="{{ route('admin.promotions.store') }}" method="POST" id="promoForm">
    @csrf

    {{-- Name --}}
    <div class="mb-3">
        <label class="form-label fw-semibold">Nama Promosi <span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name') }}" placeholder="cth: Bundle Hemat 2 Item" required>
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    {{-- Type --}}
    <div class="mb-3">
        <label class="form-label fw-semibold">Tipe Promosi <span class="text-danger">*</span></label>
        <select name="type" id="promoType" class="form-select @error('type') is-invalid @enderror"
                onchange="toggleTypeFields()" required>
            <option value="">-- Pilih Tipe --</option>
            <option value="bundle" {{ old('type') === 'bundle' ? 'selected' : '' }}>
                Bundle (Combo Items)
            </option>
            <option value="time" {{ old('type') === 'time' ? 'selected' : '' }}>
                Happy Hour (Berdasarkan Waktu)
            </option>
        </select>
        @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="form-text text-muted">
            <b>Bundle</b>: diskon saat membeli beberapa item sekaligus.<br>
            <b>Happy Hour</b>: diskon otomatis pada jam/hari tertentu.
        </div>
    </div>

    {{-- Bundle fields --}}
    <div id="bundleFields" class="d-none">
        <div class="alert alert-info py-2 small mb-3">
            <i class="bi bi-info-circle me-1"></i>
            Bundle berlaku saat total kuantitas item yang memenuhi syarat &ge; nilai minimum.
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Minimum Item</label>
            <input type="number" name="bundle_min_items"
                   class="form-control @error('bundle_min_items') is-invalid @enderror"
                   value="{{ old('bundle_min_items', 2) }}" min="2" max="20">
            @error('bundle_min_items') <div class="invalid-feedback">{{ $message }}</div> @enderror
            <div class="form-text">Biarkan 2 untuk "beli 2 dapat diskon".</div>
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Menu yang Berlaku (kosongkan = semua menu)</label>
            <select name="bundle_menu_ids[]" class="form-select @error('bundle_menu_ids') is-invalid @enderror"
                    multiple size="6">
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}"
                        {{ in_array($menu->id, old('bundle_menu_ids', [])) ? 'selected' : '' }}>
                        {{ $menu->name }} — Rp {{ number_format($menu->price, 0, ',', '.') }}
                    </option>
                @endforeach
            </select>
            @error('bundle_menu_ids') <div class="invalid-feedback">{{ $message }}</div> @enderror
            <div class="form-text">Tahan Ctrl/Cmd untuk pilih beberapa. Kosong = berlaku untuk semua menu.</div>
        </div>
    </div>

    {{-- Time / Happy Hour fields --}}
    <div id="timeFields" class="d-none">
        <div class="alert alert-info py-2 small mb-3">
            <i class="bi bi-info-circle me-1"></i>
            Happy Hour berlaku otomatis saat checkout dilakukan dalam rentang waktu yang ditentukan.
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Hari Berlaku</label>
            <div class="d-flex flex-wrap gap-2">
                @foreach(['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] as $idx => $dayName)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="time_days[]"
                               value="{{ $idx }}" id="day{{ $idx }}"
                               {{ in_array($idx, old('time_days', range(0,6))) ? 'checked' : '' }}>
                        <label class="form-check-label" for="day{{ $idx }}">{{ $dayName }}</label>
                    </div>
                @endforeach
            </div>
            @error('time_days') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
        </div>
        <div class="row g-3">
            <div class="col">
                <label class="form-label fw-semibold">Jam Mulai</label>
                <input type="time" name="time_start"
                       class="form-control @error('time_start') is-invalid @enderror"
                       value="{{ old('time_start', '07:00') }}">
                @error('time_start') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label class="form-label fw-semibold">Jam Selesai</label>
                <input type="time" name="time_end"
                       class="form-control @error('time_end') is-invalid @enderror"
                       value="{{ old('time_end', '10:00') }}">
                @error('time_end') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>

    <hr class="my-3">

    {{-- Discount --}}
    <div class="row g-3 mb-3">
        <div class="col-sm-5">
            <label class="form-label fw-semibold">Tipe Diskon <span class="text-danger">*</span></label>
            <select name="discount_type" class="form-select @error('discount_type') is-invalid @enderror" required>
                <option value="percentage" {{ old('discount_type', 'percentage') === 'percentage' ? 'selected' : '' }}>
                    Persentase (%)
                </option>
                <option value="fixed" {{ old('discount_type') === 'fixed' ? 'selected' : '' }}>
                    Nominal Tetap (Rp)
                </option>
            </select>
            @error('discount_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-sm-7">
            <label class="form-label fw-semibold">Nilai Diskon <span class="text-danger">*</span></label>
            <input type="number" name="discount_value" step="0.01" min="0"
                   class="form-control @error('discount_value') is-invalid @enderror"
                   value="{{ old('discount_value') }}" placeholder="cth: 10 atau 5000" required>
            @error('discount_value') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    {{-- Priority + Stackable --}}
    <div class="row g-3 mb-3">
        <div class="col-sm-6">
            <label class="form-label fw-semibold">Prioritas</label>
            <input type="number" name="priority" min="0" max="255"
                   class="form-control @error('priority') is-invalid @enderror"
                   value="{{ old('priority', 0) }}">
            @error('priority') <div class="invalid-feedback">{{ $message }}</div> @enderror
            <div class="form-text">Lebih tinggi = dievaluasi lebih dulu.</div>
        </div>
        <div class="col-sm-6 d-flex align-items-center pt-4">
            <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" name="stackable"
                       id="stackable" value="1"
                       {{ old('stackable') ? 'checked' : '' }}>
                <label class="form-check-label fw-semibold" for="stackable">
                    Bisa Digabung (Stackable)
                </label>
            </div>
        </div>
    </div>

    {{-- Date range --}}
    <div class="row g-3 mb-3">
        <div class="col-sm-6">
            <label class="form-label fw-semibold">Berlaku Mulai</label>
            <input type="date" name="start_at"
                   class="form-control @error('start_at') is-invalid @enderror"
                   value="{{ old('start_at') }}">
            @error('start_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
            <div class="form-text">Kosong = langsung berlaku.</div>
        </div>
        <div class="col-sm-6">
            <label class="form-label fw-semibold">Berlaku Hingga</label>
            <input type="date" name="end_at"
                   class="form-control @error('end_at') is-invalid @enderror"
                   value="{{ old('end_at') }}">
            @error('end_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
            <div class="form-text">Kosong = tidak ada batas waktu.</div>
        </div>
    </div>

    {{-- Active toggle --}}
    <div class="mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="active"
                   id="active" value="1"
                   {{ old('active', true) ? 'checked' : '' }}>
            <label class="form-check-label fw-semibold" for="active">Aktifkan Promosi</label>
        </div>
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn fw-semibold" style="background:#f97316;color:#fff">
            <i class="bi bi-check-lg me-1"></i> Simpan Promosi
        </button>
        <a href="{{ route('admin.promotions.index') }}" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>

</div>
</div>
</div>
</div>

<script>
function toggleTypeFields() {
    const type = document.getElementById('promoType').value;
    document.getElementById('bundleFields').classList.toggle('d-none', type !== 'bundle');
    document.getElementById('timeFields').classList.toggle('d-none', type !== 'time');
}
// Run on load for old() values
document.addEventListener('DOMContentLoaded', toggleTypeFields);
</script>
@endsection
