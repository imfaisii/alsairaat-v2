<?php

namespace App\Models;

use App\Models\Scopes\RestrictionScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Society extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new RestrictionScope());
    }

    /**
     * Get the user that owns the Society
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the plots for the Society
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plots(): HasMany
    {
        return $this->hasMany(Plot::class, 'society_id', 'id');
    }
}
