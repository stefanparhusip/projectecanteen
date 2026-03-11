@extends('layouts.app')
@section('title', $webhook->exists ? 'Edit Webhook' : 'Tambah Webhook')

@section('content')
<div class="mb-3">
    <a href="{{ route('admin.webhooks.index') }}" class="text-decoration-none text-muted small">
        <i class="bi bi-arrow-left me-1"></i>Kembali ke Daftar Webhook
    </a>
</div>

<div class="card border-0 shadow-sm rounded-3" style="max-width:640px">
    <div class="card-body p-4">
        <h5 class="fw-bold mb-4">
            {{ $webhook->exists ? 'Edit Webhook: ' . $webhook->name : 'Tambah Webhook Baru' }}
        </h5>

        <form method="POST"
              action="{{ $webhook->exists
                         ? route('admin.webhooks.update', $webhook)
                         : route('admin.webhooks.store') }}">
            @csrf
            @if($webhook->exists) @method('PUT') @endif

            {{-- Nama --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nama Webhook<span class="text-danger ms-1">*</span></label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                       placeholder="cth: Kitchen Display System"
                       value="{{ old('name', $webhook->name) }}" required maxlength="100">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- URL --}}
            <div class="mb-3">
                <label for="url" class="form-label fw-semibold">URL Endpoint<span class="text-danger ms-1">*</span></label>
                <input type="url" id="url" name="url" class="form-control @error('url') is-invalid @enderror"
                       placeholder="https://service.example.com/webhook"
                       value="{{ old('url', $webhook->url) }}" required maxlength="500">
                @error('url') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            {{-- Secret --}}
            <div class="mb-3">
                <label for="secret" class="form-label fw-semibold">
                    Secret Key<span class="text-danger ms-1">*</span>
                    <span class="text-muted fw-normal small">(min 16 karakter)</span>
                </label>
                <div class="input-group">
                    <input type="text" id="secret" name="secret"
                           class="form-control font-monospace @error('secret') is-invalid @enderror"
                           placeholder="Minimal 16 karakter acak"
                           value="{{ old('secret', $webhook->secret) }}" required minlength="16" maxlength="255">
                    <button type="button" class="btn btn-outline-secondary" id="btnGenSecret">
                        <i class="bi bi-arrow-repeat"></i> Generate
                    </button>
                </div>
                <div class="form-text">Digunakan untuk validasi HMAC-SHA256 (<code>X-USK-Signature</code>).</div>
                @error('secret') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            {{-- Events --}}
            <div class="mb-3">
                <label class="form-label fw-semibold">Events yang Dilanggan<span class="text-danger ms-1">*</span></label>
                @error('events') <div class="text-danger small mb-1">{{ $message }}</div> @enderror
                <div class="border rounded p-3 bg-light">
                    @foreach($allEvents as $eventKey => $eventLabel)
                    <div class="form-check">
                        <input type="checkbox"
                               id="event_{{ $eventKey }}"
                               name="events[]"
                               value="{{ $eventKey }}"
                               class="form-check-input"
                               {{ in_array($eventKey, old('events', $webhook->events ?? [])) ? 'checked' : '' }}>
                        <label for="event_{{ $eventKey }}" class="form-check-label">
                            <span class="badge bg-secondary me-1">{{ $eventKey }}</span>
                            {{ $eventLabel }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Status Aktif --}}
            <div class="mb-4">
                <div class="form-check form-switch">
                    <input type="checkbox" id="is_active" name="is_active" value="1"
                           class="form-check-input"
                           {{ old('is_active', $webhook->is_active ?? true) ? 'checked' : '' }}>
                    <label for="is_active" class="form-check-label fw-semibold">Aktifkan webhook ini</label>
                </div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn fw-semibold px-4" style="background:#f97316;color:#fff">
                    <i class="bi bi-save me-1"></i>Simpan
                </button>
                <a href="{{ route('admin.webhooks.index') }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.getElementById('btnGenSecret').addEventListener('click', function () {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const arr   = new Uint8Array(32);
    crypto.getRandomValues(arr);
    document.getElementById('secret').value = Array.from(arr, b => chars[b % chars.length]).join('');
});
</script>
@endpush
