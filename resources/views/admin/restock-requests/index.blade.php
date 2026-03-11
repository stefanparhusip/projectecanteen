@extends('layouts.app')
@section('title', 'Permintaan Restock')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Permintaan Restock</h5>
        <p class="text-muted small mb-0">Setujui atau tolak permintaan penambahan stok menu</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.stock-alerts.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-bell me-1"></i>Alert Stok
        </a>
        <button class="btn btn-sm fw-semibold" style="background:#f97316;color:#fff"
                data-bs-toggle="modal" data-bs-target="#manualRestockModal">
            <i class="bi bi-plus-lg me-1"></i>Buat Manual
        </button>
    </div>
</div>

@foreach(['success','error','info'] as $type)
    @if(session($type))
        <div class="alert alert-{{ $type === 'error' ? 'danger' : ($type === 'info' ? 'info' : 'success') }} alert-dismissible fade show">
            {{ session($type) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
@endforeach

{{-- Pending Requests --}}
<div class="card border-0 shadow-sm rounded-3 mb-4">
    <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
        <h6 class="fw-semibold mb-0">
            <i class="bi bi-hourglass-split me-1 text-warning"></i>
            Menunggu Persetujuan
            @if($pending->isNotEmpty())
                <span class="badge bg-warning text-dark ms-1">{{ $pending->count() }}</span>
            @endif
        </h6>
    </div>
    <div class="card-body p-0 pt-2">
        @if($pending->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                Tidak ada permintaan yang menunggu persetujuan.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Menu</th>
                        <th class="text-center">Jumlah Restock</th>
                        <th class="text-center">Tipe</th>
                        <th>Diminta Oleh</th>
                        <th>Waktu</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pending as $req)
                    <tr>
                        <td>
                            <span class="fw-semibold">{{ $req->menu->name }}</span>
                            <br>
                            <small class="text-muted">Stok sekarang: {{ $req->menu->stock }}</small>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-primary">+{{ $req->requested_stock }}</span>
                        </td>
                        <td class="text-center">
                            @if($req->is_auto)
                                <span class="badge bg-info">Otomatis</span>
                            @else
                                <span class="badge bg-secondary">Manual</span>
                            @endif
                        </td>
                        <td>
                            <small>{{ $req->is_auto ? 'Sistem' : ($req->requester?->name ?? '—') }}</small>
                        </td>
                        <td>
                            <small class="text-muted">{{ $req->created_at->diffForHumans() }}</small>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-1 justify-content-end">
                                <form action="{{ route('admin.restock-requests.approve', $req) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-success"
                                            onclick="return confirm('Setujui restock {{ $req->requested_stock }} unit untuk &quot;{{ $req->menu->name }}&quot;?')">
                                        <i class="bi bi-check-lg me-1"></i>Setujui
                                    </button>
                                </form>
                                <form action="{{ route('admin.restock-requests.reject', $req) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Tolak permintaan restock ini?')">
                                        <i class="bi bi-x-lg me-1"></i>Tolak
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

{{-- Recent Processed --}}
@if($recent->isNotEmpty())
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-transparent border-bottom-0 pt-3 pb-0">
        <h6 class="fw-semibold mb-0 text-muted">
            <i class="bi bi-clock-history me-1"></i>Riwayat Diproses (20 Terakhir)
        </h6>
    </div>
    <div class="card-body p-0 pt-2">
        <div class="table-responsive">
            <table class="table mb-0 align-middle text-muted">
                <thead class="table-light">
                    <tr>
                        <th>Menu</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Status</th>
                        <th>Diproses Oleh</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recent as $req)
                    <tr>
                        <td>{{ $req->menu->name }}</td>
                        <td class="text-center">{{ $req->requested_stock }}</td>
                        <td class="text-center">
                            @if($req->status === 'approved')
                                <span class="badge bg-success">Disetujui</span>
                            @else
                                <span class="badge bg-danger">Ditolak</span>
                            @endif
                        </td>
                        <td>
                            <small>{{ $req->approver?->name ?? '—' }}</small>
                        </td>
                        <td>
                            <small>{{ $req->approved_at?->format('d/m/Y H:i') ?? '—' }}</small>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

{{-- Manual Restock Modal --}}
<div class="modal fade" id="manualRestockModal" tabindex="-1" aria-labelledby="manualRestockLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.restock-requests.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="manualRestockLabel">Buat Permintaan Restock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Menu <span class="text-danger">*</span></label>
                        <select name="menu_id" class="form-select" required>
                            <option value="">Pilih menu...</option>
                            @foreach(\App\Models\Menu::orderBy('name')->get() as $menu)
                                <option value="{{ $menu->id }}">{{ $menu->name }} (stok: {{ $menu->stock }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Jumlah Tambah Stok <span class="text-danger">*</span></label>
                        <input type="number" name="requested_stock" class="form-control" min="1" max="9999" required placeholder="misal: 20">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Catatan</label>
                        <textarea name="notes" class="form-control" rows="2" placeholder="Opsional"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn" style="background:#f97316;color:#fff">Buat Permintaan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
