@extends('front.page.academy.layout.app')

@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('front/assets/img/BreadcrumInfra.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold">View All Courses</h1>
                <span class="text-color-light d-block position-relative font-weight-light">Learn more about our courses</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="{{url('/academy')}}">Home</a></li>
                    <li class="active text-color-light">Courses</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-color-tertiary">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2 class="my-4 font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">
                    All Courses</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            @foreach ($courses as $item)
            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mx-3 pb-3 appear-animation"
                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                    <div class="thumb-info-wrapper">
                        <a href="{{ route('course.show', $item) }}"><img src="{{ $item->thumbnail_course_image }}"
                                class="img-fluid" style="" alt=""></a>
                        @if ($item->allow_enroll)
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <a href="{{ route('course-enroll.create', $item) }}" class="text-white">Regitser
                                    Now
                                </a>

                            </div>
                        @endif
                    </div>
                    <div class="thumb-info-caption text-lg-left text-center">
                        <h3 class="font-weight-semibold text-transform-none">
                            <a
                                href="{{ route('course.show', $item) }}"
                                class="custom-link-color-dark">{{ $item->course_name }}
                            </a>
                        </h3>
                        <p class="text-dark mb-2">{{ Str::limit($item->course_detail, 150) }}...</p>
                        <p class="text-dark"><strong>Start Date: </strong>{{$item->start_date}}</p>
                        <p class="text-dark"><strong>End Date: </strong>{{$item->end_date}}</p>
                    </div>

                    <div class="thumb-info-footer">

                        @if ($item->today_date_timestamp < $item->end_date_timestamp)

                            @if ($item->enrollments_count < $item->strength)

                                @if ($item->allow_enroll)

                                    <div class="row">
                                        <div class="col-6">
                                            <a href="{{ route('course-enroll.create', $item) }}"
                                            class="mr-5 btn btn-outline btn-primary w-100">Register Now
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('course.show', $item) }}" class="mr-5 btn btn-outline  w-100 btn-primary float-end">
                                                Course Detail
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <a href="JavaScript:Void(0);" class="mr-5 btn btn-outline btn-primary float-start">
                                        Enrollment is Closed
                                    </a>
                                @endif
                            @else
                                <a href="JavaScript:Void(0);"
                                    class="mr-5 btn btn-outline btn-primary float-start">
                                    Course Already Full
                                </a>
                            @endif

                        @else

                            <a href="JavaScript:Void(0);" class="mr-5 btn btn-outline btn-primary float-start">
                                Enrollment is Closed
                            </a>

                        @endif

                    </div>
                </div>
            </div>
        @endforeach
        </div>

    </div>
</section>
@endsection
