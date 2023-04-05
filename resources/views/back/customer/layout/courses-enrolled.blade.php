@extends('back.customer.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header1">
                    <h5 class="mb-0 p-3 border-1">Courses Enrolled</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card-container ">
        @php
            $sr_no = 1;
        @endphp
        @foreach (auth('customer')->user()->enrollments as $item)
            <div class="col-md-6 col-lg-4 mb-3 ">
                <div class="card text-center card-container" style="margin-right: 1rem ">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->course->course_name }}</h4>
                        <p class="card-text">{{ $item->customer->first_name }} {{ $item->customer->last_name }}</p>
                        <div class="card-header">
                            {{ $item->customer->email }}
                        </div>
                        <p class="card-text">Price: {{ $item->course->price }}</p>
                        <p>{{ $item->city }}</p>
                    </div>
                    <div class="card-footer ">
                        Enrolled on {{ $item->created_at->format('M d, Y') }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
        }
        .card-container {
            height: 21rem;
        }
    </style>
@endsection