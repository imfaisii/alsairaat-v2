<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'husband_name',
        'cnic',
        'mobile_number',
        'address',
        'email',
        'reference',
        'user_id',
    ];

    /**
     * Get all of the plots for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plots(): HasMany
    {
        return $this->hasMany(Plot::class);
    }
}
