@extends('layouts.app')
@section('title', 'Feature Flags')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Feature Flags</h5>
        <p class="text-muted small mb-0">Kelola pengaktifan fitur dengan rollout bertahap dan A/B testing</p>
    </div>
    <a href="{{ route('admin.feature-flags.create') }}" class="btn fw-semibold"
       style="background:#f97316;color:#fff">
        <i class="bi bi-plus-lg me-1"></i>Tambah Flag
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card border-0 shadow-sm rounded-3">
    <div class="card-body p-0">
        @if($flags->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-toggles fs-1 d-block mb-2"></i>
                Belum ada feature flag. <a href="{{ route('admin.feature-flags.create') }}">Buat sekarang</a>.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Key</th>
                        <th>Nama</th>
                        <th class="text-center">Rollout</th>
                        <th class="text-center">A/B</th>
                        <th class="text-center">Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flags as $flag)
                    <tr>
                        <td><code class="text-primary">{{ $flag->key }}</code></td>
                        <td>
                            <span class="fw-semibold">{{ $flag->name }}</span>
                            @if($flag->description)
                                <br><small class="text-muted">{{ Str::limit($flag->description, 60) }}</small>
                            @endif
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark border">{{ $flag->rollout_percentage }}%</span>
                        </td>
                        <td class="text-center">
                            @if($flag->has_ab_variants)
                                <span class="badge bg-info text-white" title="{{ $flag->variant_a_label }} / {{ $flag->variant_b_label }}">
                                    A/B
                                </span>
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="form-check form-switch d-inline-flex mb-0">
                                <input class="form-check-input toggle-flag"
                                       type="checkbox"
                                       role="switch"
                                       id="toggle-{{ $flag->id }}"
                                       data-url="{{ route('admin.feature-flags.toggle', $flag) }}"
                                       {{ $flag->is_enabled ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-1 justify-content-end">
                                <a href="{{ route('admin.feature-flags.edit', $flag) }}"
                                   class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-pencil me-1"></i>Edit
                                </a>
                                <form action="{{ route('admin.feature-flags.destroy', $flag) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus flag &quot;{{ $flag->key }}&quot;?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash3 me-1"></i>Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
document.querySelectorAll('.toggle-flag').forEach(toggle => {
    toggle.addEventListener('change', async function () {
        const url = this.dataset.url;
        const checkbox = this;

        try {
            const res = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
            });

            if (!res.ok) throw new Error('Request gagal');

            const data = await res.json();
            // State already flipped by browser; confirm visually via data
            checkbox.checked = data.enabled;
        } catch (e) {
            // Revert on error
            checkbox.checked = !checkbox.checked;
            alert('Gagal memperbarui status flag. Coba lagi.');
        }
    });
});
</script>
@endpush
