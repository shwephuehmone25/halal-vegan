<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Menu extends Model
{
    protected $fillable = [
        'restaurant_id',
        'name',
        'image',
        'description',
        'category',
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
     * Resolve both bundled public images and images uploaded to S3.
     */
    public function getImageUrlAttribute(): ?string
    {
        if (! $this->image) {
            return null;
        }

        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        }

        if (str_starts_with($this->image, 'img/')) {
            return asset($this->image);
        }

        return Storage::disk(config('filesystems.media'))->url($this->image);
    }

    /**
     * Scope a query to only include available menu items.
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }
}
