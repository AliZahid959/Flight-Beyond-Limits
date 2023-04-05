@extends('back.customer.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Orders</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card-container ">
        @foreach ($orders as $item)
            <div class="col-md-6 col-lg-4 mb-3 ">
                <div class="card text-center " style="margin-right: 1rem">
                    <div class="card-header">
                        Order No: {{ $item->order_no }}
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ $item->product_id ? $item->product->product_name : $item->software->software_name }}</h3>
                        <div class="row">
                            <p class="card-text ">Price: {{ $item->product_id ? $item->product->price : 'Null' }} </p>
                            <p>Quantity:
                                {{ $item->qty }}
                            </p>
                        </div>
                        <p class="card-text">Total: {{ $item->total }} <span class="text-muted">OMR</span></p>
                        <form action="{{ route('order.destroy', $item) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-primary "><i class="bx bx-trash me-1"></i>
                                Delete</button>
                        </form>
                    </div>
                    <div class="card-footer ">
                        {{ $item->order_date }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <style scoped>
        .card-container {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
@endsection