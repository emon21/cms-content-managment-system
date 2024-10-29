<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'image',
        'status',
    ];

    // default value of image
    // public function getImageAttribute($value)
    // {
    //     return asset($value);
    // }

    # Default Image
    // public function getImage()
    // {
    //     return asset('uploads/no-image.png');
    // }

    // public function setImageAttribute($value)
    // {
    //     if (!empty($value)) {
    //         $this->attributes['image'] = $value;
    //     }
    // }
}
