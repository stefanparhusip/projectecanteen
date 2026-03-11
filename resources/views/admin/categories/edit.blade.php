@extends('layouts.app')
@section('title', 'Edit Kategori — ' . $category->name)

@section('content')

<div class="mb-4 d-flex align-items-center gap-3">
    <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Kembali
    </a>
    <div>
        <h5 class="fw-bold mb-0">Edit Kategori</h5>
        <p class="text-muted small mb-0">Mengubah data kategori <strong>{{ $category->name }}</strong></p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0">
                    <i class="bi bi-pencil-square me-2" style="color:#f97316"></i>Ubah Nama Kategori
                </h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                    @csrf @method('PUT')

                    @include('admin.categories._form', ['category' => $category])

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn fw-semibold px-4"
                                style="background:#f97316;color:#fff">
                            <i class="bi bi-check-lg me-1"></i>Perbarui Kategori
                        </button>
                        <a href="{{ route('admin.categories.index') }}"
                           class="btn btn-outline-secondary">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>

        {{-- Info menu yang menggunakan kategori ini --}}
        @php $menuCount = $category->menus()->count(); @endphp
        @if($menuCount > 0)
        <div class="alert alert-info border-0 shadow-sm rounded-3 mt-3 small">
            <i class="bi bi-info-circle me-2"></i>
            Kategori ini digunakan oleh <strong>{{ $menuCount }} menu</strong>.
            Perubahan nama kategori tidak memengaruhi data menu.
        </div>
        @endif

    </div>
</div>

@endsection
