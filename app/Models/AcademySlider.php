<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AcademySlider extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);

        // $this->attributes['slug'] = Carbon::now()->timestamp;

    }

    public function getSliderImageAttribute()
    {
        return asset('storage/'.$this->attributes['slider_image']);
    }
}
