<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Software;
use App\Mail\OrderStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Notifications\OrderConfirmation;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:customer')->only(['create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders =  Order::with('product', 'software', 'customer')->get();
        return view('back.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product, Order $order)
    {
        return view('front.page.product.quote', compact('product', 'order'));
    }

    public function create2(Software $software, Order $order)
    {
        return view('front.page.software.quote', compact('software', 'order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {


        $data = $request->validate([
            'message' => ['required', 'string', 'max:1000'],
            'qty' => ['required', 'integer', 'max:50'],
        ]);
        $data['customer_id'] = auth('customer')->user()->id;
        $data['product_id'] = $product->id;
        $data['price'] = $product->price;
        $data['total'] = $product->price * $request->qty;
        $data['order_no'] = $this->create_order_no();
        $data['slug'] = Str::slug($data['order_no']);



        $order = Order::create($data);
        // $user->notify(new OrderConfirmation($order));

        Mail::to($request->email)->send(new OrderStatus($order));
        return back()->with('message', 'your Application has been Submitted');
    }

    public function store2(Request $request, Software $software, Customer $customer)
    {
        $data = $request->validate([
            'first_name' => ["required"],
            'last_name' => ["required"],
            'email' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'address' => ["required"],
            'qty' => ['nullable', 'integer'],
            'message' => ['required'],

        ]);
        $data['software_id'] = $software->id;
        $data['customer_id'] = $customer->id;
        $data['order_no'] = $this->create_order_no();
        $data['slug'] = Str::slug($data['order_no']);
        $order = Order::create($data);

        Mail::to($request->email)->send(new OrderStatus($order));
        return back()->with('message', 'your Application has been Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('back.orders.show', compact('order'));
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
    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(['Pending', 'Accept', 'Reject', 'Notinstock'])],
        ]);
        $order->update($data);

        // Mail::to($order->email)->send(new OrderStatus($order));
        
        Mail::to(auth('customer')->user()->email)->send(new OrderStatus($order));
        return back()->with('status', 'Application Status has been changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return back()->with('message', 'Order Has Been Deleted');
    }


    public function create_order_no()
    {

        $check = Order::latest()->first();

        $max = 1;

        if ($check != null) {

            $max = Order::latest('id')->first()->id + 1;
        }

        return "#000" . $max;
    }

    public function accept(Request $request, Order $order)
    {

        $order->update(['status' => 'Accept']);
        Mail::to($order->email)->send(new OrderStatus($order));
        return back()->with('message', 'Order has been Accepted Mail Delivered To Customer');
    }
}
