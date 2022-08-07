<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class PlotSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'discount',
        'reference',
        'total',
        'plot_id',
        'customer_id',
        'user_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->total = $model->price - ($model->discount ?? 0);
        });
    }

    /**
     * Get the user that owns the PlotSale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the plot that owns the PlotSale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plot(): BelongsTo
    {
        return $this->belongsTo(Plot::class);
    }

    /**
     * Get the customer that owns the PlotSale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
