<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-software')->only('index');
        $this->middleware('permission:create-software')->only('create', 'store');
        $this->middleware('permission:update-software')->only('edit', 'update');
        $this->middleware('permission:crud-software')->only('delete');
        $this->middleware('auth:customer')->only(['create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $software = Software::all();
        return view('back.software.index' , compact('software'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.software.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $data = $request -> validate([

            'software_name' => ["required" , 'string' , "min:5" , "max:255"],
            'software_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'description' => ["required", 'string', 'min:20' , "max:255"],
            'body' => ["required" , 'min:20'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["nullable"]
        ]);


        if ($request->hasFile('software_image')) {
            // Store the product image in different directories
            $image = $request->file('software_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['software_image'] = $filename;

            $image->storeAs('public/images/softwares/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(381 , 300);
            Storage::disk('public')->put('images/softwares/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(1800, 1200);
            Storage::disk('public')->put('images/softwares/banner/' . $filename, $banner->stream());
        }
        $data['slug'] = Str::slug($request->software_name);

        Software::create($data);

        return redirect()->route('software.index')->with('status', 'A New software has been created');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Software $software)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Software $software)
    {
        return view('back.software.edit' , compact('software'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Software $software)
    {
        $data = $request -> validate([

            'software_name' => ["required" , 'string' , "min:5" , "max:255" ,Rule::unique('software')->ignore($software)],
            'software_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'banner_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'description' => ["required", 'string', 'min:20' , "max:255"],
            'body' => ["required" , 'min:20'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["nullable"]
        ]);

        if ($request->hasFile('software_image')) {
            // Store the product image in different directories
            $image = $request->file('software_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['software_image'] = $filename;

            $image->storeAs('public/images/softwares/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(381 , 300);
            Storage::disk('public')->put('images/softwares/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(1800, 1200);
            Storage::disk('public')->put('images/softwares/banner/' . $filename, $banner->stream());
        }



        $data['slug'] = Str::slug($request->software_name);

        $software->update($data);

        return redirect()->route('software.index')->with('status', 'Software has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Software $software)
    {
        $software->delete();
        return redirect()->route('software.index')->with('status', 'A Software has been removed');
    }
}
