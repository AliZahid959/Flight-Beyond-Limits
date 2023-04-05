<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Industry;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-service')->only('index');
        $this->middleware('permission:create-service')->only('create', 'store');
        $this->middleware('permission:update-service')->only('edit', 'update');
        $this->middleware('permission:crud-service')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();


        return view('back.service.index', compact('services'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.service.create');

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
            'service_name' => ["required" , 'string' , "min:5" , "max:255" , "unique:services"],
            'service_image' => ['nullable'],
            'description' => ["required", 'string', 'min:20'],
            'body' => ['nullable', 'string'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_description' => ['required'],
            'status' => ['required']
        ]);

        if ($request->hasFile('service_image')) {
            // Store the product image in different directories
            $image = $request->file('service_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['service_image'] = $filename;

            $image->storeAs('public/images/services/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(305, 417);
            Storage::disk('public')->put('images/services/thumbnail/' . $filename, $thumbnail->stream());

            $dropdown = Image::make($image);
            $dropdown->fit(150 , 100);
            Storage::disk('public')->put('images/services/dropdown/' . $filename, $dropdown->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(800, 600);
            Storage::disk('public')->put('images/services/banner/' . $filename, $banner->stream());
        }
        $data['slug'] = Str::slug($request->service_name);

        Service::create($data);

        return redirect()->route('service.index')->with('status', 'A New Service as been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Service $service)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('back.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'service_name' => ["required" , 'string' , "min:5" , "max:255" ,  Rule::unique('services')->ignore($service)],
            'service_image' => ['nullable'],
            'description' => ["required", 'string', 'min:20'],
            'body' => ['nullable', 'string'],
            'meta_keyword' => ['required', 'array', 'min:1', 'max:10'],
            'meta_description' => ['required'],
            'status' => ['required']
        ]);

        if ($request->hasFile('service_image')) {
            // Store the product image in different directories
            $image = $request->file('service_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['service_image'] = $filename;

            $image->storeAs('public/images/services/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(305, 417);
            Storage::disk('public')->put('images/services/thumbnail/' . $filename, $thumbnail->stream());

            //Drop Down Images Copy For Services Dropdown 

            $dropdown = Image::make($image);
            $dropdown->fit(150 , 100);
            Storage::disk('public')->put('images/services/dropdown/' . $filename, $dropdown->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(800, 600);
            Storage::disk('public')->put('images/services/banner/' . $filename, $banner->stream());
        }
        $data['slug'] = Str::slug($request->service_name);

        $service->update($data);
        return redirect()->route('service.index')->with('status', 'Service has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('status', 'A Service has been removed');
    }
}
