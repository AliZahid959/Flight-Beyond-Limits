<?php

namespace App\Http\Controllers;

use App\Models\AcademySlider;
use Illuminate\Http\Request;

class AcademySliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $academySlider = AcademySlider::all();
        return view('back.academy_slider.index', compact('academySlider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.academy_slider.create');
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

            'slider_image' => ['required'],
            'title' => ["required", 'string', "min:5", "max:255", "unique:academy_sliders"],
            'btn_link' => ['required'],
            'btn_text' => ['required']

        ]);

        if ($request->has('slider_image')) {
            $data['slider_image'] = $request->file('slider_image')->store('images/slider_image', 'public');
        }

        AcademySlider::create($data);

        return redirect()->route('academy-slider.index')->with('status', 'A New Slide has been created');
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
    public function edit(AcademySlider $academySlider)
    {

        return view('back.academy_slider.edit', compact('academySlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademySlider $academySlider)
    {
        $data = $request->validate([

            'slider_image' => ['nullable'],
            'title' => ["required", 'string', "min:5", "max:255", "unique:academy_sliders"],
            'btn_link' => ['required'],
            'btn_text' => ['required']

        ]);

        if ($request->has('slider_image')) {
            $data['slider_image'] = $request->file('slider_image')->store('images/slider_image', 'public');
        }

        $academySlider->update($data);

        return redirect()->route('academy-slider.index')->with('status', 'Slide has been Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademySlider $academySlider)
    {
        $academySlider->delete();
        return redirect()->route('academy-slider.index')->with('status', 'A Slide has been removed');
    }
}
