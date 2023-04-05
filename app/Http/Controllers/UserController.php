<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\OldPasswordRule;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('password.confirm')->only('change_password_index');
        $this->middleware('permission:read-user')->only('index');
        $this->middleware('permission:create-user')->only('create', 'store');
        $this->middleware('permission:update-user')->only('edit', 'update');
        $this->middleware('permission:crud-user')->only('delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('back.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('back.user.create', compact('roles'));
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
            'user_name' => ['required', 'string', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'min:5', 'max:255', 'unique:users'],
            'contact_no' => [],
            'password' => ['required', 'string', 'min:8', 'confirmed:confirm_password'],
            'user_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
        ]);

        $data['slug'] = Str::slug($request->user_name);
        if($request->has('user_mage')){
            $data['user_image'] = $request->file('user_image')->store('images/users','public');
        }
        User::create($data);

        return redirect()->route('user.index')->with('status', 'A New User as been created');

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
    public function edit(User $user)
    {
        return view('back.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , User $user)
    {
        $data = $request->validate([
            'user_name' => ['required', 'string', 'min:5', 'max:255', Rule::unique('users')->ignore($user)],
            'email' => ['required', 'string', 'min:5', 'max:255', Rule::unique('users')->ignore($user)],
            'contact_no' => ['nullable'],
            'user_image' => ['nullable', 'mimes:jpeg,png,jpg,gif'],
        ]);

        $data['slug'] = Str::slug($request->user_name);
        if($request->has('user_image')){
            $data['user_image'] = $request->file('user_image')->store('images/users','public');
        }
        $user->update($data);

        return redirect()->route('user.index')->with('status', 'A New User as been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('status', 'A user has been removed');
    }

    public function profile_index()
    {
        return view('back.user.profile');
    }
    public function profile_update(Request $request)
    {

        $data = $request->validate([
            'user_name' => ['required', 'string','min:1', 'max:255', Rule::unique('users')->ignore(auth()->user())],
            'email' => ['required', 'email','min:5', 'max:255', Rule::unique('users')->ignore(auth()->user())],
            'contact_no' => ['nullable'],
            'user_image' => ['required'],
        ]);
        $data['slug'] = Str::slug($request->user_name);
        if($request->has('user_image')){
            $data['user_image'] = $request->file('user_image')->store('images/users','public');
        }
        auth()->user()->update($data);
        return redirect()->route('home')->with('status', 'User Profile has been updated');
    }



    public function change_password_index()
    {
        return view('back.user.change-password');
    }
    public function change_password_update(Request $request)
    {
        $data = $request->validate([
            'old_password' => ['required', new OldPasswordRule],
            'password' => ['required', 'string', 'min:8', Password::min(8)->mixedCase()->letters()->symbols()],
            'password_confirmation' => ['same:password'],
        ]);
        auth()->user()->update($data);
        return redirect()->route('home')->with('status', 'User Password has been updated');

    }
}
