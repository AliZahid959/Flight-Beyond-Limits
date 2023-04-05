<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'meta_keyword' => 'array'
    ];


    public function getIndustryImageAttribute()
    {
        return asset('storage/'. $this->attributes['industry_image']);
    }

    /**
     * Get all of the comments for the Industry
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany(IndustryCategory::class);
    }
}
