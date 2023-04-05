<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-team')->only('index');
        $this->middleware('permission:create-team')->only('create', 'store');
        $this->middleware('permission:update-team')->only('edit', 'update');
        $this->middleware('permission:crud-team')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('back.team.index' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.team.create');
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
            'name' => ["required" , 'string' , "min:5" , "max:255", 'unique:teams'],
            'image' => ['nullable' , 'mimes:jpeg,png,jpg,gif'],
            'description' => ["required", 'string', 'min:20' , "max:255"],
            'title' => ["required" , 'string' , 'min:1'],
        ]);

        if($request->has('image')){
            $data['image'] = $request->file('image')->store('images/team', 'public');
        }

        $data['slug'] = Str::slug($request->name);

        Team::create($data);

        return redirect()->route('team.index')->with('status', 'A New Team Member has been created');
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
    public function edit(Team $team)
    {
        return view('back.team.edit', compact('team'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name' => ["required" , 'string' , "min:5" , "max:255", Rule::unique('teams')->ignore($team)],
            'image' => ['nullable' , 'mimes:jpeg,png,jpg,gif', 'unique:teams'],
            'description' => ["required", 'string', 'min:20' , "max:255"],
            'title' => ["required" , 'string' , 'min:1'],
        ]);

        if($request->has('image')){
            $data['image'] = $request->file('image')->store('images/team', 'public');
        }

        $data['slug'] = Str::slug($request->name);

        $team->update($data);
        return redirect()->route('team.index')->with('status', 'blog has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {

        $team->delete();
        return redirect()->route('team.index')->with('status', 'A Team Member has been removed');

    }
}
