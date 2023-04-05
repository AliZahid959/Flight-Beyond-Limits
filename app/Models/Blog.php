<?php

namespace App\Models;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    protected $casts = [
        'meta_keyword' => 'array'
    ];


    public function getBannerBlogImageAttribute()
    {
        if($this->attributes['blog_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/blogs/banner/'.$this->attributes['blog_image']);
    }
    public function getThumbnailBlogImageAttribute()
    {
        if($this->attributes['blog_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/blogs/thumbnail/'.$this->attributes['blog_image']);
    }


    public function getBlogImageAttribute()
    {
        return asset('storage/'.$this->attributes['blog_image']);
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

     public function comments()
     {
         return $this->hasMany(BlogComment::class);
     }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}

