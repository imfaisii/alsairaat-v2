<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignedSociety extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'assigned_by',
        'society_id',
    ];

    /**
     * Get the user that owns the AssignedSociety
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user that owns the AssignedSociety
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assigner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_by', 'id');
    }
    /**
     * Get the society that owns the AssignedSociety
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function society(): BelongsTo
    {
        return $this->belongsTo(Society::class, 'society_id', 'id');
    }
}
