<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Team;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\Industry;
use App\Models\Software;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $services_count = Service::count();
        $setting_count = SiteContent::first();
        $blogs_count = Blog::count();
        $products_count = Product::count();
        $team_count = Team::count();
        $industries_count = Industry::count();
        $software_count = Software::count();
        $industries_count = Industry::count();
        $blogs = Blog::get();
        $order = Order::all();
        $product = Product::with('category')->take(5)->get();
        $software = Software::take(5)->get();
        $team = Team::take(5)->get();

        return view('back.home', compact('team', 'product', 'software', 'services_count', 'setting_count', 'blogs_count', 'products_count', 'team_count', 'industries_count', 'software_count', 'blogs', 'order'));
    }
}
