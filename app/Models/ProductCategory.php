<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
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
     * Get all of the comments for the ProductCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class)->where('status' , 'Publish');
    }

}
