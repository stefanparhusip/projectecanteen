<?php

namespace App\Events;

use App\Models\BalanceTransaction;
use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;

class TopupApproved
{
    use Dispatchable;

    public function __construct(
        public readonly User $user,
        public readonly BalanceTransaction $transaction,
    ) {}

    public function toWebhookPayload(): array
    {
        return [
            'transaction_id' => $this->transaction->id,
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
            ],
            'amount' => (float) $this->transaction->amount,
            'balance_before' => (float) $this->transaction->balance_before,
            'balance_after' => (float) $this->transaction->balance_after,
            'approved_at' => $this->transaction->updated_at?->toIso8601String(),
        ];
    }
}
