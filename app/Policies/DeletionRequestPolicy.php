<?php

namespace App\Policies;

use App\Models\DeletionRequest;
use App\Models\User;

class DeletionRequestPolicy
{
    public function cancel(User $user, DeletionRequest $deletionRequest): bool
    {
        return $user->id === $deletionRequest->user_id;
    }
}
