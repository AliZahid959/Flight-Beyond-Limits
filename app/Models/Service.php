<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'meta_keyword' => 'array'
    ];

    public function getBannerServiceImageAttribute()
    {
        if($this->attributes['service_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/services/banner/'.$this->attributes['service_image']);

        
    }
    public function getThumbnailServiceImageAttribute()
    {
        if($this->attributes['service_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/services/thumbnail/'.$this->attributes['service_image']);
        
    }

    public function getDropdownServiceImageAttribute()
    {
        if($this->attributes['service_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/services/dropdown/'.$this->attributes['service_image']);
        
    }

    public function getServiceImageAttribute()
    {
        return asset('storage/'.$this->attributes['service_image']);
    }

    public function getServiceBannerImageAttribute()
    {
        return asset('storage/'.$this->attributes['service_banner_image']);
    }

}
