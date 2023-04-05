<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_slider = HomeSlider::all();
        return view('back.home_slider.index', compact('home_slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.home_slider.create');
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

            'slider_video' => ['required'],

        ]);

        if ($request->has('slider_video')) {
            $data['slider_video'] = $request->file('slider_video')->store('images/slider_video', 'public');
        }

        $data['slug'] = Str::slug(Carbon::now()->timestamp);

        HomeSlider::create($data);

        return redirect()->route('home-slider.index')->with('status', 'A New Slide has been created');
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
    public function edit(HomeSlider $home_slider)
    {
        return view('back.home_slider.edit', compact('home_slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $home_slider)
    {
        $data = $request->validate([

            'slider_video' => ['required'],

        ]);

        if ($request->has('slider_video')) {
            $data['slider_video'] = $request->file('slider_video')->store('images/slider_video', 'public');
        }

        $data['slug'] = Str::slug(Carbon::now()->timestamp);

        $home_slider->update($data);

        return redirect()->route('home-slider.index')->with('status', 'Slide has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeSlider $home_slider)
    {
        $home_slider->delete();
        return redirect()->route('home-slider.index')->with('status', 'A Slide has been removed');
    }
}
