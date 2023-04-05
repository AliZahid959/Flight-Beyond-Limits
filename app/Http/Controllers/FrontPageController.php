<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Software;
use App\Models\SiteContent;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\AboutPageManager;
use App\Models\AcademyCertificate;

class FrontPageController extends Controller
{
    public function index()
    {
        $setting = SiteContent::first();
        $blogs = Blog::with('user')->where('status', 'Publish')->get();
        $products = Product::where('status', 'Publish')->take('5')->get();
        $services = Service::where('status', 'Publish')->take(4)->get();
        dd($products);
        return view('front.page.index', compact('setting', 'blogs', 'products', 'services'));
    }
    public function contact()
    {
        $setting = SiteContent::first();

        return view('front.page.contact', compact('setting'));
    }
    public function about()
    {
        $setting = SiteContent::first();
        $about = AboutPageManager::first();

        return view('front.page.about', compact('setting', 'about'));
    }
    public function blogs()
    {
        $setting = SiteContent::first();

        $blogs = Blog::with('user')->where('status', 'Publish')->get();

        return view('front.page.blog.index', compact('setting', 'blogs'));
    }


    public function softwares()
    {

        $software = Software::all();

        return view('front.page.software.index', compact('software'));
    }

    public function industry(Industry $industry)
    {

        return view('front.page.industries.show', compact('industry'));
    }
    public function blog(Blog $blog)
    {
        $setting = SiteContent::first();
        return view('front.page.blog.show', compact('setting', 'blog'));
    }
    public function services()
    {
        $blogs = Blog::with('user')->get();
        $setting = SiteContent::first();
        $services = Service::where('status', 'Publish')->get();
        $industries = Industry::all();
        return view('front.page.service.index', compact('setting', 'blogs', 'services', 'industries'));
    }
    public function service(Service $service)
    {
        $setting = SiteContent::first();
        $services = Service::where('status', 'Publish')->get();
        return view('front.page.service.show', compact('service', 'setting', 'services'));
    }
    public function products()
    {
        $software = Software::all();
        $products = Product::where('status', 'Publish')->get();
        $setting = SiteContent::first();
        $product_categories = ProductCategory::with('products')->where('status', 'Publish')->get();
        return view('front.page.product.shop', compact('software', 'setting', 'products', 'product_categories'));
    }
    public function product(Product $product)
    {
        return view('front.page.product.show', compact('product'));
    }


    public function software(Software $software)
    {
        return view('front.page.software.show', compact('software'));
    }

    public function page(Page $page)
    {
        $setting = SiteContent::first();
        return view('front.page.page', compact('page', 'setting'));
    }

    public function category(ProductCategory $productCategory)
    {

        return view('front.page.product.category', compact('productCategory'));
    }
}
