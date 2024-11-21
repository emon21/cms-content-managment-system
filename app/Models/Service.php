<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
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

    # limit String
    // protected $appends = ['limit_string'];

    // const LIMIT = 50;
    // public function limit()
    // {
    //     // return Str::limit($this->description, self::LIMIT, '...');
    //     return Str::limit($this->description,Service::LIMIT);
    // }



    // Relationship
    public function category() // cat_id => category model
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    //child model -> belongsTo
    // public function plan() // plan_id => PricePlan model
    // {
    //     return $this->belongsTo(PricePlan::class, 'plan_id');
    // }

    // public function plan() // plan_id => PricePlan model
    // {
    //     return $this->hasMany(PricePlan::class,'plan_id');
    // }

    public function plans()
    {
        return $this->belongsToMany(PricePlan::class, 'plan_service', 'service_id', 'plan_id');
        // return $this->belongsToMany(PricePlan::class);
    }
}
