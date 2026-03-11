@extends('layouts.app')
@section('title', 'Trash — User')

@section('content')

@include('admin.trash._tabs', ['active' => 'users'])

@if($users->isEmpty())
    <div class="text-center py-5 text-muted">
        <i class="bi bi-trash fs-1 d-block mb-2"></i>
        Tidak ada user yang terhapus.
    </div>
@else

<div class="alert alert-warning d-flex gap-2 align-items-start rounded-3 mb-4" role="alert">
    <i class="bi bi-exclamation-triangle-fill mt-1 flex-shrink-0"></i>
    <div>
        <strong>Perhatian:</strong> Menghapus permanen user akan ikut menghapus <strong>semua pesanan</strong>
        milik user tersebut. Tindakan ini <strong>tidak dapat dibatalkan</strong>.
    </div>
</div>

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-end">Saldo</th>
                        <th class="text-center">Pesanan</th>
                        <th>Dihapus Pada</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="fw-semibold text-decoration-line-through text-muted">
                            {{ $user->name }}
                        </td>
                        <td class="text-muted">{{ $user->email }}</td>
                        <td>
                            <span class="badge {{ $user->role === 'teacher' ? 'bg-info text-dark' : 'bg-secondary' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="text-end">
                            Rp {{ number_format($user->balance, 0, ',', '.') }}
                        </td>
                        <td class="text-center text-muted">{{ $user->orders_count }}</td>
                        <td class="text-muted">
                            {{ $user->deleted_at->format('d M Y') }}<br>
                            <span style="font-size:.7rem">{{ $user->deleted_at->format('H:i') }}</span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                {{-- Restore --}}
                                <form action="{{ route('admin.trash.users.restore', $user->id) }}" method="POST">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-sm btn-success" title="Pulihkan">
                                        <i class="bi bi-arrow-counterclockwise me-1"></i>Pulihkan
                                    </button>
                                </form>
                                {{-- Force Delete --}}
                                <form action="{{ route('admin.trash.users.force', $user->id) }}" method="POST"
                                      onsubmit="return confirm('HAPUS PERMANEN user \'{{ addslashes($user->name) }}\' beserta {{ $user->orders_count }} pesanan? Tidak dapat dibatalkan!')">
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
        <div class="p-3">{{ $users->links() }}</div>
    </div>
</div>
@endif

@endsection
