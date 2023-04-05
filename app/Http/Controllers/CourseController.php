<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-course')->only('index');
        $this->middleware('permission:create-course')->only('create', 'store');
        $this->middleware('permission:update-course')->only('edit', 'update');
        $this->middleware('permission:crud-course')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $courses = Course::with('category')->get();
        $courses = Course::with('category')->get();
        return view('back.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {

        $course_categories = CourseCategory::all();
        return view('back.courses.create', compact('course_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $data = $request->validate([

            'course_category_id' => ["required"],
            'course_name' => ["required", 'string', 'min:1', 'max:255', "unique:courses"],
            'course_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'course_detail' => ["required", 'min:20'],
            'body' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'strength' => ['integer'],
            'course_type' => ['required'],
            'price' => ['required'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["required"],
            'allow_enroll' => ['required'],

        ]);

        if ($request->hasFile('course_image')) {
            // Store the product image in different directories
            $image = $request->file('course_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['course_image'] = $filename;

            $image->storeAs('public/images/courses/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(350, 315);
            Storage::disk('public')->put('images/courses/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(800, 600);
            Storage::disk('public')->put('images/courses/banner/' . $filename, $banner->stream());
        }

        $data['slug'] = Str::slug($request->course_name);

        // dd($data);

        Course::create($data);

        return redirect()->route('course.index')->with('status', 'A New Course has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('front.page.academy.course-show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $course_categories = CourseCategory::all();
        return view('back.courses.edit', compact('course', 'course_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {

        $data = $request->validate([

            'course_category_id' => ["required"],
            'course_name' => ["required", 'string', 'min:1', 'max:255', Rule::unique('courses')->ignore($course)],
            'course_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'course_detail' => ["required", 'min:20'],
            'body' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'strength' => ['integer'],
            'course_type' => ['required'],
            'price' => ['required'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["required"],

        ]);

        if ($request->hasFile('course_image')) {
            // Store the product image in different directories
            $image = $request->file('course_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['course_image'] = $filename;

            $image->storeAs('public/images/courses/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(350, 315);
            Storage::disk('public')->put('images/courses/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(800, 600);
            Storage::disk('public')->put('images/courses/banner/' . $filename, $banner->stream());
        }


        if ($request->has('allow_enroll')) {
            $data['allow_enroll'] = true;
        } else {
            $data['allow_enroll'] = false;
        }


        $data['slug'] = Str::slug($request->course_name);

        $course->update($data);

        return redirect()->route('course.index')->with('status', 'Course has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('status', 'A Course has been removed');
    }
}
