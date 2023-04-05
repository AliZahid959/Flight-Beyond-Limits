<?php

namespace App\Http\Controllers\Customer;

use customer;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\OldPasswordRule;
use Illuminate\Validation\Rule;
use App\Models\CourseEnrollment;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class CustomerHomeController extends Controller
{
    public function home()
    {
        // $orders_count = Service::count();

        $customerId = auth('customer')->user()->id;
        $courses_count =
            CourseEnrollment::with('customer')
            ->where('customer_id', $customerId)
            ->count();
        $orders_count =
            Order::with('customer')
            ->where('customer_id', $customerId)
            ->count();

        $orders = Order::with('customer')
            ->where('customer_id', $customerId)
            ->get();
        return view('back.customer.home', compact('orders', 'courses_count', 'orders_count'));
    }

    //Controller for Change Password
    public function customer_change_password_index()
    {


        return view('back.customer.layout.change-password');
    }
    public function customer_change_password_update(Request $request)
    {
        $request->validate([
            'old_password' => ['required', new OldPasswordRule],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['same:password'],
        ]);

        $user = Auth::user('customer');
        $current_password = $user->password;

        if (Hash::check($request->current_password, $current_password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
    }

    //Controller for Customer's Profile 
    public function profile_customer_index()
    {
        return view('back.customer.layout.profile-customer');
    }
    public function profile_customer_update(Request $request)
    {
        $data = $request->validate([
            'user_name' => ['required', 'string', 'min:1', 'max:255', Rule::unique('customer')->ignore(auth('customer')->user())],
            'email' => ['required', 'email', 'min:5', 'max:255', Rule::unique('customer')->ignore(auth('customer')->user())],
            'contact_no' => ['nullable'],
            'user_image' => ['required'],
        ]);
        $data['slug'] = Str::slug($request->user_name);
        if ($request->has('user_image')) {
            $data['user_image'] = $request->file('user_image')->store('images/users', 'public');
        }
        auth('customer')->user()->update($data);
        return redirect()->route('back.customer.home')->with('status', 'Your Profile has been updated');
    }


    //Controller for View all Notifications
    public function viewallnotifications()
    {
        return view('back.customer.layout.view-all-notifications');
    }

    //Controller for Activity
    public function activity()
    {
        return view('back.customer.layout.activity');
    }

    //Controller For Orders
    public function orders()
    {
        $customerId = auth('customer')->user()->id;
        $orders = Order::with('customer')
            ->where('customer_id', $customerId)
            ->get();

        //         $orders = Order::with('customer')->where('customer_ID', auth('customer')->user()->id)->get();
        // dd($orders);
        // $orders= Order::all();
        return view('back.customer.layout.orders', compact('orders'));
    }

    //Controller For Orders History
    public function ordershistory()
    {
        return view('back.customer.layout.orders-history');
    }

    //Controller For Vouchers
    public function vouchers()
    {
        return view('back.customer.layout.vouchers');
    }

    //Controller For Invoices
    public function invoices()
    {
        return view('back.customer.layout.invoices');
    }

    //Controller For Unpaid Orders
    public function unpaidorders()
    {
        return view('back.customer.layout.unpaid-orders');
    }

    //Controller For Enrolled Courses

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course()
    {

        $courses = CourseEnrollment::with('customer')->where('customer_ID', auth('customer')->user()->id)->get();
        return view('back.customer.layout.courses-enrolled');
    }

    //Controller For My plan
    public function myplan()
    {
        return view('back.customer.layout.my-plan');
    }

    //Controller For wallet
    public function wallet()
    {
        return view('back.customer.layout.wallet');
    }

    //Controller For settings
    public function settings()
    {
        return view('back.customer.layout.settings');
    }
}
