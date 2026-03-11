<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pesanan #{{ $order->id }}</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: DejaVu Sans, Arial, sans-serif; font-size: 12px; color: #1a1a1a; background: #fff; }
        .page { width: 100%; padding: 32px 40px; }
        /* Header */
        .header { display: flex; justify-content: space-between; margin-bottom: 28px; border-bottom: 2px solid #0d6efd; padding-bottom: 16px; }
        .brand-name { font-size: 20px; font-weight: 700; color: #0d6efd; }
        .brand-sub  { font-size: 10px; color: #6c757d; margin-top: 2px; }
        .invoice-title { text-align: right; }
        .invoice-title h1 { font-size: 22px; font-weight: 700; color: #0d6efd; letter-spacing: 1px; }
        .invoice-title p { font-size: 10px; color: #6c757d; margin-top: 2px; }
        /* Meta */
        .meta { display: flex; gap: 40px; margin-bottom: 24px; }
        .meta-block dt { font-size: 9px; text-transform: uppercase; letter-spacing: .6px; color: #6c757d; margin-bottom: 2px; }
        .meta-block dd { font-size: 12px; font-weight: 600; }
        /* Section label */
        .section-label { font-size: 9px; text-transform: uppercase; letter-spacing: .6px; color: #6c757d; margin-bottom: 6px; border-bottom: 1px solid #e9ecef; padding-bottom: 4px; }
        /* Table */
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        thead th { background: #0d6efd; color: #fff; padding: 8px 10px; font-size: 10px; text-transform: uppercase; letter-spacing: .4px; }
        tbody td { padding: 8px 10px; border-bottom: 1px solid #e9ecef; font-size: 11px; }
        tbody tr:last-child td { border-bottom: none; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        /* Totals */
        .totals { width: 220px; margin-left: auto; margin-bottom: 24px; }
        .totals tr td { padding: 4px 0; font-size: 11px; }
        .totals tr.total-row td { font-size: 13px; font-weight: 700; border-top: 2px solid #0d6efd; padding-top: 8px; }
        .totals td.label { color: #6c757d; }
        .totals td.amount { text-align: right; font-weight: 600; }
        /* Footer */
        .footer { margin-top: 32px; border-top: 1px solid #e9ecef; padding-top: 14px; text-align: center; font-size: 9px; color: #adb5bd; }
        /* Status badge */
        .badge { display: inline-block; padding: 2px 8px; border-radius: 20px; font-size: 9px; font-weight: 700; text-transform: uppercase; letter-spacing: .4px; }
        .badge-pending    { background: #fff3cd; color: #856404; }
        .badge-preparing  { background: #cff4fc; color: #055160; }
        .badge-ready      { background: #d1e7dd; color: #0a3622; }
        .badge-cancelled  { background: #f8d7da; color: #58151c; }
        .badge-collected  { background: #6f42c1; color: #fff; }
    </style>
</head>
<body>
<div class="page">

    {{-- Header --}}
    <div class="header">
        <div>
            <div class="brand-name">USK Canteen</div>
            <div class="brand-sub">Sistem Kantin Digital</div>
        </div>
        <div class="invoice-title">
            <h1>INVOICE</h1>
            <p>Dicetak: {{ now()->format('d M Y, H:i') }}</p>
        </div>
    </div>

    {{-- Meta Info --}}
    <div class="meta">
        <div class="meta-block">
            <dl>
                <dt>No. Pesanan</dt>
                <dd>#{{ $order->id }}</dd>
            </dl>
        </div>
        <div class="meta-block">
            <dl>
                <dt>Tanggal Pesan</dt>
                <dd>{{ $order->ordered_at->format('d M Y, H:i') }}</dd>
            </dl>
        </div>
        <div class="meta-block">
            <dl>
                <dt>Jam Istirahat</dt>
                <dd>{{ $order->breakTime->name ?? '-' }}</dd>
            </dl>
        </div>
        <div class="meta-block">
            <dl>
                <dt>Status</dt>
                <dd>
                    @php
                        $color = match($order->status) {
                            'pending'   => 'pending',
                            'preparing' => 'preparing',
                            'ready'     => 'ready',
                            'cancelled' => 'cancelled',
                            'collected' => 'collected',
                            default     => 'pending',
                        };
                    @endphp
                    <span class="badge badge-{{ $color }}">{{ ucfirst($order->status) }}</span>
                </dd>
            </dl>
        </div>
    </div>

    {{-- Customer Info --}}
    <p class="section-label">Informasi Pelanggan</p>
    <table>
        <tbody>
            <tr>
                <td style="width:120px; color:#6c757d;">Nama</td>
                <td>{{ $order->user->name ?? '-' }}</td>
                <td style="width:120px; color:#6c757d;">Email</td>
                <td>{{ $order->user->email ?? '-' }}</td>
            </tr>
        </tbody>
    </table>

    {{-- Order Items --}}
    <p class="section-label">Daftar Item</p>
    <table>
        <thead>
            <tr>
                <th style="width:40px;" class="text-center">No</th>
                <th>Menu</th>
                <th class="text-right" style="width:100px;">Harga Satuan</th>
                <th class="text-center" style="width:60px;">Qty</th>
                <th class="text-right" style="width:110px;">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $i => $item)
            <tr>
                <td class="text-center">{{ $i + 1 }}</td>
                <td>{{ $item->menu_name }}</td>
                <td class="text-right">Rp {{ number_format($item->menu_price, 0, ',', '.') }}</td>
                <td class="text-center">{{ $item->quantity }}</td>
                <td class="text-right">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Totals --}}
    <table class="totals">
        <tr class="total-row">
            <td class="label">Total</td>
            <td class="amount">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
        </tr>
    </table>

    {{-- Footer --}}
    <div class="footer">
        Invoice ini dicetak secara otomatis oleh sistem. &mdash; USK Canteen &copy; {{ date('Y') }}
    </div>
</div>
</body>
</html>
