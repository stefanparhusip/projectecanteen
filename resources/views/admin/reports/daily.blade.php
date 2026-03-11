@extends('layouts.app')
@section('title', 'Laporan Harian')

@section('content')
{{-- Date picker --}}
<form class="d-flex align-items-center gap-2 mb-4 flex-wrap" method="GET">
    <label class="fw-semibold small">Tanggal:</label>
    <input type="date" name="date" value="{{ $date }}"
           class="form-control form-control-sm" style="width:170px">
    <button type="submit" class="btn btn-sm btn-dark">Tampilkan</button>
</form>

{{-- Summary cards --}}
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 rounded-3 text-white h-100"
             style="background:linear-gradient(135deg,#f97316,#ea580c)">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="small opacity-75">Total Pendapatan</span>
                    <i class="bi bi-cash-stack fs-4 opacity-50"></i>
                </div>
                <div class="fs-4 fw-bold">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
                <div class="small opacity-75 mt-1">{{ \Carbon\Carbon::parse($date)->translatedFormat('d F Y') }}</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 rounded-3 bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="small opacity-75">Pesanan Selesai</span>
                    <i class="bi bi-bag-check fs-4 opacity-50"></i>
                </div>
                <div class="fs-4 fw-bold">{{ $totalOrders }}</div>
                <div class="small opacity-75 mt-1">transaksi</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 rounded-3 bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="small opacity-75">Item Terjual</span>
                    <i class="bi bi-grid-3x3-gap fs-4 opacity-50"></i>
                </div>
                <div class="fs-4 fw-bold">{{ $menuSales->sum('total_qty') }}</div>
                <div class="small opacity-75 mt-1">porsi / item</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card border-0 rounded-3 bg-secondary text-white h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="small opacity-75">Jenis Menu Terjual</span>
                    <i class="bi bi-list-ul fs-4 opacity-50"></i>
                </div>
                <div class="fs-4 fw-bold">{{ $menuSales->count() }}</div>
                <div class="small opacity-75 mt-1">varian menu</div>
            </div>
        </div>
    </div>
</div>

{{-- Breakdown per menu --}}
<div class="card border-0 shadow-sm rounded-3">
    <div class="card-header bg-white border-0 pt-3">
        <h6 class="fw-bold mb-0">Rincian Penjualan per Menu</h6>
    </div>
    <div class="card-body p-0">
        @if($menuSales->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-bar-chart fs-1 d-block mb-2"></i>
                Tidak ada data penjualan untuk tanggal ini.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle small">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Menu</th>
                        <th class="text-center">Terjual (porsi)</th>
                        <th class="text-end">Total Pendapatan</th>
                        <th style="width:30%">Proporsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menuSales as $i => $sale)
                    @php $pct = $totalRevenue > 0 ? round($sale->total_subtotal / $totalRevenue * 100) : 0; @endphp
                    <tr>
                        <td class="text-muted">{{ $i + 1 }}</td>
                        <td class="fw-semibold">{{ $sale->menu_name }}</td>
                        <td class="text-center">{{ $sale->total_qty }}</td>
                        <td class="text-end fw-semibold" style="color:#f97316">
                            Rp {{ number_format($sale->total_subtotal, 0, ',', '.') }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="progress flex-grow-1" style="height:8px">
                                    <div class="progress-bar" style="width:{{ $pct }}%;background:#f97316"></div>
                                </div>
                                <span class="text-muted" style="font-size:.7rem;min-width:30px">{{ $pct }}%</span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <td></td>
                        <td class="fw-bold">Total</td>
                        <td class="text-center fw-bold">{{ $menuSales->sum('total_qty') }}</td>
                        <td class="text-end fw-bold">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
