<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    // protected $table = 'software';

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'meta_keyword' => 'array'
    ];

    public function getBannerSoftwareImageAttribute()
    {
        if($this->attributes['software_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/softwares/banner/'.$this->attributes['software_image']);
    }
    public function getThumbnailSoftwareImageAttribute()
    {
        if($this->attributes['software_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/softwares/thumbnail/'.$this->attributes['software_image']);
    }

    public function getSoftwareImageAttribute()
    {
        return asset('storage/'.$this->attributes['software_image']);
    }

   
}
