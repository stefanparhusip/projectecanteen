@extends('layouts.app')
@section('title', 'Approval Top-Up')

@section('content')
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white border-0 pt-3">
        <h5 class="fw-bold mb-0">Permintaan Top-Up Saldo</h5>
        <p class="text-muted small mb-0">Setujui atau tolak permintaan pengisian saldo user</p>
    </div>
    <div class="card-body p-0">
        @if($requests->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-wallet2 fs-1 d-block mb-2"></i>
                Tidak ada permintaan top-up yang menunggu.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>Tanggal</th>
                        <th>User</th>
                        <th class="text-end">Nominal</th>
                        <th class="text-end">Saldo Saat Ini</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $req)
                    <tr>
                        <td class="text-muted">
                            {{ $req->created_at->format('d M Y') }}<br>
                            <span style="font-size:.7rem">{{ $req->created_at->format('H:i') }}</span>
                        </td>
                        <td>
                            <div class="fw-semibold">{{ $req->user->name }}</div>
                            <div class="text-muted" style="font-size:.75rem">{{ $req->user->email }}</div>
                        </td>
                        <td class="text-end fw-bold text-success">
                            +Rp {{ number_format($req->amount, 0, ',', '.') }}
                        </td>
                        <td class="text-end">
                            Rp {{ number_format($req->user->balance, 0, ',', '.') }}
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <form action="{{ route('admin.topup.approve', $req) }}" method="POST">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-sm btn-success"
                                            onclick="return confirm('Setujui top-up Rp {{ number_format($req->amount, 0, ",", ".") }} untuk {{ $req->user->name }}?')">
                                        <i class="bi bi-check-lg me-1"></i>Setujui
                                    </button>
                                </form>
                                <form action="{{ route('admin.topup.reject', $req) }}" method="POST">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Tolak permintaan ini?')">
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
        <div class="p-3">{{ $requests->links() }}</div>
        @endif
    </div>
</div>
@endsection
