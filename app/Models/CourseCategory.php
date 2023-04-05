<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    // public function getCategoryIconAttribute()
    // {
    //     return asset('storage/'.$this->attributes['category_icon']);
    // }


    /**
     * Get all of the comments for the courseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    // public function courses()
    // {
    //     return $this->hasOne(Course::class);
    // }

}
