<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'meta_keyword' => 'array'
    ];

    public function getBannerCourseImageAttribute()
    {
        if($this->attributes['course_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/courses/banner/'.$this->attributes['course_image']);
    }
    public function getThumbnailCourseImageAttribute()
    {
        if($this->attributes['course_image'] === null){
            return asset('storage/images/default/default_image.jpg');
        }
        return asset('storage/images/courses/thumbnail/'.$this->attributes['course_image']);
    }

    public function getCourseImageAttribute()
    {
        return asset('storage/'.$this->attributes['course_image']);
    }
    public function getEndDateTimestampAttribute()
    {
        return Carbon::parse($this->attributes['end_date'])->timestamp;
    }
    public function getTodayDateTimestampAttribute()
    {
        return Carbon::parse(Carbon::now()->toDateString())->timestamp;
    }
    public function category()
    {
        return $this->belongsTo(CourseCategory::class , 'course_category_id');
    }
    public function enrollments()
    {
        return $this->hasMany(CourseEnrollment::class);
    }

}
