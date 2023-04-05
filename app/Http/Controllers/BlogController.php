<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Google\blog\Blogger\Resource\Blogs;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:read-blog')->only('index');
        $this->middleware('permission:create-blog')->only('create', 'store');
        $this->middleware('permission:update-blog')->only('edit', 'update');
        $this->middleware('permission:crud-blog')->only('delete');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('category', 'user')->get();
        return view('back.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('back.blog.create', compact('categories'));
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
            'blog_category_id' => ['required'],
            'title' => ["required", 'string', "min:5", "max:255", "unique:blogs"],
            'blog_image' => ['required', 'mimes:jpeg,png,jpg,gif'],
            'description' => ["required", 'string'],
            'body' => ["required", 'string', 'min:10'],

            'author_name' => ['required', 'string', 'min:3', 'max:255'],
            'author_email' => ['required', 'string', 'min:3', 'max:255'],
            'author_image' => ['required', 'mimes:jpeg,png,jpg,gif'],
            'author_description' => ['required', 'string', 'min:3', 'max:255'],

            'meta_keyword' => ['required', 'array', 'min:3', 'max:255'],
            'meta_description' => ['required', 'string', 'min:3', 'max:255'],
            'status' => ['required', 'string', 'min:3', 'max:255'],

        ]);

        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('blog_image')) {
            // Store the product image in different directories
            $image = $request->file('blog_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['blog_image'] = $filename;

            $image->storeAs('public/images/blogs/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(542, 300);
            Storage::disk('public')->put('images/blogs/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(800, 600);
            Storage::disk('public')->put('images/blogs/banner/' . $filename, $banner->stream());
        }


        if ($request->has('author_image')) {
            $data['author_image'] = $request->file('author_image')->store('images/blogs/authors', 'public');
        }
        $data['slug'] = Str::slug($request->title);


        blog::create($data);

        return redirect()->route('blog.index')->with('status', 'blog has been updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Blog $blogs)
    {
        // $blogs = Blog::all();
        // return view('front.index', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();

        return view('back.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'blog_category_id' => ['required'],
            'title' => ["required", 'string', "min:5", "max:255", Rule::unique('blogs')->ignore($blog)],
            'blog_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'description' => ["required", 'string'],
            'body' => ["required", 'string', 'min:10'],

            'author_name' => ['required', 'string', 'min:3', 'max:255'],
            'author_email' => ['required', 'string', 'min:3', 'max:255'],
            'author_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'author_description' => ['required', 'string', 'min:3', 'max:255'],

            'meta_keyword' => ['required', 'array', 'min:3', 'max:255'],
            'meta_description' => ['required', 'string', 'min:3', 'max:255'],
            'status' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('blog_image')) {
            // Store the product image in different directories
            $image = $request->file('blog_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['blog_image'] = $filename;

            $image->storeAs('public/images/blogs/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(542, 300);
            Storage::disk('public')->put('images/blogs/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(800, 600);
            Storage::disk('public')->put('images/blogs/banner/' . $filename, $banner->stream());
        }

        if ($request->has('author_image')) {
            $data['author_image'] = $request->file('author_image')->store('images/blogs/authors', 'public');
        }
        $data['slug'] = Str::slug($request->title);

        $blog->update($data);
        return redirect()->route('blog.index')->with('status', 'blog has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('status', 'A Blog has been removed');
    }

    public function front_index()
    {
        $blogs = Blog::with('user')->get();
        return view('front.blog.index', compact('blogs'));
    }
    public function front_show(Blog $blog)
    {
        // dd($blog);
        return view('front.blog.show', compact('blog'));
    }
}
