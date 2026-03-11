@extends('layouts.app')
@section('title', 'Tambah Waktu Istirahat')

@section('content')
<div class="row justify-content-center">
<div class="col-lg-6">
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-0 pt-3">
            <h5 class="fw-bold mb-0">Tambah Waktu Istirahat</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.break-times.store') }}" method="POST">
                @csrf
                @include('admin.break-times._form')
                <div class="d-flex gap-2">
                    <button type="submit" class="btn fw-semibold"
                            style="background:#f97316;color:#fff">
                        <i class="bi bi-plus-lg me-1"></i>Simpan
                    </button>
                    <a href="{{ route('admin.break-times.index') }}" class="btn btn-outline-secondary">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
