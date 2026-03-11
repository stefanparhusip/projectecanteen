@extends('layouts.app')
@section('title', 'Tambah Jadwal Pesanan Otomatis')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="d-flex align-items-center mb-3">
            <a href="{{ route('user.recurring.index') }}" class="btn btn-sm btn-light me-2 rounded-pill">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h5 class="fw-bold mb-0">
                <i class="bi bi-calendar-plus me-2" style="color:#f97316"></i>
                Tambah Jadwal Pesanan
            </h5>
        </div>

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        @endif

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body p-4">
                <form method="POST" action="{{ route('user.recurring.store') }}" novalidate>
                    @csrf

                    {{-- Menu --}}
                    <div class="mb-3">
                        <label for="menu_id" class="form-label fw-semibold">Menu</label>
                        <select id="menu_id" name="menu_id"
                                class="form-select @error('menu_id') is-invalid @enderror"
                                required>
                            <option value="">— Pilih menu —</option>
                            @foreach($menus as $menu)
                                <option value="{{ $menu->id }}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>
                                    {{ $menu->name }} — Rp {{ number_format($menu->price, 0, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                        @error('menu_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Jumlah --}}
                    <div class="mb-3">
                        <label for="qty" class="form-label fw-semibold">Jumlah Porsi</label>
                        <input type="number" id="qty" name="qty"
                               class="form-control @error('qty') is-invalid @enderror"
                               value="{{ old('qty', 1) }}" min="1" max="20" required>
                        @error('qty')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Hari --}}
                    <div class="mb-3">
                        <label for="day_of_week" class="form-label fw-semibold">Hari</label>
                        <select id="day_of_week" name="day_of_week"
                                class="form-select @error('day_of_week') is-invalid @enderror"
                                required>
                            <option value="">— Pilih hari —</option>
                            @foreach($dayNames as $value => $label)
                                <option value="{{ $value }}" {{ old('day_of_week') == $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('day_of_week')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Slot Istirahat --}}
                    <div class="mb-4">
                        <label for="break_time_id" class="form-label fw-semibold">Slot Istirahat</label>
                        <select id="break_time_id" name="break_time_id"
                                class="form-select @error('break_time_id') is-invalid @enderror"
                                required>
                            <option value="">— Pilih slot —</option>
                            @foreach($breakTimes as $bt)
                                <option value="{{ $bt->id }}" {{ old('break_time_id') == $bt->id ? 'selected' : '' }}>
                                    {{ $bt->label }}
                                </option>
                            @endforeach
                        </select>
                        @error('break_time_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-pill">
                        <i class="bi bi-calendar-check me-2"></i> Simpan Jadwal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
