@extends('layouts.app')
@section('title', 'Scanner QR Pengambilan')

@section('content')

<div class="mb-4 d-flex align-items-center gap-3">
    <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Kembali
    </a>
    <h5 class="fw-bold mb-0"><i class="bi bi-qr-code-scan me-2 text-primary"></i>Scanner QR Pengambilan</h5>
</div>

<div class="row justify-content-center g-3">

    {{-- Scanner kamera --}}
    <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-camera-video me-2 text-success"></i>Kamera</h6>
            </div>
            <div class="card-body text-center">
                <div id="camera-wrapper" class="position-relative d-inline-block">
                    <video id="camera-preview" class="rounded-3 border w-100"
                           style="max-width:320px;aspect-ratio:1;object-fit:cover;background:#000"></video>
                    <canvas id="camera-canvas" class="d-none"></canvas>
                    {{-- Overlay viewfinder --}}
                    <div class="position-absolute top-50 start-50 translate-middle"
                         style="width:160px;height:160px;border:2px solid rgba(255,255,255,.6);
                                border-radius:8px;box-shadow:0 0 0 4000px rgba(0,0,0,.4);pointer-events:none"></div>
                </div>
                <div id="camera-status" class="small text-muted mt-2">Klik tombol untuk mengaktifkan kamera.</div>
                <div class="d-flex gap-2 justify-content-center mt-3">
                    <button id="btn-start-camera" class="btn btn-success btn-sm">
                        <i class="bi bi-camera-video me-1"></i>Aktifkan Kamera
                    </button>
                    <button id="btn-stop-camera" class="btn btn-outline-secondary btn-sm d-none">
                        <i class="bi bi-stop-circle me-1"></i>Hentikan
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Input manual + hasil --}}
    <div class="col-lg-5">

        {{-- Form token manual --}}
        <div class="card border-0 shadow-sm rounded-3 mb-3">
            <div class="card-header bg-white border-0 pt-3 pb-1">
                <h6 class="fw-bold mb-0"><i class="bi bi-keyboard me-2 text-secondary"></i>Input Token Manual</h6>
            </div>
            <div class="card-body">
                <p class="small text-muted mb-3">
                    Token terisi otomatis saat QR berhasil di-scan kamera.
                    Atau tempel token secara manual.
                </p>
                <div class="mb-3">
                    <label for="token-input" class="form-label small fw-semibold">Token QR</label>
                    <div class="input-group">
                        <input type="text" id="token-input" class="form-control font-monospace small"
                               placeholder="64 karakter…" maxlength="64" autocomplete="off">
                        <button id="btn-clear-token" class="btn btn-outline-secondary btn-sm" type="button"
                                title="Hapus">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div id="token-counter" class="form-text text-end">0 / 64</div>
                </div>
                <button id="btn-process" class="btn btn-primary w-100" disabled>
                    <i class="bi bi-check2-circle me-1"></i>Proses Pengambilan
                </button>
            </div>
        </div>

        {{-- Hasil scan --}}
        <div id="scan-result" class="d-none">
            <div id="result-card" class="card border-0 shadow-sm rounded-3">
                <div id="result-header" class="card-header border-0 pt-3 pb-1">
                    <h6 class="fw-bold mb-0" id="result-title"></h6>
                </div>
                <div class="card-body" id="result-body"></div>
            </div>
        </div>

    </div>
</div>

{{-- jsQR (pure-JS QR decoder — no server needed) --}}
<script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.js"></script>

<script>
(function () {
    const videoEl      = document.getElementById('camera-preview');
    const canvasEl     = document.getElementById('camera-canvas');
    const statusEl     = document.getElementById('camera-status');
    const btnStart     = document.getElementById('btn-start-camera');
    const btnStop      = document.getElementById('btn-stop-camera');
    const tokenInput   = document.getElementById('token-input');
    const tokenCounter = document.getElementById('token-counter');
    const btnClear     = document.getElementById('btn-clear-token');
    const btnProcess   = document.getElementById('btn-process');
    const scanResult   = document.getElementById('scan-result');
    const resultCard   = document.getElementById('result-card');
    const resultHeader = document.getElementById('result-header');
    const resultTitle  = document.getElementById('result-title');
    const resultBody   = document.getElementById('result-body');

    let stream    = null;
    let rafId     = null;
    let lastScan  = 0;          // debounce: min 2 s between consecutive scans
    let scanning  = false;

    // ── Token input helpers ──────────────────────────────────────────────────

    function updateTokenUI() {
        const len = tokenInput.value.trim().length;
        tokenCounter.textContent = `${len} / 64`;
        btnProcess.disabled = len !== 64;
    }

    tokenInput.addEventListener('input', updateTokenUI);
    btnClear.addEventListener('click', function () {
        tokenInput.value = '';
        updateTokenUI();
        scanResult.classList.add('d-none');
    });

    // ── Camera ───────────────────────────────────────────────────────────────

    btnStart.addEventListener('click', async function () {
        if (scanning) return;
        try {
            stream = await navigator.mediaDevices.getUserMedia({
                video: { facingMode: 'environment', width: 640, height: 640 }
            });
            videoEl.srcObject = stream;
            await videoEl.play();
            scanning = true;
            btnStart.classList.add('d-none');
            btnStop.classList.remove('d-none');
            statusEl.textContent = 'Arahkan QR ke kamera…';
            canvasEl.width  = 640;
            canvasEl.height = 640;
            rafId = requestAnimationFrame(tick);
        } catch (err) {
            statusEl.textContent = 'Gagal mengakses kamera: ' + err.message;
        }
    });

    btnStop.addEventListener('click', stopCamera);

    function stopCamera() {
        scanning = false;
        if (rafId) cancelAnimationFrame(rafId);
        if (stream) stream.getTracks().forEach(t => t.stop());
        videoEl.srcObject = null;
        btnStop.classList.add('d-none');
        btnStart.classList.remove('d-none');
        statusEl.textContent = 'Kamera dihentikan.';
    }

    function tick() {
        if (!scanning) return;
        if (videoEl.readyState === videoEl.HAVE_ENOUGH_DATA) {
            const ctx = canvasEl.getContext('2d');
            ctx.drawImage(videoEl, 0, 0, canvasEl.width, canvasEl.height);
            const imgData = ctx.getImageData(0, 0, canvasEl.width, canvasEl.height);
            const code    = jsQR(imgData.data, imgData.width, imgData.height, {
                inversionAttempts: 'dontInvert',
            });
            if (code) {
                const now = Date.now();
                if (now - lastScan > 2000) {
                    lastScan = now;
                    const raw = code.data.trim();
                    // Accept either a raw 64-char token or a URL ending with /qr?token=...
                    const token = raw.length === 64 ? raw : (new URLSearchParams(raw.split('?')[1] || '')).get('token') || raw;
                    if (token.length === 64) {
                        tokenInput.value = token;
                        updateTokenUI();
                        statusEl.textContent = '✓ QR terdeteksi — klik Proses untuk melanjutkan.';
                        stopCamera();
                    }
                }
            }
        }
        rafId = requestAnimationFrame(tick);
    }

    // ── Process token ────────────────────────────────────────────────────────

    btnProcess.addEventListener('click', async function () {
        const token = tokenInput.value.trim();
        if (token.length !== 64) return;

        btnProcess.disabled = true;
        btnProcess.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span>Memproses…';
        scanResult.classList.add('d-none');

        try {
            const resp = await fetch('{{ route('admin.qr.process') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN':  document.querySelector('meta[name="csrf-token"]').content,
                    'Accept':        'application/json',
                },
                body: JSON.stringify({ token }),
            });

            const data = await resp.json();

            scanResult.classList.remove('d-none');

            if (data.success) {
                resultHeader.className  = 'card-header border-0 pt-3 pb-1 bg-success bg-opacity-10';
                resultTitle.className   = 'fw-bold mb-0 text-success';
                resultTitle.innerHTML   = '<i class="bi bi-check-circle-fill me-2"></i>Berhasil';
                resultBody.innerHTML    = `
                    <p class="mb-1 small">${data.message}</p>
                    <table class="table table-sm small mb-0">
                        <tr><td class="text-muted">Pesanan</td><td>#${data.order.order_id}</td></tr>
                        <tr><td class="text-muted">Pemesan</td><td>${data.order.user_name}</td></tr>
                        <tr><td class="text-muted">Waktu Ambil</td><td>${data.order.break_time}</td></tr>
                        <tr><td class="text-muted">Total</td><td class="fw-semibold">${data.order.total}</td></tr>
                    </table>`;
                tokenInput.value = '';
                updateTokenUI();
            } else {
                resultHeader.className = 'card-header border-0 pt-3 pb-1 bg-danger bg-opacity-10';
                resultTitle.className  = 'fw-bold mb-0 text-danger';
                resultTitle.innerHTML  = '<i class="bi bi-x-circle-fill me-2"></i>Gagal';
                resultBody.innerHTML   = `<p class="mb-0 small">${data.message}</p>`;
            }
        } catch (err) {
            scanResult.classList.remove('d-none');
            resultHeader.className = 'card-header border-0 pt-3 pb-1 bg-warning bg-opacity-10';
            resultTitle.className  = 'fw-bold mb-0 text-warning';
            resultTitle.innerHTML  = '<i class="bi bi-exclamation-triangle-fill me-2"></i>Error';
            resultBody.innerHTML   = `<p class="mb-0 small">Gagal menghubungi server: ${err.message}</p>`;
        }

        btnProcess.disabled = tokenInput.value.trim().length !== 64;
        btnProcess.innerHTML = '<i class="bi bi-check2-circle me-1"></i>Proses Pengambilan';
    });

})();
</script>

@endsection
