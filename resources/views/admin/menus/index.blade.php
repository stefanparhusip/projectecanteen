@extends('layouts.app')
@section('title', 'Manajemen Menu')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Daftar Menu</h5>
        <p class="text-muted small mb-0">Total {{ $menus->total() }} menu</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.trash.menus') }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-trash3 me-1"></i>Trash
        </a>
        <a href="{{ route('admin.menus.create') }}" class="btn fw-semibold"
           style="background:#f97316;color:#fff">
            <i class="bi bi-plus-lg me-1"></i>Tambah Menu
        </a>
    </div>
</div>

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        @if($menus->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-grid-3x3-gap fs-1 d-block mb-2"></i>
                Belum ada menu. <a href="{{ route('admin.menus.create') }}">Tambah sekarang</a>.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width:60px">Foto</th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th class="text-center">Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr>
                        <td>
                            @if($menu->image_url)
                                <img src="{{ $menu->image_url }}"
                                     class="rounded-2 object-fit-cover" width="48" height="48"
                                     alt="{{ $menu->name }}"
                                     onerror="this.replaceWith(document.getElementById('no-img-tpl').content.cloneNode(true))">
                            @else
                                <div class="bg-light rounded-2 d-flex align-items-center
                                            justify-content-center" style="width:48px;height:48px">
                                    <i class="bi bi-image text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td class="fw-semibold">{{ $menu->name }}</td>
                        <td><span class="badge bg-light text-dark border">{{ $menu->category->name }}</span></td>
                        <td class="fw-semibold" style="color:#f97316">
                            Rp {{ number_format($menu->price, 0, ',', '.') }}
                        </td>
                        <td class="text-center">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <span class="badge rounded-pill
                                    {{ $menu->stock > 0 ? 'bg-success' : 'bg-danger' }}"
                                    style="min-width:70px">
                                    {{ $menu->stock > 0 ? '● Tersedia' : '○ Habis' }}
                                </span>
                                <span class="text-muted" style="font-size:.72rem">
                                    Stok: <strong>{{ $menu->stock }}</strong>
                                </span>
                                {{-- +1 / -1 cepat --}}
                                <div class="d-flex gap-1">
                                    <form action="{{ route('admin.menus.adjustStock', $menu) }}" method="POST">
                                        @csrf @method('PATCH')
                                        <input type="hidden" name="action" value="subtract">
                                        <input type="hidden" name="amount" value="1">
                                        <button class="btn btn-outline-secondary py-0 px-2"
                                                style="font-size:.7rem" title="Kurangi 1">−</button>
                                    </form>
                                    <form action="{{ route('admin.menus.adjustStock', $menu) }}" method="POST">
                                        @csrf @method('PATCH')
                                        <input type="hidden" name="action" value="add">
                                        <input type="hidden" name="amount" value="1">
                                        <button class="btn btn-outline-success py-0 px-2"
                                                style="font-size:.7rem" title="Tambah 1">+</button>
                                    </form>
                                </div>
                                {{-- Set manual via form mini --}}
                                <form action="{{ route('admin.menus.adjustStock', $menu) }}"
                                      method="POST" class="d-flex gap-1 align-items-center">
                                    @csrf @method('PATCH')
                                    <input type="hidden" name="action" value="set">
                                    <input type="number" name="amount" min="0" value="{{ $menu->stock }}"
                                           class="form-control form-control-sm text-center"
                                           style="width:56px;font-size:.72rem" required>
                                    <button class="btn btn-primary py-0 px-2"
                                            style="font-size:.7rem">Set</button>
                                </form>
                            </div>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.menus.edit', $menu) }}"
                               class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Hapus menu ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3">{{ $menus->links() }}</div>
        @endif
    </div>
</div>
@endsection
