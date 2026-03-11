<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecurringOrder extends Model
{
    protected $fillable = [
        'user_id',
        'menu_id',
        'qty',
        'day_of_week',
        'break_time_id',
        'is_active',
        'last_run_at',
    ];

    protected function casts(): array
    {
        return [
            'qty' => 'integer',
            'day_of_week' => 'integer',
            'is_active' => 'boolean',
            'last_run_at' => 'datetime',
        ];
    }

    // ── Nama hari berbahasa Indonesia ────────────────────────────────────────

    const DAY_NAMES = [
        0 => 'Minggu',
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
    ];

    /** Label hari dari integer day_of_week */
    public function getDayNameAttribute(): string
    {
        return self::DAY_NAMES[$this->day_of_week] ?? '?';
    }

    // ── Scope ────────────────────────────────────────────────────────────────

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /** Recurring orders yang dijadwalkan hari ini (berdasarkan day_of_week) */
    public function scopeForToday(Builder $query): Builder
    {
        return $query->where('day_of_week', (int) now()->format('w'));
    }

    // ── Relasi ───────────────────────────────────────────────────────────────

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function breakTime(): BelongsTo
    {
        return $this->belongsTo(BreakTime::class);
    }
}
