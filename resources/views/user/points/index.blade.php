@extends('layouts.app')
@section('title', 'Poin Saya')

@section('content')
<div class="row g-4">

    {{-- Poin card + Redeem form --}}
    <div class="col-md-4">
        {{-- Hero card --}}
        <div class="card border-0 text-white rounded-3 mb-3"
             style="background:linear-gradient(135deg,#7c3aed,#4f46e5)">
            <div class="card-body text-center py-4">
                <div class="small opacity-75 mb-1">Poin Aktif</div>
                <div class="display-6 fw-bold">
                    {{ number_format($user->points_balance, 0, ',', '.') }}
                    <span class="fs-5 fw-normal">pts</span>
                </div>
                <div class="small opacity-75 mt-1">{{ $user->name }}</div>
            </div>
        </div>

        {{-- Progress to next reward --}}
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <span class="small fw-semibold">Progress ke reward berikutnya</span>
                    <span class="small text-muted">{{ $progressTo100 }}/100 pts</span>
                </div>
                <div class="progress" style="height:10px">
                    <div class="progress-bar"
                         role="progressbar"
                         style="width:{{ $progressPct }}%; background:#7c3aed"
                         aria-valuenow="{{ $progressPct }}"
                         aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
                <div class="small text-muted mt-1">
                    @if($progressTo100 === 0 && $user->points_balance > 0)
                        Kamu bisa menukarkan poin sekarang!
                    @else
                        Butuh {{ 100 - $progressTo100 }} poin lagi untuk reward berikutnya
                    @endif
                </div>
            </div>
        </div>

        {{-- Info konversi --}}
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-body">
                <h6 class="fw-bold mb-3"><i class="bi bi-info-circle me-2 text-primary"></i>Cara Kerja Poin</h6>
                <ul class="list-unstyled small text-muted mb-0">
                    <li class="mb-2">
                        <i class="bi bi-plus-circle-fill text-success me-2"></i>
                        Dapatkan <strong>1 poin</strong> setiap belanja <strong>Rp 10.000</strong>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-arrow-right-circle-fill text-primary me-2"></i>
                        Poin diberikan saat pesanan <strong>diambil</strong> (status Collected)
                    </li>
                    <li>
                        <i class="bi bi-gift-fill text-warning me-2"></i>
                        <strong>100 poin</strong> = <strong>Rp 10.000</strong> saldo
                    </li>
                </ul>
            </div>
        </div>

        {{-- Redeem form --}}
        @if($redeemable > 0)
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3">
                <h6 class="fw-bold mb-0"><i class="bi bi-gift me-2"></i>Tukar Poin</h6>
                <p class="text-muted small mb-0">
                    Kamu bisa menukar hingga <strong>{{ $redeemable }}x</strong>
                    ({{ $redeemable * 100 }} poin → Rp {{ number_format($redeemable * 10000, 0, ',', '.') }})
                </p>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show py-2 small" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show py-2 small" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('user.points.redeem') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold small">Jumlah Penukaran (kelipatan 100 poin)</label>
                        <select name="times" class="form-select @error('times') is-invalid @enderror">
                            @for($i = 1; $i <= $redeemable; $i++)
                                <option value="{{ $i }}" {{ old('times', 1) == $i ? 'selected' : '' }}>
                                    {{ $i }}x — {{ $i * 100 }} poin → Rp {{ number_format($i * 10000, 0, ',', '.') }}
                                </option>
                            @endfor
                        </select>
                        @error('times')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn w-100 fw-semibold"
                            style="background:#7c3aed;color:#fff"
                            onclick="return confirm('Konfirmasi penukaran poin?')">
                        <i class="bi bi-gift me-2"></i>Tukar Sekarang
                    </button>
                </form>
            </div>
        </div>
        @else
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-body text-center text-muted py-4">
                <i class="bi bi-star display-6 opacity-25 d-block mb-2"></i>
                <div class="small">Kumpulkan <strong>{{ 100 - $progressTo100 }} poin</strong> lagi untuk bisa menukar reward</div>
            </div>
        </div>
        @endif
    </div>

    {{-- Riwayat transaksi poin --}}
    <div class="col-md-8">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white border-0 pt-3">
                <h6 class="fw-bold mb-0"><i class="bi bi-clock-history me-2"></i>Riwayat Poin</h6>
            </div>

            @if($history->isEmpty())
                <div class="card-body text-center py-5 text-muted">
                    <i class="bi bi-inbox display-5 opacity-25 d-block mb-2"></i>
                    Belum ada riwayat poin.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-3">Tanggal</th>
                                <th>Keterangan</th>
                                <th class="text-end pe-3">Poin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($history as $tx)
                            <tr>
                                <td class="ps-3 text-muted small text-nowrap">
                                    {{ $tx->created_at->translatedFormat('d M Y, H:i') }}
                                </td>
                                <td class="small">
                                    @if($tx->type === 'earn')
                                        <i class="bi bi-plus-circle-fill text-success me-1"></i>
                                    @elseif($tx->type === 'redeem')
                                        <i class="bi bi-dash-circle-fill text-danger me-1"></i>
                                    @else
                                        <i class="bi bi-pencil-fill text-secondary me-1"></i>
                                    @endif
                                    {{ $tx->description ?? ucfirst($tx->type) }}
                                </td>
                                <td class="text-end pe-3 fw-semibold small text-nowrap">
                                    @if($tx->points >= 0)
                                        <span class="text-success">+{{ number_format($tx->points, 0, ',', '.') }} pts</span>
                                    @else
                                        <span class="text-danger">{{ number_format($tx->points, 0, ',', '.') }} pts</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($history->hasPages())
                    <div class="card-footer bg-white border-0">
                        {{ $history->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>

</div>
@endsection
