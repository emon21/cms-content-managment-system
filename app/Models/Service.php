<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'heading',
        'cat_id',
        'plan_id',
        'status',
        'icon',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image',

    ];

    // Relationship
    public function category() // cat_id => category model
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
    public function plan() // plan_id => PricePlan model
    {
        return $this->belongsTo(PricePlan::class, 'plan_id');
    }
}
