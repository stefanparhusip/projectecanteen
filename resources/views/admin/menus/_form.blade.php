{{-- resources/views/admin/menus/_form.blade.php --}}
<div class="mb-3">
    <label class="form-label fw-semibold small">Kategori</label>
    <select name="category_id"
            class="form-select @error('category_id') is-invalid @enderror" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}"
            {{ old('category_id', $menu->category_id ?? '') == $cat->id ? 'selected' : '' }}>
            {{ $cat->name }}
        </option>
        @endforeach
    </select>
    @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label fw-semibold small">Nama Menu</label>
    <input type="text" name="name"
           class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $menu->name ?? '') }}"
           placeholder="Contoh: Nasi Goreng Spesial" required>
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label fw-semibold small">Harga (Rp)</label>
    <div class="input-group">
        <span class="input-group-text">Rp</span>
        <input type="number" name="price"
               class="form-control @error('price') is-invalid @enderror"
               value="{{ old('price', $menu->price ?? '') }}"
               placeholder="0" min="0" required>
        @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label fw-semibold small">URL Gambar Menu</label>
    @if(!empty($menu->image_url))
    <div class="mb-2">
        <img src="{{ $menu->image_url }}"
             class="rounded-3 object-fit-cover border" width="120" height="120"
             alt="{{ $menu->name }}"
             onerror="this.style.display='none'">
    </div>
    @endif
    <input type="text" name="image_url" id="image_url_input"
           class="form-control @error('image_url') is-invalid @enderror"
           value="{{ old('image_url', $menu->image_url ?? '') }}"
           placeholder="https://contoh.com/gambar.jpg"
           oninput="previewImageUrl(this.value)">
    @error('image_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
    <div class="mt-2">
        <img id="image-url-preview"
             src="{{ old('image_url', $menu->image_url ?? '') }}"
             class="{{ empty(old('image_url', $menu->image_url ?? '')) ? 'd-none' : '' }} rounded-3"
             style="max-width:120px;max-height:120px;object-fit:cover"
             onerror="this.classList.add('d-none')">
    </div>
    <div class="form-text">Masukkan URL gambar (contoh: https://cdn.example.com/food.jpg)</div>
</div>

<div class="mb-4">
    <label class="form-label fw-semibold small">Stok</label>
    <div class="input-group" style="max-width:220px">
        <span class="input-group-text"><i class="bi bi-boxes"></i></span>
        <input type="number" name="stock"
               class="form-control @error('stock') is-invalid @enderror"
               value="{{ old('stock', $menu->stock ?? 0) }}"
               min="0" required>
        @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="form-text">Isi 0 jika menu tidak tersedia / habis.</div>
</div>

@push('scripts')
<script>
function previewImageUrl(url) {
    const img = document.getElementById('image-url-preview');
    if (url) {
        img.src = url;
        img.classList.remove('d-none');
    } else {
        img.classList.add('d-none');
    }
}
</script>
@endpush
