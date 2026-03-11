@extends('layouts.app')
@section('title', 'Manajemen User')

@section('content')

{{-- Search --}}
<form class="d-flex gap-2 mb-4 flex-wrap align-items-center" method="GET">
    <input type="search" name="search" value="{{ $search }}"
           class="form-control form-control-sm" style="width:260px"
           placeholder="Cari nama atau email...">
    <button class="btn btn-sm btn-dark">Cari</button>
    @if($search)
        <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-secondary">Reset</a>
    @endif
    <div class="ms-auto d-flex align-items-center gap-2">
        <span class="text-muted small">{{ $users->total() }} user ditemukan</span>
        <a href="{{ route('admin.trash.users') }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-trash3 me-1"></i>Lihat Trash
        </a>
    </div>
</form>

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white border-0 pt-3">
        <h5 class="fw-bold mb-0">Data & Saldo User</h5>
        <p class="text-muted small mb-0">Kelola saldo dan data pengguna terdaftar</p>
    </div>
    <div class="card-body p-0">
        @if($users->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-people fs-1 d-block mb-2"></i>
                Tidak ada user yang ditemukan.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-end">Saldo</th>
                        <th class="text-center">Pesanan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="fw-semibold">{{ $user->name }}</td>
                        <td class="text-muted">{{ $user->email }}</td>
                        <td>
                            <span class="badge {{ $user->role === 'teacher' ? 'bg-info text-dark' : 'bg-secondary' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="text-end fw-semibold" id="balance-{{ $user->id }}">
                            Rp {{ number_format($user->balance, 0, ',', '.') }}
                        </td>
                        <td class="text-center text-muted">{{ $user->orders_count }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                {{-- Top-Up Langsung --}}
                                <button class="btn btn-sm btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-topup"
                                        data-user-id="{{ $user->id }}"
                                        data-user-name="{{ $user->name }}"
                                        data-user-balance="{{ number_format($user->balance, 0, ',', '.') }}"
                                        title="Top-Up saldo">
                                    <i class="bi bi-plus-circle"></i>
                                </button>
                                {{-- Impersonasi (super-admin only, students/teachers only) --}}
                                @if(auth()->user()->isSuperAdmin() && !$user->isAdmin())
                                <form action="{{ route('admin.impersonate.start', $user) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="btn btn-sm btn-outline-primary"
                                            title="Masuk sebagai user ini"
                                            onclick="return confirm('Impersonasi {{ addslashes($user->name) }}? Tindakan ini akan dicatat di audit log.')">
                                        <i class="bi bi-person-fill-gear"></i>
                                    </button>
                                </form>
                                @endif
                                {{-- Sesuaikan Saldo --}}
                                <button class="btn btn-sm btn-outline-warning"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-adjust"
                                        data-user-id="{{ $user->id }}"
                                        data-user-name="{{ $user->name }}"
                                        data-user-balance="{{ $user->balance }}"
                                        title="Sesuaikan saldo">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                {{-- Soft Delete --}}
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                      onsubmit="return confirm('Hapus user {{ addslashes($user->name) }}? Data dapat dipulihkan dari Trash.')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" title="Hapus user">
                                        <i class="bi bi-trash"></i>
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
        @endif
    </div>
</div>

{{-- ── Modal Top-Up Langsung ─────────────────────────────────────────────── --}}
<div class="modal fade" id="modal-topup" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <form method="POST" id="form-topup">
            @csrf
            <div class="modal-content rounded-3">
                <div class="modal-header border-0 pb-0">
                    <h6 class="modal-title fw-bold">Top-Up Saldo</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="small text-muted mb-3">
                        User: <strong id="topup-user-name">—</strong><br>
                        Saldo saat ini: <strong id="topup-user-balance">—</strong>
                    </p>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nominal Top-Up</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="amount" class="form-control"
                                   placeholder="Contoh: 50000" min="1000" max="5000000" required>
                        </div>
                        <!-- quick amounts -->
                        <div class="d-flex flex-wrap gap-1 mt-2">
                            @foreach([10000, 20000, 50000, 100000] as $nominal)
                            <button type="button" class="btn btn-xs btn-outline-secondary py-0 px-2 quick-fill"
                                    style="font-size:.75rem"
                                    data-value="{{ $nominal }}">
                                +{{ number_format($nominal, 0, ',', '.') }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label small fw-semibold">Catatan (opsional)</label>
                        <input type="text" name="description" class="form-control form-control-sm"
                               placeholder="Misal: Pembayaran manual">
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-success">
                        <i class="bi bi-plus-circle me-1"></i>Top-Up
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- ── Modal Sesuaikan Saldo ─────────────────────────────────────────────── --}}
<div class="modal fade" id="modal-adjust" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <form method="POST" id="form-adjust">
            @csrf
            <div class="modal-content rounded-3">
                <div class="modal-header border-0 pb-0">
                    <h6 class="modal-title fw-bold">Sesuaikan Saldo</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="small text-muted mb-3">
                        User: <strong id="adjust-user-name">—</strong>
                    </p>
                    <div class="mb-1">
                        <label class="form-label small fw-semibold">Saldo Baru</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="balance" id="adjust-balance-input" class="form-control"
                                   min="0" max="99999999" required>
                        </div>
                    </div>
                    <div class="mb-1 mt-3">
                        <label class="form-label small fw-semibold">Alasan</label>
                        <input type="text" name="description" class="form-control form-control-sm"
                               placeholder="Misal: Koreksi saldo">
                    </div>
                    <p class="small text-danger mt-2 mb-0">
                        <i class="bi bi-exclamation-triangle me-1"></i>
                        Tindakan ini akan langsung mengganti saldo user.
                    </p>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-warning">
                        <i class="bi bi-check-lg me-1"></i>Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Top-Up modal
document.getElementById('modal-topup').addEventListener('show.bs.modal', function (e) {
    const btn    = e.relatedTarget;
    const userId = btn.dataset.userId;
    document.getElementById('topup-user-name').textContent    = btn.dataset.userName;
    document.getElementById('topup-user-balance').textContent = 'Rp ' + btn.dataset.userBalance;
    document.getElementById('form-topup').action = `/admin/users/${userId}/topup`;
    // clear amount
    document.querySelector('#form-topup [name=amount]').value = '';
});

// Adjust modal
document.getElementById('modal-adjust').addEventListener('show.bs.modal', function (e) {
    const btn    = e.relatedTarget;
    const userId = btn.dataset.userId;
    document.getElementById('adjust-user-name').textContent = btn.dataset.userName;
    document.getElementById('adjust-balance-input').value   = btn.dataset.userBalance;
    document.getElementById('form-adjust').action = `/admin/users/${userId}/balance`;
});

// Quick fill buttons
document.querySelectorAll('.quick-fill').forEach(function (btn) {
    btn.addEventListener('click', function () {
        document.querySelector('#form-topup [name=amount]').value = this.dataset.value;
    });
});
</script>
@endpush
