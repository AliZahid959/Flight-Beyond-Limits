<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::all();
        return view('back.blog.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.blog.category.create');
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
            'category_name' => ['required', 'string', 'min:1', 'max:255', 'unique:blog_categories'],
            'status' => ['required', 'string', 'min:1', 'max:255']
        ]);
        $data['slug'] = Str::slug($request->category_name);
        BlogCategory::create($data);

        return redirect()->route('blog-category.index')->with('status', 'A Blog Category has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        return view('back.blog.category.show', compact('blogCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        return view('back.blog.category.edit', compact('blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
        $data = $request->validate([
            'category_name' => ['required', 'string', 'min:1', 'max:255', Rule::unique('blog_categories')->ignore($blogCategory)],
            'status' => ['required', 'string', 'min:1', 'max:255']

        ]);
        $data['slug'] = Str::slug($request->category_name);
        $blogCategory->update($data);

        return redirect()->route('blog-category.index')->with('status', 'A Blog Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        $blogCategory->delete();
        return redirect()->route('blog-category.index')->with('status', 'A Blog Category has been removed');
    }
}
