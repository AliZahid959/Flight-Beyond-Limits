<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:read-product')->only('index');
        $this->middleware('permission:create-product')->only('create', 'store');
        $this->middleware('permission:update-product')->only('edit', 'update');
        $this->middleware('permission:crud-product')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('back.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $product_categories = ProductCategory::all();
        return view('back.product.create', compact('product_categories'));
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

            'product_category_id' => ["required"],
            'product_name' => ["required", 'string', "min:5", "max:255", "unique:products"],
            'price' => ['required'],
            'product_image' => ['required', 'mimes:jpeg,png,jpg,gif'],
            'product_video' => ['nullable'],
            'description' => ["required", 'string', 'max:255'],
            'body' => ["required", 'min:20'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["nullable"]

        ]);
        if ($request->hasFile('product_image')) {
            // Store the product image in different directories
            $image = $request->file('product_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['product_image'] = $filename;

            $image->storeAs('public/images/products/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(555, 400);
            Storage::disk('public')->put('images/products/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(800, 600);
            Storage::disk('public')->put('images/products/banner/' . $filename, $banner->stream());
        }

        // if($request->has('product_image')){
        //     $data['product_image'] = $request->file('product_image')->store('images/products', 'public');
        // }

        // if($request->has('product_banner_image')){
        //     $data['product_banner_image'] = $request->file('product_banner_image')->store('images/products', 'public');
        // }

        // if($request->has('product_video')){
        //     $data['product_video'] = $request->file('product_video')->store('images/products', 'public');
        // }


        $data['slug'] = Str::slug($request->product_name);

        Product::create($data);

        return redirect()->route('product.index')->with('status', 'A New Product has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Product $product)
    {
        dd($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product_categories = ProductCategory::all();
        return view('back.product.edit', compact('product', 'product_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'product_category_id' => ["required"],
            'product_name' => ["required", 'string', "min:5", "max:25", Rule::unique('products')->ignore($product)],
            'price' => ['required'],
            'product_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
            'product_video' => ['nullable'],
            'description' => ["required", 'string'],
            'body' => ["required", 'min:20'],
            'meta_keyword' => ["required"],
            'meta_description' => ["required"],
            'status' => ["nullable"]
        ]);

        if ($request->hasFile('product_image')) {
            // Store the product image in different directories
            $image = $request->file('product_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $data['product_image'] = $filename;

            $image->storeAs('public/images/products/original', $filename);

            // Create a thumbnail copy of the image and save it to the "thumbnail" directory
            $thumbnail = Image::make($image);
            $thumbnail->fit(555, 400);
            Storage::disk('public')->put('images/products/thumbnail/' . $filename, $thumbnail->stream());

            // Create a banner copy of the image and save it to the "banner" directory
            $banner = Image::make($image);
            $banner->fit(1200, 800);
            Storage::disk('public')->put('images/products/banner/' . $filename, $banner->stream());
        }

        if ($request->has('product_video')) {
            $data['product_video'] = $request->file('product_video')->store('images/products', 'public');
        }


        $data['slug'] = Str::slug($request->product_name);

        $product->update($data);

        return redirect()->route('product.index')->with('status', 'A New Product has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('status', 'A Product has been removed');
    }
}
