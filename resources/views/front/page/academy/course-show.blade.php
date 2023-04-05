@extends('front.page.academy.layout.app')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-sm parallax custom-page-header my-0"
        data-plugin-parallax data-plugin-options="{'speed': 1.5}"
        data-image-src="{{ asset('front/assets/img/BreadcrumInfra.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="font-weight-bold">{{ $course->course_name }}</h1>
                    <span class="text-color-light d-block position-relative font-weight-light">Learn more about our
                        courses</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right">
                        <li><a href="{{ url('/academy') }}" class="text-light">Home</a></li>
                        <li class="active text-color-light">Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="my-5">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            {!!$course->body!!}
        </div>
    </div>
</section> --}}

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="summary entry-summary position-relative">
                <h1 class="mb-0 font-weight-bold text-7 mt-5">{{$course->course_name}}</h1>
                <div class="divider divider-small">
                    <hr class="bg-color-grey-scale-4">
                </div>
                <p class="text-3-5 mb-3">{!! $course->body !!}
                </p>
                <ul class="list list-unstyled text-2">
                    <li class="mb-1">Course Category : <strong class="text-color-dark">{{$course->category->category_name}}</strong></li>
                    {{-- <li class="mb-1">Course Price : <strong class="text-color-dark">(OMR) {{$course->price}}</strong></li> --}}
                    <li class="mb-1">Allowed Strength : <strong class="text-color-dark">{{$course->strength}}</strong></li>
                    <li class="mb-1">Course Type : <strong class="text-color-dark">{{$course->course_type}}</strong></li>
                    <li class="mb-1">Start Date : <strong class="text-color-dark">{{$course->start_date}}</strong></li>
                    <li class="mb-1">End Date : <strong class="text-color-dark">{{$course->end_date}}</strong></li>
                </ul>
                @if ($course->today_date_timestamp < $course->end_date_timestamp)

                @if ($course->enrollments_count < $course->strength)

                    @if ($course->allow_enroll)

                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('course-enroll.create', $course) }}"
                                class="mr-5 btn btn-outline btn-primary w-100">Register Now
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
        <div class="col-6 mb-5 mt-5 mb-md-0 pt-5">
            <img src="{{$course->thumbnail_course_image}}" style="margin-top: 100px !important;">
</div>
    </div>
</div>
@endsection
