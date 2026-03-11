<?php

namespace App\Policies;

use App\Models\DataExportRequest;
use App\Models\User;

class DataExportRequestPolicy
{
    public function download(User $user, DataExportRequest $exportRequest): bool
    {
        return $user->id === $exportRequest->user_id;
    }
}
