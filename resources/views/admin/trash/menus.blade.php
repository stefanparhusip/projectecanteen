@extends('layouts.app')
@section('title', 'Trash — Menu')

@section('content')

{{-- Tab navigation --}}
@include('admin.trash._tabs', ['active' => 'menus'])

@if($menus->isEmpty())
    <div class="text-center py-5 text-muted">
        <i class="bi bi-trash fs-1 d-block mb-2"></i>
        Tidak ada menu yang terhapus.
    </div>
@else
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>Foto</th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th class="text-end">Harga</th>
                        <th>Dihapus Pada</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr>
                        <td width="60">
                            @if($menu->image_url)
                                <img src="{{ $menu->image_url }}" width="44" height="44"
                                     class="rounded-2 object-fit-cover"
                                     style="object-fit:cover" alt=""
                                     onerror="this.style.display='none'">
                            @else
                                <div class="bg-light rounded-2 d-flex align-items-center justify-content-center"
                                     style="width:44px;height:44px">
                                    <i class="bi bi-image text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td class="fw-semibold text-decoration-line-through text-muted">
                            {{ $menu->name }}
                        </td>
                        <td class="text-muted">{{ $menu->category->name ?? '—' }}</td>
                        <td class="text-end">Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                        <td class="text-muted">
                            {{ $menu->deleted_at->format('d M Y') }}<br>
                            <span style="font-size:.7rem">{{ $menu->deleted_at->format('H:i') }}</span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                {{-- Restore --}}
                                <form action="{{ route('admin.trash.menus.restore', $menu->id) }}" method="POST">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-sm btn-success" title="Pulihkan">
                                        <i class="bi bi-arrow-counterclockwise me-1"></i>Pulihkan
                                    </button>
                                </form>
                                {{-- Force Delete --}}
                                <form action="{{ route('admin.trash.menus.force', $menu->id) }}" method="POST"
                                      onsubmit="return confirm('Hapus permanen menu \'{{ addslashes($menu->name) }}\'? Tindakan ini tidak dapat dibatalkan.')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" title="Hapus Permanen">
                                        <i class="bi bi-trash3 me-1"></i>Hapus Permanen
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3">{{ $menus->links() }}</div>
    </div>
</div>
@endif

@endsection
