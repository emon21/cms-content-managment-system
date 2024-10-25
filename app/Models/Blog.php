<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'cat_id',
        'tags',
        'description',
        'author',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'status',
        'image',
        'publish_date',

    ];

   
    // Relationship

    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
