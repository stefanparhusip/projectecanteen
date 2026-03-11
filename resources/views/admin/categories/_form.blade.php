{{--
    Shared form partial untuk create & edit kategori.
    Variabel yang diperlukan parent view:
      - $action   : string  — URL target form
      - $method   : string  — 'POST' atau 'PUT'
      - $category : Category|null — null saat create, model saat edit
--}}

<div class="mb-3">
    <label for="name" class="form-label fw-semibold">
        Nama Kategori <span class="text-danger">*</span>
    </label>
    <input type="text"
           id="name"
           name="name"
           class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $category->name ?? '') }}"
           placeholder="Contoh: Makanan Berat, Minuman, Snack..."
           maxlength="50"
           autofocus
           required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <div class="form-text">Maksimal 50 karakter. Nama kategori harus unik.</div>
</div>
