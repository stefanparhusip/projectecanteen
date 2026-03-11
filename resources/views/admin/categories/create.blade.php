@extends('layouts.app')
@section('title', 'Tambah Kategori')

@section('content')

<div class="mb-4 d-flex align-items-center gap-3">
    <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Kembali
    </a>
    <div>
        <h5 class="fw-bold mb-0">Tambah Kategori</h5>
        <p class="text-muted small mb-0">Buat kategori baru untuk pengelompokan menu</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0">
                    <i class="bi bi-tag me-2" style="color:#f97316"></i>Informasi Kategori
                </h6>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf

                    @include('admin.categories._form', ['category' => null])

                    <div class="d-flex gap-2 mt-4">
                        <button type="submit" class="btn fw-semibold px-4"
                                style="background:#f97316;color:#fff">
                            <i class="bi bi-check-lg me-1"></i>Simpan Kategori
                        </button>
                        <a href="{{ route('admin.categories.index') }}"
                           class="btn btn-outline-secondary">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
