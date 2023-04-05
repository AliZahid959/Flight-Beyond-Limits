<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'banner_image' => 'array'
    ];

    public function getSiteFaviconAttribute()
    {
        return asset('storage/'. $this->attributes['site_favicon']);
    }
    public function getSiteLogoAttribute()
    {
        return asset('storage/'. $this->attributes['site_logo']);
    }
    public function getBannerImage1Attribute()
    {
        return asset('storage/'. $this->attributes['banner_image1']);
    }
    public function getBannerImage2Attribute()
    {
        return asset('storage/'. $this->attributes['banner_image2']);
    }
    // public function getCourseBanner1ImageAttribute()
    // {
    //     return asset('storage/'.$this->attributes['banner_image1']);
    // }

}
