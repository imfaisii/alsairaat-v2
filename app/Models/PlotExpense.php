<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlotExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'plot_id',
        'expense_id'
    ];

    /**
     * Get the plot that owns the PlotExpense
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plot(): BelongsTo
    {
        return $this->belongsTo(Plot::class);
    }

    /**
     * Get the society that owns the PlotExpense
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expense(): BelongsTo
    {
        return $this->belongsTo(Expense::class);
    }
}
