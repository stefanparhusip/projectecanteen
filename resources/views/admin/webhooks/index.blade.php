@extends('layouts.app')
@section('title', 'Webhook Outbound')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-bold mb-0">Webhook Outbound</h5>
        <p class="text-muted small mb-0">Kirim notifikasi ke layanan eksternal (dapur, akuntansi, WhatsApp)</p>
    </div>
    <a href="{{ route('admin.webhooks.create') }}" class="btn fw-semibold"
       style="background:#f97316;color:#fff">
        <i class="bi bi-plus-lg me-1"></i>Tambah Webhook
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
        @if($webhooks->isEmpty())
            <div class="text-center py-5 text-muted">
                <i class="bi bi-broadcast fs-1 d-block mb-2"></i>
                Belum ada webhook. <a href="{{ route('admin.webhooks.create') }}">Tambah sekarang</a>.
            </div>
        @else
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>URL Endpoint</th>
                        <th>Events</th>
                        <th class="text-center">Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($webhooks as $webhook)
                    <tr>
                        <td class="fw-semibold">{{ $webhook->name }}</td>
                        <td>
                            <span class="text-muted font-monospace small">{{ Str::limit($webhook->url, 50) }}</span>
                        </td>
                        <td>
                            @foreach($webhook->events as $event)
                                @php $label = \App\Models\Webhook::ALL_EVENTS[$event] ?? $event; @endphp
                                <span class="badge bg-secondary me-1">{{ $label }}</span>
                            @endforeach
                        </td>
                        <td class="text-center">
                            @if($webhook->is_active)
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-secondary">Nonaktif</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-1 justify-content-end flex-wrap">
                                <button type="button"
                                        class="btn btn-sm btn-outline-info btn-test-ping"
                                        data-url="{{ route('admin.webhooks.test-ping', $webhook) }}"
                                        data-name="{{ $webhook->name }}">
                                    <i class="bi bi-wifi me-1"></i>Ping
                                </button>
                                <a href="{{ route('admin.webhooks.edit', $webhook) }}"
                                   class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-pencil me-1"></i>Edit
                                </a>
                                <form action="{{ route('admin.webhooks.destroy', $webhook) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus webhook {{ $webhook->name }}?')">
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

{{-- Toast notifikasi ping --}}
<div class="position-fixed bottom-0 end-0 p-3" style="z-index:1100">
    <div id="pingToast" class="toast" role="alert">
        <div class="toast-header">
            <i class="bi bi-broadcast me-2 text-info"></i>
            <strong class="me-auto">Webhook Ping</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body" id="pingToastBody">—</div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.querySelectorAll('.btn-test-ping').forEach(btn => {
    btn.addEventListener('click', async function () {
        const url  = this.dataset.url;
        const name = this.dataset.name;
        this.disabled = true;
        this.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span>Testing…';

        try {
            const res  = await fetch(url, {
                method: 'POST',
                headers: {'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content},
            });
            const json = await res.json();
            document.getElementById('pingToastBody').textContent =
                name + ': ' + json.message;
        } catch (e) {
            document.getElementById('pingToastBody').textContent =
                name + ': Gagal terhubung ke server.';
        }

        this.disabled = false;
        this.innerHTML = '<i class="bi bi-wifi me-1"></i>Ping';
        bootstrap.Toast.getOrCreateInstance(document.getElementById('pingToast')).show();
    });
});
</script>
@endpush
