{{-- resources/views/admin/break-times/_form.blade.php --}}
<div class="mb-3">
    <label class="form-label fw-semibold small">Label</label>
    <input type="text" name="label"
           class="form-control @error('label') is-invalid @enderror"
           value="{{ old('label', $breakTime->label ?? '') }}"
           placeholder="Contoh: Istirahat 1" required>
    @error('label') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="row g-3">
    <div class="col-sm-4">
        <label class="form-label fw-semibold small">
            Deadline Pre-Order
            <span class="text-muted small">(sebelum istirahat)</span>
        </label>
        <input type="time" name="order_deadline"
               class="form-control @error('order_deadline') is-invalid @enderror"
               value="{{ old('order_deadline', isset($breakTime) ? substr($breakTime->order_deadline, 0, 5) : '') }}"
               required>
        @error('order_deadline') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-sm-4">
        <label class="form-label fw-semibold small">Jam Mulai Istirahat</label>
        <input type="time" name="start_time"
               class="form-control @error('start_time') is-invalid @enderror"
               value="{{ old('start_time', isset($breakTime) ? substr($breakTime->start_time, 0, 5) : '') }}"
               required>
        @error('start_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-sm-4">
        <label class="form-label fw-semibold small">Jam Selesai Istirahat</label>
        <input type="time" name="end_time"
               class="form-control @error('end_time') is-invalid @enderror"
               value="{{ old('end_time', isset($breakTime) ? substr($breakTime->end_time, 0, 5) : '') }}"
               required>
        @error('end_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<div class="form-text mt-2 mb-4">
    <i class="bi bi-info-circle me-1"></i>
    Deadline harus lebih awal dari jam mulai istirahat.
</div>
