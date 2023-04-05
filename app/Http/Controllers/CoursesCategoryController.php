<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CoursesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_categories = CourseCategory::all();
        return view('back.courses.course_category.index', compact('course_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.courses.course_category.create');
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

            'category_name' => ["required", 'min:5', 'max:20'],
            'status' => ["nullable"],
        ]);

        if ($request->has('category_icon')) {
            $data['category_icon'] = $request->file('category_icon')->store('images/products', 'public');
        }

        CourseCategory::create($data);

        return redirect()->route('course-category.index')->with('status', 'A New Category has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCategory $courseCategory)
    {
        return view('back.courses.course_category.edit', compact('courseCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseCategory $courseCategory)
    {

        $data = $request->validate([

            'category_name' => ["required", 'min:5', 'max:20'],
            'status' => ["nullable"],
        ]);

        if ($request->has('category_icon')) {
            $data['category_icon'] = $request->file('category_icon')->store('images/products', 'public');
        }

        $courseCategory->update($data);

        return redirect()->route('course-category.index')->with('status', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseCategory $courseCategory)
    {

        $courseCategory->delete();
        return redirect()->route('course.index')->with('status', 'A Category has been removed');
    }
}
