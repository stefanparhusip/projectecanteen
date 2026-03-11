{{--
    Partial: Tab navigation untuk halaman Trash.
    Usage: @include('admin.trash._tabs', ['active' => 'menus|orders|users'])
--}}
<div class="d-flex align-items-center gap-2 mb-4 flex-wrap">
    <div>
        <h4 class="fw-bold mb-0"><i class="bi bi-trash3 me-2 text-danger"></i>Trash Data</h4>
        <p class="text-muted small mb-0">Data yang dihapus sementara — bisa dipulihkan kapan saja</p>
    </div>
</div>

<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a href="{{ route('admin.trash.menus') }}"
           class="nav-link {{ $active === 'menus' ? 'active' : '' }}">
            <i class="bi bi-grid-3x3-gap me-1"></i>Menu
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.trash.orders') }}"
           class="nav-link {{ $active === 'orders' ? 'active' : '' }}">
            <i class="bi bi-bag me-1"></i>Pesanan
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.trash.users') }}"
           class="nav-link {{ $active === 'users' ? 'active' : '' }}">
            <i class="bi bi-people me-1"></i>User
        </a>
    </li>
</ul>
