<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\SiteContent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{


    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('back.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.page.create');
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
            'page_name' => ['required', 'string', 'min:1', 'max:255', 'unique:pages'],
            'slug' => ['nullable', 'min:1', 'max:255', 'unique:pages'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_description' => ['required', 'string', 'min:10', 'max:255'],
            'body' => ['required']
        ]);
        if (!$request->slug) {
            $data['slug'] = Str::slug($request->page_name);
        }
        $page = Page::create($data);

        return redirect()->route('page.edit', $page)->with('status', 'A New Page has been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('back.page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('back.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'page_name' => ['required', 'string', 'min:1', 'max:255', Rule::unique('pages')->ignore($page)],
            'slug' => ['required', 'min:1', 'max:255', Rule::unique('pages')->ignore($page)],
            'active' => ['required']
        ]);
        $page->update($data);

        return redirect()->route('page.index')->with('status', 'A Page has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
    public function meta(Request $request, Page $page)
    {
        $data = $request->validate([
            'meta_title' => ['required', 'string', 'min:1', 'max:255'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:255'],
            'meta_description' => ['required', 'string', 'min:1', 'max:255'],
        ]);
        $page->update($data);

        return back()->with('status', 'A Page has been updated');
    }
    public function manager(Request $request, Page $page)
    {
        $request->validate([
            'body' => ['required']
        ]);
        $page->update(['body' => $request->body]);
        return redirect()->route('page.index')->with('status', 'A Page has been updated');
    }

    public function page($page = 'index')
    {

        // $condition = Page::all();

        // $single = Page::where('slug', $page)->first();
        // $setting = SiteContent::first();

        // if($single){
        //     if($single->slug == 'contact'){
        //         return view('front.page.contact', compact('setting'));
        //     }
        //     if($single->slug == 'about'){
        //         return view('front.page.about', compact('setting'));
        //     }
        //     else{
        //         $blogs = Blog::with('user')->take(3)->get();
        //         return view('front.page.index', compact('setting' , 'blogs'));
        //     }
        // }
        // else{
        //     return redirect()->route('page', 'index');
        // }
    }
}
