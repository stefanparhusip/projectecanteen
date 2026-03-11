<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Pengambilan – Pesanan #{{ $order->id }}</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #fff;
            color: #212529;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2rem;
        }

        .ticket {
            border: 2px solid #198754;
            border-radius: 16px;
            padding: 2rem;
            max-width: 340px;
            width: 100%;
            text-align: center;
        }

        .ticket-header {
            font-size: 1.1rem;
            font-weight: 700;
            color: #198754;
            margin-bottom: .5rem;
        }

        .ticket-subheader {
            font-size: .8rem;
            color: #6c757d;
            margin-bottom: 1.5rem;
        }

        canvas {
            display: block;
            margin: 0 auto 1.5rem;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            font-size: .82rem;
            padding: .3rem 0;
            border-bottom: 1px solid #dee2e6;
        }
        .info-row:last-child { border-bottom: none; }
        .info-label { color: #6c757d; }
        .info-value { font-weight: 600; }

        .expiry {
            font-size: .75rem;
            color: #dc3545;
            margin-top: 1.2rem;
        }

        .print-btn {
            margin-top: 1.5rem;
            padding: .5rem 1.5rem;
            background: #198754;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: .9rem;
        }
        .print-btn:hover { background: #157347; }

        @media print {
            body { padding: 0; justify-content: flex-start; }
            .print-btn { display: none; }
        }
    </style>
</head>
<body>

<div class="ticket">
    <div class="ticket-header">🍱 E-Kantin – Tiket Pengambilan</div>
    <div class="ticket-subheader">Tunjukkan QR ini kepada petugas</div>

    <canvas id="qr-canvas"></canvas>

    <div class="info-row">
        <span class="info-label">No. Pesanan</span>
        <span class="info-value">#{{ $order->id }}</span>
    </div>
    <div class="info-row">
        <span class="info-label">Pemesan</span>
        <span class="info-value">{{ $order->user->name ?? auth()->user()->name }}</span>
    </div>
    <div class="info-row">
        <span class="info-label">Waktu Ambil</span>
        <span class="info-value">{{ $order->breakTime->label }}</span>
    </div>
    <div class="info-row">
        <span class="info-label">Total</span>
        <span class="info-value">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
    </div>

    <div class="expiry">
        ⏰ Berlaku hingga {{ $order->orderQr->expires_at->format('H:i') }} WIB
    </div>

    <button class="print-btn" onclick="window.print()">🖨️ Cetak</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.4/build/qrcode.min.js"></script>
<script>
QRCode.toCanvas(
    document.getElementById('qr-canvas'),
    {{ json_encode($order->orderQr->token) }},
    { width: 240, margin: 2 }
);
</script>
</body>
</html>
