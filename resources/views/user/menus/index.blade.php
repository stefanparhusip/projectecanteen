@extends('layouts.app')
@section('title', 'Daftar Menu')

@section('content')
<div class="row g-3 mb-4">
    {{-- Saldo info card --}}
    <div class="col-12">
        <div class="card border-0 rounded-3 text-white"
             style="background: linear-gradient(135deg,#f97316,#ea580c)">
            <div class="card-body d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <div class="small opacity-75">Saldo Anda</div>
                    <div class="fs-4 fw-bold">Rp {{ number_format(auth()->user()->balance, 0, ',', '.') }}</div>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('user.orders.create') }}" class="btn btn-light btn-sm fw-semibold">
                        <i class="bi bi-cart-plus me-1"></i>Pre-Order
                    </a>
                    <a href="{{ route('user.balance.index') }}" class="btn btn-outline-light btn-sm">
                        <i class="bi bi-wallet2 me-1"></i>Top-Up
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Filter kategori --}}
<div class="d-flex align-items-center flex-wrap gap-2 mb-3">
    <a href="{{ route('user.menus.index') }}"
       class="btn btn-sm {{ !$categoryId ? 'btn-dark' : 'btn-outline-secondary' }}">
        Semua
    </a>
    @foreach($categories as $cat)
        <a href="{{ route('user.menus.index', ['category_id' => $cat->id]) }}"
           class="btn btn-sm {{ (int)$categoryId === $cat->id ? 'btn-dark' : 'btn-outline-secondary' }}">
            {{ $cat->name }}
        </a>
    @endforeach
</div>

{{-- Grid menu --}}
@if($menus->isEmpty())
    <div class="text-center py-5 text-muted">
        <i class="bi bi-inbox fs-1 d-block mb-2"></i>
        Belum ada menu tersedia saat ini.
    </div>
@else
<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3">
    @foreach($menus as $menu)
    <div class="col">
        <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
            @if($menu->image_url)
                <img src="{{ $menu->image_url }}"
                     class="card-img-top object-fit-cover" style="height:120px"
                     alt="{{ $menu->name }}"
                     onerror="this.style.display='none'">
            @else
                <div class="bg-light d-flex align-items-center justify-content-center"
                     style="height:120px">
                    <i class="bi bi-image text-muted fs-2"></i>
                </div>
            @endif
            <div class="card-body p-2">
                <div class="small fw-semibold text-truncate">{{ $menu->name }}</div>
                <div class="text-orange fw-bold small"
                     style="color:#f97316">
                    Rp {{ number_format($menu->price, 0, ',', '.') }}
                </div>
                @if($menu->stock > 0)
                    <span class="badge rounded-pill bg-success-subtle text-success mt-1"
                          style="font-size:.65rem">
                        Tersedia &middot; Stok {{ $menu->stock }}
                    </span>
                @else
                    <span class="badge rounded-pill bg-danger-subtle text-danger mt-1"
                          style="font-size:.65rem">
                        Habis
                    </span>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-4">{{ $menus->links() }}</div>
@endif

{{-- Info waktu istirahat --}}
<div class="card border-0 bg-light rounded-3 mt-4">
    <div class="card-body">
        <h6 class="fw-bold mb-3"><i class="bi bi-clock me-2 text-warning"></i>Jadwal Pengambilan</h6>
        <div class="row g-2">
            @foreach($breakTimes as $bt)
            <div class="col-sm-6">
                <div class="d-flex align-items-center gap-3 bg-white rounded-3 p-3 border">
                    <div class="rounded-circle bg-warning bg-opacity-10 d-flex align-items-center
                                justify-content-center" style="width:40px;height:40px">
                        <i class="bi bi-alarm text-warning"></i>
                    </div>
                    <div>
                        <div class="fw-semibold small">{{ $bt->label }}</div>
                        <div class="text-muted" style="font-size:.75rem">
                            {{ \Carbon\Carbon::parse($bt->start_time)->format('H:i') }} –
                            {{ \Carbon\Carbon::parse($bt->end_time)->format('H:i') }}
                        </div>
                        <div class="text-danger" style="font-size:.7rem">
                            Deadline order: {{ \Carbon\Carbon::parse($bt->order_deadline)->format('H:i') }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
