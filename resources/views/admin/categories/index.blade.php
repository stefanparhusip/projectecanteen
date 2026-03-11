@extends('layouts.app')
@section('title', 'Kategori Menu')

@section('content')

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h5 class="fw-bold mb-0">Kategori Menu</h5>
        <p class="text-muted small mb-0">Kelola kategori untuk pengelompokan menu kantin</p>
    </div>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-sm fw-semibold"
       style="background:#f97316;color:#fff">
        <i class="bi bi-plus-lg me-1"></i>Tambah Kategori
    </a>
</div>

{{-- Flash Messages --}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show rounded-3 border-0 shadow-sm" role="alert">
        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show rounded-3 border-0 shadow-sm" role="alert">
        <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        @if($categories->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-tags fs-1 d-block mb-3 opacity-25"></i>
                <p class="mb-2">Belum ada kategori.</p>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-primary">
                    Tambah Kategori Pertama
                </a>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light small text-muted">
                        <tr>
                            <th class="ps-4" width="50">#</th>
                            <th>Nama Kategori</th>
                            <th class="text-center" width="130">Jumlah Menu</th>
                            <th class="text-end pe-4" width="160">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $index => $category)
                        <tr>
                            <td class="ps-4 text-muted small">{{ $index + 1 }}</td>
                            <td>
                                <span class="fw-semibold">{{ $category->name }}</span>
                            </td>
                            <td class="text-center">
                                @if($category->menus_count > 0)
                                    <a href="{{ route('admin.menus.index', ['category_id' => $category->id]) }}"
                                       class="badge bg-primary-subtle text-primary rounded-pill text-decoration-none">
                                        {{ $category->menus_count }} menu
                                    </a>
                                @else
                                    <span class="badge bg-secondary-subtle text-secondary rounded-pill">0 menu</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <a href="{{ route('admin.categories.edit', $category) }}"
                                   class="btn btn-sm btn-outline-primary me-1">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Hapus kategori \'{{ $category->name }}\'?\nKategori yang masih memiliki menu tidak dapat dihapus.')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                            {{ $category->menus_count > 0 ? 'disabled' : '' }}
                                            title="{{ $category->menus_count > 0 ? 'Tidak dapat dihapus — masih ada menu' : 'Hapus kategori' }}">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

<p class="text-muted small mt-3">
    <i class="bi bi-info-circle me-1"></i>
    Kategori yang masih digunakan oleh menu tidak dapat dihapus. Hapus atau pindahkan menu-nya terlebih dahulu.
</p>

@endsection
