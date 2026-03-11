<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataExportRequest extends Model
{
    protected $fillable = [
        'user_id',
        'status',
        'format',
        'file_path',
        'file_size',
        'expires_at',
        'completed_at',
        'downloaded_at',
        'ip_address',
    ];

    protected function casts(): array
    {
        return [
            'expires_at'    => 'datetime',
            'completed_at'  => 'datetime',
            'downloaded_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isDownloadable(): bool
    {
        return $this->status === 'ready'
            && $this->file_path !== null
            && ($this->expires_at === null || $this->expires_at->isFuture());
    }

    public function isExpired(): bool
    {
        return $this->expires_at !== null && $this->expires_at->isPast();
    }
}
