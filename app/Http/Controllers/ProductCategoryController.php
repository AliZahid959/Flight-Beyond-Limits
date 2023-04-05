<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::all();
        return view('back.product.category.index', compact('product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.product.category.create');
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


        $data['slug'] = Str::slug($request->category_name);

        ProductCategory::create($data);

        return redirect()->route('product-category.index')->with('status', 'A New Category has been created');
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
    public function edit(ProductCategory $productCategory)
    {
        return view('back.product.category.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {

        $data = $request->validate([

            'category_name' => ["required", 'min:5', 'max:20'],
            'status' => ["nullable"],
        ]);

        if ($request->has('category_icon')) {
            $data['category_icon'] = $request->file('category_icon')->store('images/products', 'public');
        }

        $data['slug'] = Str::slug($request->category_name);

        $productCategory->update($data);

        return redirect()->route('product-category.index')->with('status', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {

        $productCategory->products()->delete();
        $productCategory->delete();
        return redirect()->route('product.index')->with('status', 'A Category has been removed');
    }
}
