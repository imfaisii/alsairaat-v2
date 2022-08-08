<?php

namespace App\Models\Scopes;

use App\Models\Society;
use App\Traits\Restrictable;
use App\Traits\RestrictionTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Gate;

class RestrictionScope implements Scope
{
    use Restrictable;

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $model instanceof Society
            ? $condition = "id"
            : $condition = "society_id";

        if (Gate::allows('is-a'))
            return $builder->whereIn($condition, $this->getCurrentUserSocietiesArray());
    }
}
