<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type',
        'phone_number',
        'address',
        'email',
        'website',
        'sort_id',
        'is_active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string,string>
     */
    protected $casts = [
        'sort_id' => 'integer',
        'is_active' => 'boolean',
    ];

    /**
     * Scope a query to only include active restaurants.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
