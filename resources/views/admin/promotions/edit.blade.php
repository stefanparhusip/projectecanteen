@extends('layouts.app')
@section('title', 'Edit Promosi')

@section('content')

<div class="d-flex align-items-center gap-2 mb-4">
    <a href="{{ route('admin.promotions.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left"></i>
    </a>
    <div>
        <h5 class="fw-bold mb-0">Edit Promosi</h5>
        <p class="text-muted small mb-0">{{ $promotion->name }}</p>
    </div>
</div>

<div class="row justify-content-center">
<div class="col-lg-7">
<div class="card border-0 shadow-sm rounded-3">
<div class="card-body p-4">

@php
    $params       = $promotion->params ?? [];
    $bundleMin    = $params['min_items'] ?? 2;
    $bundleMenus  = $params['menu_ids']  ?? [];
    $timeDays     = $params['days']       ?? range(0, 6);
    $timeStart    = $params['start_time'] ?? '07:00';
    $timeEnd      = $params['end_time']   ?? '10:00';
@endphp

<form action="{{ route('admin.promotions.update', $promotion) }}" method="POST" id="promoForm">
    @csrf @method('PUT')

    {{-- Name --}}
    <div class="mb-3">
        <label class="form-label fw-semibold">Nama Promosi <span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $promotion->name) }}" required>
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    {{-- Type (read-only) --}}
    <div class="mb-3">
        <label class="form-label fw-semibold">Tipe Promosi</label>
        <input type="hidden" name="type" value="{{ $promotion->type }}">
        <input type="text" class="form-control bg-light" readonly
               value="{{ $promotion->type === 'bundle' ? 'Bundle (Combo Items)' : 'Happy Hour (Berdasarkan Waktu)' }}">
        <div class="form-text">Tipe tidak dapat diubah setelah dibuat.</div>
    </div>

    {{-- Bundle fields --}}
    <div id="bundleFields" class="{{ $promotion->type !== 'bundle' ? 'd-none' : '' }}">
        <div class="alert alert-info py-2 small mb-3">
            <i class="bi bi-info-circle me-1"></i>
            Bundle berlaku saat total kuantitas item yang memenuhi syarat &ge; nilai minimum.
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Minimum Item</label>
            <input type="number" name="bundle_min_items"
                   class="form-control @error('bundle_min_items') is-invalid @enderror"
                   value="{{ old('bundle_min_items', $bundleMin) }}" min="2" max="20">
            @error('bundle_min_items') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Menu yang Berlaku (kosongkan = semua menu)</label>
            <select name="bundle_menu_ids[]" class="form-select" multiple size="6">
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}"
                        {{ in_array($menu->id, old('bundle_menu_ids', $bundleMenus)) ? 'selected' : '' }}>
                        {{ $menu->name }} — Rp {{ number_format($menu->price, 0, ',', '.') }}
                    </option>
                @endforeach
            </select>
            <div class="form-text">Tahan Ctrl/Cmd untuk pilih beberapa. Kosong = berlaku untuk semua menu.</div>
        </div>
    </div>

    {{-- Time / Happy Hour fields --}}
    <div id="timeFields" class="{{ $promotion->type !== 'time' ? 'd-none' : '' }}">
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
                               {{ in_array($idx, old('time_days', $timeDays)) ? 'checked' : '' }}>
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
                       value="{{ old('time_start', $timeStart) }}">
                @error('time_start') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label class="form-label fw-semibold">Jam Selesai</label>
                <input type="time" name="time_end"
                       class="form-control @error('time_end') is-invalid @enderror"
                       value="{{ old('time_end', $timeEnd) }}">
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
                <option value="percentage" {{ old('discount_type', $promotion->discount_type) === 'percentage' ? 'selected' : '' }}>
                    Persentase (%)
                </option>
                <option value="fixed" {{ old('discount_type', $promotion->discount_type) === 'fixed' ? 'selected' : '' }}>
                    Nominal Tetap (Rp)
                </option>
            </select>
            @error('discount_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-sm-7">
            <label class="form-label fw-semibold">Nilai Diskon <span class="text-danger">*</span></label>
            <input type="number" name="discount_value" step="0.01" min="0"
                   class="form-control @error('discount_value') is-invalid @enderror"
                   value="{{ old('discount_value', $promotion->discount_value) }}" required>
            @error('discount_value') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    {{-- Priority + Stackable --}}
    <div class="row g-3 mb-3">
        <div class="col-sm-6">
            <label class="form-label fw-semibold">Prioritas</label>
            <input type="number" name="priority" min="0" max="255"
                   class="form-control @error('priority') is-invalid @enderror"
                   value="{{ old('priority', $promotion->priority) }}">
            @error('priority') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-sm-6 d-flex align-items-center pt-4">
            <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" name="stackable"
                       id="stackable" value="1"
                       {{ old('stackable', $promotion->stackable) ? 'checked' : '' }}>
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
                   value="{{ old('start_at', $promotion->start_at?->format('Y-m-d')) }}">
            @error('start_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="col-sm-6">
            <label class="form-label fw-semibold">Berlaku Hingga</label>
            <input type="date" name="end_at"
                   class="form-control @error('end_at') is-invalid @enderror"
                   value="{{ old('end_at', $promotion->end_at?->format('Y-m-d')) }}">
            @error('end_at') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    {{-- Active toggle --}}
    <div class="mb-4">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="active"
                   id="active" value="1"
                   {{ old('active', $promotion->active) ? 'checked' : '' }}>
            <label class="form-check-label fw-semibold" for="active">Aktifkan Promosi</label>
        </div>
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn fw-semibold" style="background:#f97316;color:#fff">
            <i class="bi bi-check-lg me-1"></i> Simpan Perubahan
        </button>
        <a href="{{ route('admin.promotions.index') }}" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>

</div>
</div>
</div>
</div>
@endsection
