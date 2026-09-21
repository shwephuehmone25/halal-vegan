<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'city',
        'type',
        'location',
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

    public function menus()
    {
        return $this->hasMany(Menu::class);
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

        if (is_file(public_path($this->image))) {
            return asset($this->image);
        }

        return Storage::disk(config('filesystems.media'))->url($this->image);
    }
}
