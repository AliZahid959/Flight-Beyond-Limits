<?php

namespace App\Http\Controllers;

use App\Models\AboutPageManager;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutPageManager::first();
        return view('back.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'core_value_heading' => ['nullable'],
            'core_value_description' => ['nullable'],
            'enable_core_value' => ['nullable'],
            'honesty_section_image' => ['nullable'],
            'honesty_section_description' => ['nullable'],
            'banner_image' => ['nullable'],
            'body' => ['nullable'],
            'innovation_section_image' => ['nullable'],
            'innovation_section_description' => ['string'],
            'commitment_section_image' => ['nullable'],
            'commitment_section_description' => ['nullable'],
        ]);

        $data['enable_core_value'] = 0;

        if ($request->has('banner_image')) {
            $data['banner_image'] = $request->file('banner_image')->store('images/site/', 'public');
        }
        if ($request->has('honesty_section_image')) {

            $data['honesty_section_image'] = $request->file('honesty_section_image')->store('images/site/', 'public');
        }
        if ($request->has('innovation_section_image')) {

            $data['innovation_section_image'] = $request->file('innovation_section_image')->store('images/site/', 'public');
        }
        if ($request->has('commitment_section_image')) {

            $data['commitment_section_image'] = $request->file('commitment_section_image')->store('images/site/', 'public');
        }

        if ($request->has('enable_core_value')) {

            $data['enable_core_value'] = 1;
        }

        $about = AboutPageManager::first();

        $about->update($data);

        return back()->with('status', 'General Setting has been updated');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
