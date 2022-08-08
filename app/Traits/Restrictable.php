<?php

namespace App\Traits;

use App\Models\AssignedSociety;

trait Restrictable
{
    public function getCurrentUserSocietiesArray()
    {
        return AssignedSociety::whereBelongsTo(auth()->user())->whereNotNull('society_id')->pluck('society_id')->toArray();
    }
}
