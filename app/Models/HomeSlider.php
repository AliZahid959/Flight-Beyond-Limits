<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function getSliderVideoAttribute()
    {
        return asset('storage/'.$this->attributes['slider_video']);
    }
}
