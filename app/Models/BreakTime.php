<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BreakTime extends Model
{
    protected $fillable = [
        'label',
        'start_time',
        'end_time',
        'order_deadline',
    ];

    /**
     * Cast kolom waktu ke Carbon agar konsisten bisa dipanggil ->format('H:i').
     * Carbon::parse() pada string waktu '07:00:00' menghasilkan Carbon yang valid.
     */
    protected function casts(): array
    {
        return [
            'start_time' => 'datetime',
            'end_time' => 'datetime',
            'order_deadline' => 'datetime',
        ];
    }

    // ── Helper ──────────────────────────────────────────────────────────────

    /**
     * Cek apakah slot ini masih bisa dipesan saat ini.
     *
     * Syarat:
     *  1. Waktu sekarang >= 07:00 (jam buka pemesanan)
     *  2. Waktu sekarang <= order_deadline slot ini
     */
    public function canOrder(): bool
    {
        $now = now(); // pakai timezone app (Asia/Jakarta)
        $openAt = Carbon::today()->setHour(7)->setMinute(0)->setSecond(0);

        // Bangun deadline hari ini dari raw DB string misal "09:30:00"
        $deadline = Carbon::parse($this->getRawOriginal('order_deadline'));

        return $now->gte($openAt) && $now->lte($deadline);
    }

    /**
     * Kembalikan Carbon deadline hari ini untuk slot ini.
     */
    public function deadlineToday(): Carbon
    {
        return Carbon::parse($this->getRawOriginal('order_deadline'));
    }

    // ── Relasi ──────────────────────────────────────────────────────────────

    /** Pesanan yang dijadwalkan pada waktu istirahat ini */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
