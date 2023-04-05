@extends('back.customer.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-7 order-0">
                <div class="card">
                    <div class="d-flex align-items-center row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations 🎉</h5>
                                <p class="mb-4">
                                    You Are logged in As {{ auth()->user()->user_name }}
                                </p>
                                <p class="mb-4">
                                    {{ auth()->user()->email }}
                                </p>
                                <a href="{{ route('customer.profile-customer.index') }}"
                                    class="btn btn-sm btn-outline-primary">View Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center container-img ">
                            <div class="img-tag">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-4">
                <div class="row">
                    <div class="row">
                        <div class="card col-12 m-2 ">
                            <div class="row g-0" style="height: 8rem">
                                @foreach (auth('customer')->user()->enrollments as $item)
                                    <div class="col-md-4 d-flex justify-center align-items-lg-center">
                                        <img src="{{ $item->thumbnail_course_image }}" height="100px" width="100px"
                                            alt="Courses Img" class="rounded" />
                                    </div>
                                    @php
                                        break;
                                    @endphp
                                @endforeach
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class=" d-block mb-1 text-primary">No. Of Courses</span>
                                        <h3 class="card-title mb-2">{{ $courses_count }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 m-2 container-sides">
                            <div class="row g-0" style="height: 8rem">
                                @foreach ($orders as $item)
                                    <div class="col-md-4 d-flex justify-center align-items-lg-center">
                                        <img src="{{ $item->thumbnail_product_image }}" height="100px" width="100px"
                                            alt="Product Img" class="rounded" />
                                    </div>
                                    @php
                                        break;
                                    @endphp
                                @endforeach
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class=" d-block mb-1 text-primary">No. Of Orders</span>
                                        <h3 class="card-title mb-2">{{ $orders_count }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--View All Orders -->
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-4">
                    <div class="card" style="height: 350px; overflow-y :scroll">
                        <div class="container-courses">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title m-0 me-2 text-primary">Orders</h5>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="transactionID"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                                <a class="nav-item d-flex align-items-center">
                                                    <form action="{{ route('customer.orders.index') }}">
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <span class="align-middle">View All Orders</span>
                                                        </button>
                                                    </form>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            @php
                                                $sr_no = 1;
                                            @endphp

                                            @foreach ($orders as $item)
                                                <div class="d-flex mb-4 pb-1">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ $item->thumbnail_product_image }}" height="50px"
                                                            width="60px" alt="">

                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                        <div class="me-2">

                                                            <h6 class="mb-0">
                                                                <h6 class="mb-1">
                                                                    {{ $item->product_id ? $item->product->product_name : $item->software->software_name }}
                                                                </h6>
                                                                <small class="d-block mb-1">{{ $item->order_no }}</small>
                                                            </h6>
                                                        </div>
                                                        <div class="user-progress d-flex align-items-center gap-1">
                                                            <h6 class="mb-0">{{ $item->qty }}</h6>

                                                        </div>
                                                        <div class="user-progress d-flex align-items-center gap-1">
                                                            <h6 class="mb-0"> {{ $item->total }}</h6>
                                                            <span class="text-muted">OMR</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/View All Orders -->

                <!-- View All Courses -->
                <div class="col-md-6 col-lg-6 mb-md-0 mb-4">
                    <div class="card" style="height: 350px;">
                        <div class="container-courses">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title m-0 me-2 text-primary">All Enrolled Courses</h5>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="transactionID"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                                <a class="nav-item d-flex align-items-center">
                                                    <form action="{{ route('customer.courses-enrolled.index') }}">
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <span class="align-middle">View All Courses</span>
                                                        </button>
                                                    </form>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            @php
                                                $sr_no = 1;
                                            @endphp

                                            @foreach (auth('customer')->user()->enrollments as $item)
                                                <div class="d-flex mb-4 pb-1">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="{{ $item->thumbnail_course_image }}" height="50px"
                                                            width="60px" alt="">
                                                    </div>
                                                    <div
                                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                        <div class="me-2">

                                                            <h6 class="mb-1">{{ $item->course->course_name }}</h6>
                                                            <small
                                                                class=" d-block mb-1">{{ $item->created_at->format('M d, Y') }}</small>
                                                        </div>
                                                        <div class="user-progress d-flex align-items-center gap-1">
                                                            <h6 class="mb-0">{{ $item->course->price }}</h6>
                                                            <span class="text-muted">OMR</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ View All Courses -->
            </div>
        </div>
    </div>
@endsection

<style scoped>
    .container-courses {
        height: 21em;
        overflow-x: hidden;
        /* Hide horizontal scrollbar */
        overflow-y: scroll;
        /* Add vertical scrollbar */
    }

    ::-webkit-scrollbar {
        width: 0;
        /* Remove scrollbar space */
        background: transparent;
        /* Optional: just make scrollbar invisible */
    }

    .img-tag {
        width: 200px;
        height: 287px;
        display: flex;
        justify-content: center;
        align-items: center;

    }
</style>
