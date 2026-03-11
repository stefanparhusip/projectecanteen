<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'is_super_admin',
        'balance',
        'points_balance',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'balance' => 'decimal:2',
            'points_balance' => 'integer',
            'is_super_admin' => 'boolean',
        ];
    }

    // ── Helpers ─────────────────────────────────────────────────────────────

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isSuperAdmin(): bool
    {
        return $this->isAdmin() && (bool) $this->is_super_admin;
    }

    // ── Relasi ──────────────────────────────────────────────────────────────

    /** Semua pesanan milik user ini */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /** Semua mutasi saldo milik user ini */
    public function balanceTransactions(): HasMany
    {
        return $this->hasMany(BalanceTransaction::class);
    }

    /** Semua mutasi poin milik user ini */
    public function pointTransactions(): HasMany
    {
        return $this->hasMany(PointTransaction::class);
    }

    /** Semua override feature flag untuk user ini */
    public function featureFlagOverrides(): HasMany
    {
        return $this->hasMany(UserFeatureFlagOverride::class);
    }

    /** Permintaan ekspor data GDPR */
    public function dataExportRequests(): HasMany
    {
        return $this->hasMany(DataExportRequest::class);
    }

    /** Permintaan penghapusan akun (Right to be Forgotten) */
    public function deletionRequests(): HasMany
    {
        return $this->hasMany(DeletionRequest::class);
    }
}
