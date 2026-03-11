@extends('layouts.guest')
@section('title', 'Login')

@section('content')
<h5 class="fw-bold text-center mb-1">Selamat Datang</h5>
<p class="text-muted text-center small mb-4">Masuk ke akun E-Canteen Anda</p>

<form action="{{ route('login') }}" method="POST" novalidate>
    @csrf

    <div class="mb-3">
        <label class="form-label fw-semibold small">Email</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="email" name="email" value="{{ old('email') }}"
                   class="form-control @error('email') is-invalid @enderror"
                   placeholder="email@sekolah.sch.id" autofocus required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold small">Password</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" name="password" id="password"
                   class="form-control @error('password') is-invalid @enderror"
                   placeholder="••••••••" required>
            <button class="btn btn-outline-secondary" type="button"
                    onclick="togglePass()">
                <i class="bi bi-eye" id="eye-icon"></i>
            </button>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-4 d-flex align-items-center gap-2">
        <input class="form-check-input mt-0" type="checkbox" name="remember" id="remember">
        <label class="form-check-label small" for="remember">Ingat Saya</label>
    </div>

    <button type="submit" class="btn w-100 fw-semibold"
            style="background-color:#f97316;color:#fff">
        <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
    </button>
</form>

<hr class="my-3">
<p class="text-center small mb-0">
    Belum punya akun?
    <a href="{{ route('register') }}" class="fw-semibold" style="color:#f97316">Daftar di sini</a>
</p>

@push('scripts')
<script>
function togglePass() {
    const inp = document.getElementById('password');
    const ico = document.getElementById('eye-icon');
    if (inp.type === 'password') { inp.type = 'text'; ico.className = 'bi bi-eye-slash'; }
    else { inp.type = 'password'; ico.className = 'bi bi-eye'; }
}
</script>
@endpush
@endsection
