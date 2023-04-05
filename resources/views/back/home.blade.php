@extends('back.layout.app')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations </h5>
                                <p class="mb-4">
                                    You Are logged in As {{ auth()->user()->user_name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('back/assets/img/icons/unicons/chart-success.png') }}"
                                            alt="chart success" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Services</span>
                                <h3 class="card-title mb-2">{{ $services_count }}</h3>
                                {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('back/assets/img/icons/unicons/wallet-info.png') }}"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Team Memers</span>
                                <h3 class="card-title mb-2">{{ $team_count }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-6">
                            <div class="card-header d-flex align-items-center justify-content-between mb-4">
                                <h5 class="card-title m-0 me-2">Products by <span class="text-primary">IBN Firnas</span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="p-0 m-0">

                                    @foreach ($product as $item)
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="{{ $item->thumbnail_product_image }}" alt="ENVY Laptop"
                                                    class="rounded">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">{{ $item->product_name }}</h6>
                                                    <small
                                                        class="text-muted d-block mb-1">{{ $item->category->category_name }}</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-3">
                                                    <span class="fw-semibold">{{ $item->price }}</span>
                                                    {{-- <span class="badge bg-label-success">+12.4%</span> --}}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-header d-flex align-items-center justify-content-between mb-4">
                                <h5 class="card-title m-0 me-2">Softwares by <span class="text-primary">IBN Firnas</span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <ul class="p-0 m-0">

                                    @foreach ($software as $item)
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="{{ $item->thumbnail_software_image }}" alt="ENVY Laptop"
                                                    class="rounded">
                                            </div>
                                            <div
                                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
                                                    <h6 class="mb-0">{{ $item->software_name }}</h6>
                                                    <small class="text-muted d-block mb-1">{{ $item->status }}</small>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-3">
                                                    <span
                                                        class="fw-semibold">{{ Str::limit($item->description, 10) }}</span>
                                                    {{-- <span class="badge bg-label-success">+12.4%</span> --}}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="row row-bordered g-0">
                        <div class="col-md-8">
                            <h5 class="card-header m-0 me-2 pb-3">Drones</h5>
                            <div id="totalRevenueChart" class="px-2"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                            id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            2022
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                            <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="growthChart"></div>
                            <div class="text-center fw-semibold pt-3 mb-2">62% Drones activity Growth</div>

                            <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-primary p-2"><i
                                                class="bx bx-dollar text-primary"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2022</small>
                                        <h6 class="mb-0">$32.5k</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small>2021</small>
                                        <h6 class="mb-0">$41.2k</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('back/assets/img/icons/unicons/paypal.png') }}"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Products</span>
                                <h3 class="card-title mb-2">{{ $products_count }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('back/assets/img/icons/unicons/cc-primary.png') }}"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Blogs</span>
                                <h3 class="card-title mb-2">{{ $blogs_count }}</h3>
                                {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('back/assets/img/icons/unicons/cc-primary.png') }}"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Industries</span>
                                <h3 class="card-title mb-2">{{ $industries_count }}</h3>
                                {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('back/assets/img/icons/unicons/cc-primary.png') }}"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Softwares</span>
                                <h3 class="card-title mb-2">{{ $software_count }}</h3>
                                {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card" style="height: 400px; overflow-y :scroll">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Total Application</h5>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">{{ count($order) }}</h2>
                                <span>Total Orders</span>
                            </div>
                            <div id="chart"></div>
                        </div>
                        <ul class="p-0 m-0">

                            @foreach ($order as $item)
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i
                                                class="bx bx-mobile-alt"></i></span>
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">{{$item->customer->first_name}} {{$item->customer->last_name}}</h6>
                                            {{-- <small class="text-muted">Mobile, Earbuds, TV</small> --}}
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">{{$item->order_no}}</small>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Order Statistics -->

         
            <!-- Team Members -->
            <div class="col-md-6 col-lg-4 mb-md-0 mb-4">
                <div class="card" style="height: 400px;">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Team Members</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($team as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="avatar me-2">
                                                    <img src="{{ $item->image }}" alt="Avatar" class="rounded-circle"
                                                        style="width: 92%; height:73%;">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-0 text-truncate">{{ $item->name }}</h6><small
                                                        class="text-truncate text-muted">{{ $item->title }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td><small class="fw-semibold">{{ Str::limit($item->description, 13) }}</small>
                                        </td>
                                        <td>
                                            <div class="chart-progress" data-color="primary" data-series="65"></div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Team Members -->
      

            <!-- Transactions -->
            <div class="col-md-6 col-lg-4 order-2 mb-4">
                <div class="card" style="height: 400px;">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Latest Blogs</h5>
                        {{-- <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">


                            @foreach ($blogs as $item)
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{ $item->thumbnail_blog_image }}" alt="Blog" class="rounded" />
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">{{ $item->title }}</small>
                                            <h6 class="mb-0">
                                                {{ Illuminate\Support\Str::limit($item->description, 20, '...') }}</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center mt-4">
                                            <span class="">{{ $item->author_name }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <!--/ Transactions -->
        </div>
    </div>
@endsection
@section('script')
    <!-- Page JS -->
    {{-- <script src="{{ asset('back/assets/js/dashboards-analytics.js') }}"></script> --}}


    <script type="text/javascript">
        var options = {

            labels: ['Software', 'Drones', 'Courses', 'Certificates'],
            series: [30, 25, 15, 30],
            chart: {
                width: 280,
                type: 'donut',
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 270
                }
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'gradient',
            },
            // legend: {
            //   formatter: function(val, opts) {
            //     return val + " - " + opts.w.globals.series[opts.seriesIndex]
            //   }
            // },
            title: {
                text: ''
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 150
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection
