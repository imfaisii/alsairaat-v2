<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the societies for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function societies(): HasMany
    {
        return $this->hasMany(Society::class, 'user_id', 'id');
    }

    /**
     * Get all of the plots for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plots(): HasMany
    {
        return $this->hasMany(Plot::class, 'user_id', 'id');
    }

    /**
     * Get all of the customers for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class, 'user_id', 'id');
    }

    /**
     * Get all of the expenses for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class, 'user_id', 'id');
    }

    /**
     * Get all of the plotSales for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plotSales(): HasMany
    {
        return $this->hasMany(PlotSale::class, 'user_id', 'id');
    }

    /**
     * Get all of the assigner for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assigner(): HasMany
    {
        return $this->hasMany(AssignedSociety::class, 'assigned_by', 'id');
    }
}
