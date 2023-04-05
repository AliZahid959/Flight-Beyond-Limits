<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPageManager extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    
    public function getBannerImageAttribute()
    {
        return asset('storage/'.$this->attributes['banner_image']);
    }

    public function getHonestySectionImageAttribute()
    {
        return asset('storage/'.$this->attributes['honesty_section_image']);
    }

    public function getInnovationSectionImageAttribute()
    {
        return asset('storage/'.$this->attributes['innovation_section_image']);
    }

    public function getCommitmentSectionImageAttribute()
    {
        return asset('storage/'.$this->attributes['commitment_section_image']);
    }

}
