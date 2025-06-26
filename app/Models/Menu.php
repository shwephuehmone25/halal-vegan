<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'restaurant_id',
        'name',
        'description',
        'price',
        'is_available',
        'sort_id',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_available' => 'boolean',
        'sort_id' => 'integer',
    ];

    /**
     * Get the restaurant that owns the menu item.
     */
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * Scope a query to only include available menu items.
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }
}
