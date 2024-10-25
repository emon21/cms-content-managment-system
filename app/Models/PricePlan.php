<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'type',
        'cat_id',
        'feature',
        'status'
    ];

    //RelationShip
    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
