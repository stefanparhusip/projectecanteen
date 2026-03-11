@extends('layouts.app')
@section('title', 'Saldo Saya')

@section('content')
<div class="row g-4">

    {{-- Saldo card + Top-up form --}}
    <div class="col-md-4">
        <div class="card border-0 text-white rounded-3 mb-3"
             style="background:linear-gradient(135deg,#f97316,#ea580c)">
            <div class="card-body text-center py-4">
                <div class="small opacity-75 mb-1">Saldo Aktif</div>
                <div class="display-6 fw-bold">
                    Rp {{ number_format($user->balance, 0, ',', '.') }}
                </div>
                <div class="small opacity-75 mt-1">{{ $user->name }}</div>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3">
                <h6 class="fw-bold mb-0">Ajukan Top-Up</h6>
                <p class="text-muted small mb-0">Admin akan menyetujui setelah transfer dikonfirmasi</p>
            </div>
            <div class="card-body">
                <form action="{{ route('user.balance.topup') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Nominal Top-Up</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="amount"
                                   class="form-control @error('amount') is-invalid @enderror"
                                   placeholder="10000" min="5000" max="1000000"
                                   value="{{ old('amount') }}" required>
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Nominal cepat --}}
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        @foreach([10000, 20000, 50000, 100000] as $nominal)
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                onclick="document.querySelector('[name=amount]').value={{ $nominal }}">
                            {{ number_format($nominal, 0, ',', '.') }}
                        </button>
                        @endforeach
                    </div>

                    <button type="submit" class="btn w-100 fw-semibold"
                            style="background:#f97316;color:#fff">
                        <i class="bi bi-send me-2"></i>Kirim Permintaan
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Riwayat mutasi --}}
    <div class="col-md-8">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3">
                <h6 class="fw-bold mb-0">Riwayat Mutasi Saldo</h6>
            </div>
            <div class="card-body p-0">
                @if($transactions->isEmpty())
                    <div class="text-center py-4 text-muted">Belum ada mutasi saldo.</div>
                @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle small">
                        <thead class="table-light">
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th class="text-end">Nominal</th>
                                <th class="text-end">Saldo Setelah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $trx)
                            <tr>
                                <td class="text-nowrap text-muted">
                                    {{ $trx->created_at->format('d M Y') }}<br>
                                    <span style="font-size:.7rem">{{ $trx->created_at->format('H:i') }}</span>
                                </td>
                                <td>
                                    @if($trx->type === 'topup')
                                        <span class="badge bg-success-subtle text-success">Top-Up</span>
                                        @if($trx->description === 'pending')
                                            <span class="badge bg-warning-subtle text-warning ms-1">Menunggu</span>
                                        @elseif($trx->description === 'rejected')
                                            <span class="badge bg-danger-subtle text-danger ms-1">Ditolak</span>
                                        @else
                                            <span class="badge bg-success-subtle text-success ms-1">Disetujui</span>
                                        @endif
                                    @elseif($trx->type === 'refund')
                                        <span class="badge bg-info-subtle text-info">Refund</span>
                                        <span class="text-muted ms-1" style="font-size:.75rem">{{ $trx->description }}</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger">Debit</span>
                                        <span class="text-muted ms-1">{{ $trx->description }}</span>
                                    @endif
                                </td>
                                <td class="text-end fw-semibold
                                    {{ in_array($trx->type, ['topup','refund']) ? 'text-success' : 'text-danger' }}">
                                    {{ in_array($trx->type, ['topup','refund']) ? '+' : '-' }}
                                    Rp {{ number_format($trx->amount, 0, ',', '.') }}
                                </td>
                                <td class="text-end fw-bold">
                                    Rp {{ number_format($trx->balance_after, 0, ',', '.') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-3">{{ $transactions->links() }}</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
