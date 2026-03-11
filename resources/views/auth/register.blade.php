@extends('layouts.guest')
@section('title', 'Daftar Akun')

@section('content')
<h5 class="fw-bold text-center mb-1">Buat Akun Baru</h5>
<p class="text-muted text-center small mb-4">Daftar dan mulai pre-order kantin</p>

<form action="{{ route('register') }}" method="POST" novalidate>
    @csrf

    <div class="mb-3">
        <label class="form-label fw-semibold small">Nama Lengkap</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="Nama lengkap Anda" autofocus required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold small">Email</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="email" name="email" value="{{ old('email') }}"
                   class="form-control @error('email') is-invalid @enderror"
                   placeholder="email@sekolah.sch.id" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold small">Peran</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
            <select name="role" class="form-select @error('role') is-invalid @enderror" required>
                <option value="">-- Pilih Peran --</option>
                <option value="student" {{ old('role') === 'student' ? 'selected' : '' }}>Siswa</option>
                <option value="teacher" {{ old('role') === 'teacher' ? 'selected' : '' }}>Guru</option>
            </select>
            @error('role')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold small">Password</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" name="password"
                   class="form-control @error('password') is-invalid @enderror"
                   placeholder="Minimal 8 karakter" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-4">
        <label class="form-label fw-semibold small">Konfirmasi Password</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
            <input type="password" name="password_confirmation"
                   class="form-control" placeholder="Ulangi password" required>
        </div>
    </div>

    <button type="submit" class="btn w-100 fw-semibold"
            style="background-color:#f97316;color:#fff">
        <i class="bi bi-person-plus me-2"></i>Daftar Sekarang
    </button>
</form>

<hr class="my-3">
<p class="text-center small mb-0">
    Sudah punya akun?
    <a href="{{ route('login') }}" class="fw-semibold" style="color:#f97316">Masuk di sini</a>
</p>
@endsection
