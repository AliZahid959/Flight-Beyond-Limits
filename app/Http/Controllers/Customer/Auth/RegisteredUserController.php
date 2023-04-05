<?php

namespace App\Http\Controllers\Customer\Auth;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use Google\Service\Monitoring\Custom;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        
        return view('back.customer.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'min:1', 'max:255'],
            'last_name' => ['required', 'string', 'min:1', 'max:255'],
            'user_name' => ['required', 'string', 'min:1', 'max:255', 'unique:customers'],
            'contact_no' => ['required', 'min:1', 'max:255'],
            'email' => ['required', 'email', 'min:1', 'max:255', 'unique:customers'],
            'city' => ['required', 'string', 'min:1', 'max:255'],
            'country' => ['required', 'string', 'min:1', 'max:255'],
            'address' => ['required', 'string', 'min:1', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed', Rules\Password::defaults()]
            
        ]);

        $data['password'] = Hash::make($request->password);
        
        $data['slug'] = Str::slug($request->user_name);

        


        $user = Customer::create($data);



        event(new Registered($user));
        return back()->with('status', 'You have been Registered! Click to logIn');

        Auth::guard('customer')->login($user);

        // return redirect('customer/home');
    }
}
