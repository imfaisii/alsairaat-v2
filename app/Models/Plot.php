<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plot extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'size',
        'street',
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

    /**
     * Get all of the plotExpenses for the Plot
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plotExpenses(): HasMany
    {
        return $this->hasMany(PlotExpense::class, 'plot_id', 'id');
    }
}
