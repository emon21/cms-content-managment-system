<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'cat_id',
        'status',
        'image',
    ];

    // Relationship

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
