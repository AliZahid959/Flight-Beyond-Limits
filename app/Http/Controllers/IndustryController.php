<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-industry')->only('index');
        $this->middleware('permission:create-industry')->only('create', 'store');
        $this->middleware('permission:update-industry')->only('edit', 'update');
        $this->middleware('permission:crud-industry')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries = Industry::all();
        return view('back.industry.index', compact('industries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.industry.create');
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
            'industry_name' => ['required', 'string', 'min:1', 'max:255', 'unique:industries'],
            'industry_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'description' => ['required', 'string', 'min:1', 'max:255'],
            'body' => ['nullable'],
            'meta_keyword' => ['required', 'array', 'min:1'],
            'meta_description' => ['required', 'string', 'min:1', 'max:255'],
        ]);

        if ($request->has('industry_image')) {
            $data['industry_image'] = $request->file('industry_image')->store('images/industries', 'public');
        }

        $data['slug'] = Str::slug($request->industry_name);

        Industry::create($data);

        return redirect()->route('industry.index')->with('status', 'A New Industry has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry)
    {
        return view('back.industry.show', compact('industry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {
        return view('back.industry.edit', compact('industry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industry $industry)
    {

        $data = $request->validate([
            'industry_name' => ['required', 'string', 'min:1', 'max:255'],
            'industry_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'description' => ['required', 'string', 'min:1', 'max:255'],
            'body' => ['nullable'],
            'meta_keyword' => ['required', 'array', 'min:1'],
            'meta_description' => ['required', 'string', 'min:1', 'max:255'],
        ]);

        if ($request->has('industry_image')) {
            $data['industry_image'] = $request->file('industry_image')->store('images/industries', 'public');
        }

        $data['slug'] = Str::slug($request->industry_name);

        $industry->update($data);

        return redirect()->route('industry.index')->with('status', 'A Industry has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industry $industry)
    {
        $industry->delete();
        return redirect()->route('industry.index')->with('status', 'A Industry has been removed');
    }
}
