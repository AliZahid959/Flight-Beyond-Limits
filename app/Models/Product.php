<?php

namespace App\Models;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'meta_keyword' => 'array'
    ];

    public function getBannerProductImageAttribute()
    {
        if($this->attributes['product_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/products/banner/'.$this->attributes['product_image']);
    }
    public function getThumbnailProductImageAttribute()
    {
        if($this->attributes['product_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/products/thumbnail/'.$this->attributes['product_image']);
    }

    public function getProductVideoAttribute()
    {
        return asset('storage/'.$this->attributes['product_video']);
    }



    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class , 'product_category_id');
    }
}
