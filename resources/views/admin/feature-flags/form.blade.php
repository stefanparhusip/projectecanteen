@extends('layouts.app')
@section('title', isset($flag->id) ? 'Edit Feature Flag' : 'Tambah Feature Flag')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.feature-flags.index') }}" class="text-decoration-none text-muted small">
        <i class="bi bi-arrow-left me-1"></i>Kembali ke Feature Flags
    </a>
</div>

<h5 class="fw-bold mb-4">
    {{ isset($flag->id) ? 'Edit Feature Flag' : 'Tambah Feature Flag' }}
</h5>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0 ps-3">
            @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@php $isEdit = isset($flag->id); @endphp
<form method="POST"
      action="{{ $isEdit ? route('admin.feature-flags.update', $flag) : route('admin.feature-flags.store') }}">
    @csrf
    @if($isEdit) @method('PUT') @endif

    <div class="row g-4">
        {{-- Main settings --}}
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body">
                    <h6 class="fw-semibold mb-3">Informasi Flag</h6>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Key <span class="text-danger">*</span></label>
                        <input type="text" name="key" class="form-control font-monospace @error('key') is-invalid @enderror"
                               value="{{ old('key', $flag->key ?? '') }}"
                               placeholder="contoh: new_checkout_ui"
                               pattern="[a-z0-9_]+"
                               title="Hanya huruf kecil, angka, dan underscore"
                               {{ $isEdit ? 'readonly' : 'required' }}>
                        <div class="form-text">Hanya huruf kecil, angka, dan underscore. Tidak bisa diubah setelah dibuat.</div>
                        @error('key') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $flag->name ?? '') }}"
                               placeholder="Nama deskriptif untuk flag ini" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea name="description" rows="2"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="Tujuan flag ini (opsional)">{{ old('description', $flag->description ?? '') }}</textarea>
                        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold">Rollout Percentage <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" name="rollout_percentage" id="rolloutPct"
                                       class="form-control @error('rollout_percentage') is-invalid @enderror"
                                       value="{{ old('rollout_percentage', $flag->rollout_percentage ?? 100) }}"
                                       min="0" max="100" required>
                                <span class="input-group-text">%</span>
                            </div>
                            <div class="form-text">0 = tidak ada user | 100 = semua user</div>
                            @error('rollout_percentage') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-sm-6 d-flex align-items-end">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="is_enabled"
                                       id="isEnabled" value="1"
                                       {{ old('is_enabled', $flag->is_enabled ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label fw-semibold" for="isEnabled">Aktifkan Flag</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- A/B Variants --}}
            <div class="card border-0 shadow-sm rounded-3 mt-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h6 class="fw-semibold mb-0">A/B Testing</h6>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" name="has_ab_variants"
                                   id="hasAbVariants" value="1"
                                   {{ old('has_ab_variants', $flag->has_ab_variants ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="hasAbVariants">Aktifkan A/B</label>
                        </div>
                    </div>

                    <div id="abVariantsSection" class="{{ old('has_ab_variants', $flag->has_ab_variants ?? false) ? '' : 'd-none' }}">
                        <p class="text-muted small mb-3">
                            Pengguna yang masuk rollout akan dibagi 50/50 antara dua varian berdasarkan hash user ID.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Label Varian A</label>
                                <input type="text" name="variant_a_label" class="form-control"
                                       value="{{ old('variant_a_label', $flag->variant_a_label ?? 'Control') }}"
                                       placeholder="Control">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Label Varian B</label>
                                <input type="text" name="variant_b_label" class="form-control"
                                       value="{{ old('variant_b_label', $flag->variant_b_label ?? 'Treatment') }}"
                                       placeholder="Treatment">
                            </div>
                        </div>
                    </div>
                    <div id="abHint" class="{{ old('has_ab_variants', $flag->has_ab_variants ?? false) ? 'd-none' : '' }}">
                        <p class="text-muted small mb-0">Aktifkan untuk membagi pengguna secara acak ke dua varian.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar: per-user overrides (edit only) --}}
        <div class="col-lg-4">
            @if($isEdit && isset($overrides) && $overrides->isNotEmpty())
            <div class="card border-0 shadow-sm rounded-3 mb-4">
                <div class="card-body">
                    <h6 class="fw-semibold mb-3">Override Per-Pengguna</h6>
                    @foreach($overrides as $user)
                        @php $ov = $user->featureFlagOverrides->first(); @endphp
                        <div class="d-flex align-items-center justify-content-between py-2 border-bottom">
                            <div>
                                <div class="fw-semibold small">{{ $user->name }}</div>
                                <div class="text-muted" style="font-size:.75rem">
                                    Override:
                                    @if($ov->is_enabled === true) <span class="text-success">Aktif</span>
                                    @elseif($ov->is_enabled === false) <span class="text-danger">Nonaktif</span>
                                    @else <span>—</span> @endif
                                    @if($ov->variant) · Varian {{ $ov->variant }} @endif
                                </div>
                            </div>
                            <form method="POST"
                                  action="{{ route('admin.feature-flags.remove-override', $flag) }}"
                                  onsubmit="return confirm('Hapus override ini?')">
                                @csrf @method('DELETE')
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button type="submit" class="btn btn-sm btn-outline-danger border-0">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            @if($isEdit)
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-body">
                    <h6 class="fw-semibold mb-3">Tambah Override Pengguna</h6>
                    <form method="POST" action="{{ route('admin.feature-flags.override-user', $flag) }}">
                        @csrf
                        <div class="mb-2">
                            <label class="form-label small">ID Pengguna</label>
                            <input type="number" name="user_id" class="form-control form-control-sm"
                                   placeholder="User ID" required min="1">
                        </div>
                        <div class="mb-2">
                            <label class="form-label small">Override Status</label>
                            <select name="is_enabled" class="form-select form-select-sm">
                                <option value="">— Ikuti global —</option>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small">Pin Varian</label>
                            <select name="variant" class="form-select form-select-sm">
                                <option value="">— Otomatis —</option>
                                <option value="A">Varian A</option>
                                <option value="B">Varian B</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-sm btn-outline-primary w-100">
                            Simpan Override
                        </button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn fw-semibold px-4" style="background:#f97316;color:#fff">
            <i class="bi bi-check-lg me-1"></i>{{ $isEdit ? 'Perbarui' : 'Simpan' }}
        </button>
        <a href="{{ route('admin.feature-flags.index') }}" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>
@endsection

@push('scripts')
<script>
const abToggle  = document.getElementById('hasAbVariants');
const abSection = document.getElementById('abVariantsSection');
const abHint    = document.getElementById('abHint');

abToggle.addEventListener('change', function () {
    abSection.classList.toggle('d-none', !this.checked);
    abHint.classList.toggle('d-none', this.checked);
});
</script>
@endpush
