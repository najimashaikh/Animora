<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'software',
        'file_format',
        'filesize',
        'preview_image',
        'download_count',
        'rating',
        'is_featured',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
        'rating' => 'float',
        'is_featured' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
