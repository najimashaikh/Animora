<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'short_description',
        'long_description',
        'is_featured_home',
        'sort_order',
    ];

    protected $casts = [
        'is_featured_home' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Get resolved image URL whether it is an absolute URL or local path.
     */
    public function getImageAttribute()
    {
        if (!$this->image_url) {
            return asset('images/hero.jpg');
        }

        if (str_starts_with($this->image_url, 'http://') || 
            str_starts_with($this->image_url, 'https://') || 
            str_starts_with($this->image_url, '//')) {
            return $this->image_url;
        }

        return asset($this->image_url);
    }
}
