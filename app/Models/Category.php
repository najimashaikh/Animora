<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'subtitle',
        'description',
        'icon_type',
        'item_count_label',
        'sort_order',
        'is_featured',
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
