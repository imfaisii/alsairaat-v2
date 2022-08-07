<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plot extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'size',
        'street',
        'status',
        'plot_type_id',
        'society_id',
        'user_id',
        'customer_id',
    ];

    /**
     * Get the user that owns the Plot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the society that owns the Plot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function society(): BelongsTo
    {
        return $this->belongsTo(Society::class);
    }

    /**
     * Get the customer that owns the Plot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the plotType that owns the Plot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plotType(): BelongsTo
    {
        return $this->belongsTo(PlotType::class);
    }
}
