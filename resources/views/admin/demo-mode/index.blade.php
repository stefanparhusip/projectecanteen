@extends('layouts.app')

@section('title', 'Demo Mode')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="d-flex align-items-center mb-4">
                <i class="bi bi-play-circle fs-3 text-warning me-3"></i>
                <div>
                    <h4 class="mb-0 fw-semibold">Demo Mode</h4>
                    <small class="text-muted">Aktifkan data palsu untuk presentasi / demo stakeholder.</small>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(! $canEnable)
                <div class="alert alert-danger mb-4">
                    <i class="bi bi-shield-exclamation me-2"></i>
                    <strong>Demo mode dinonaktifkan permanen</strong> di lingkungan <code>production</code>.
                    Hubungi developer jika perlu presentasi.
                </div>
            @endif

            {{-- Status card --}}
            <div class="card shadow-sm mb-4 {{ $isEnabled ? 'border-warning' : 'border-secondary' }}">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <div class="fs-5 fw-semibold">
                            Status Demo Mode:
                            @if($isEnabled)
                                <span class="badge bg-warning text-dark ms-1">AKTIF</span>
                            @else
                                <span class="badge bg-secondary ms-1">TIDAK AKTIF</span>
                            @endif
                        </div>
                        <div class="small text-muted mt-1">
                            {{ $demoUserCount }} demo user &bull; {{ $demoMenuCount }} demo menu saat ini di database.
                        </div>
                    </div>
                    @if($canEnable)
                        @if($isEnabled)
                            <form action="{{ route('admin.demo-mode.disable') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-stop-circle me-1"></i>Nonaktifkan
                                </button>
                            </form>
                        @else
                            <form action="{{ route('admin.demo-mode.enable') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">
                                    <i class="bi bi-play-circle me-1"></i>Aktifkan &amp; Seed Data
                                </button>
                            </form>
                        @endif
                    @endif
                </div>
            </div>

            {{-- Demo credentials info card --}}
            @if($isEnabled)
            <div class="card shadow-sm mb-4 border-info">
                <div class="card-header fw-semibold text-info">
                    <i class="bi bi-key me-2"></i>Kredensial Demo
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead class="table-light">
                                <tr><th>Role</th><th>Email</th><th>Password</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge bg-danger">Admin</span></td>
                                    <td><code>demo-admin@demo.ecanteen.local</code></td>
                                    <td><code>Demo@1234</code></td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-primary">Student</span></td>
                                    <td><code>demo-andi@demo.ecanteen.local</code></td>
                                    <td><code>Demo@1234</code></td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-primary">Student</span></td>
                                    <td><code>demo-budi@demo.ecanteen.local</code></td>
                                    <td><code>Demo@1234</code></td>
                                </tr>
                                <tr>
                                    <td><span class="badge bg-primary">Student</span></td>
                                    <td><code>demo-citra@demo.ecanteen.local</code></td>
                                    <td><code>Demo@1234</code></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif

            {{-- Reset card --}}
            @if($canEnable && $demoUserCount > 0)
            <div class="card shadow-sm border-danger">
                <div class="card-header fw-semibold text-danger">
                    <i class="bi bi-arrow-counterclockwise me-2"></i>Reset Data Demo
                </div>
                <div class="card-body">
                    <p class="text-muted small mb-3">
                        Menghapus <strong>semua user dan menu demo</strong> (email berakhiran
                        <code>@demo.ecanteen.local</code> dan menu berawalan <code>[Demo]</code>),
                        lalu men-seed ulang dari awal.
                        Data production <strong>tidak</strong> terpengaruh.
                    </p>
                    <form action="{{ route('admin.demo-mode.reset') }}" method="POST"
                          onsubmit="return confirm('Reset semua data demo? Aksi ini menghapus seluruh user dan menu demo yang ada.')">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-trash3 me-1"></i>Hapus &amp; Seed Ulang Data Demo
                        </button>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection
