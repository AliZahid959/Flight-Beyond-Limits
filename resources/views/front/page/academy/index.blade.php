@extends('front.page.academy.layout.app')

@section('content')
    <div role="main" class="main">

        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
            data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['740px','740px','400px','400px','400px']"
            style="height: 700px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">


                    @foreach ($academyslider as $item)
                        <div class="owl-item position-relative overflow-hidden">
                            <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                                data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                                style="background-image: url({{ $item->slider_image }}); background-size: cover; background-position: center;">
                            </div>
                            <div class="container position-relative z-index-3 h-100 pt-5">
                                <div class="row justify-content-center align-items-center h-100 pt-5">
                                    <div class="col-lg-7 text-center pt-4">
                                        <h1 class="text-color-light font-weight-extra-bold text-12 line-height-2 mb-4 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                                            data-plugin-options="{'minWindowWidth': 0}">{{ $item->title }}
                                        </h1>

                                        <a href="{{ $item->btn_link }}"
                                            class="btn btn-primary rounded-0 font-weight-bold text-2 py-3 btn-px-5 mt-2 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                                            data-plugin-options="{'minWindowWidth': 0}">{{ $item->btn_text }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Carousel Slide 1 -->

                </div>
            </div>

            @if ($academyslider->count() > 1)
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"></button>
                    <button type="button" role="presentation" class="owl-next"></button>
                </div>
            @endif


        </div>
        <section class="section bg-color-tertiary border-0 my-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">
                            Our Courses</h2>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    @foreach ($courses as $item)
                        <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                            <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                                <div class="thumb-info-wrapper">
                                    <a href="{{ route('course.show', $item) }}"><img src="{{ $item->thumbnail_course_image }}"
                                            class="img-fluid" alt=""></a>
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
                                                        class="mr-0 btn btn-outline btn-primary w-100">Register Now
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="{{ route('course.show', $item) }}" class="mr-0 btn btn-outline  w-100 btn-primary float-end">
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

                                        <a href="JavaScript:Void(0);" class="mr-0 btn btn-outline btn-primary float-start">
                                            Enrollment is Closed
                                        </a>

                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ url('/all_courses') }}"
                            class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="banner_slider my-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover bg-color-quaternary mb-0"
                        data-plugin-options="{'autoplayTimeout': 7000}"
                        data-dynamic-height="['701px','701px','300px','300px','300px']" style="height: 701px;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <!-- Carousel Slide 1 -->
                                <div class="owl-item position-relative overflow-hidden">
                                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                                        data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                                        style="background-image: url({{ 'front/assets/img/fligh1.png' }}); background-size: cover; background-position: center;">
                                    </div>
                                    <div class="container position-relative z-index-3 pb-5 h-100">
                                        <div
                                            class="row justify-content-center justify-content-lg-start align-items-center pb-5 h-100">
                                            <div class="col-sm-9 col-lg-7 text-center text-lg-left pb-5 mt-5 mb-5">
                                                <h2 class="text-light mt-5 font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="500"
                                                    data-plugin-options="{'minWindowWidth': 0}"><span
                                                        class="line-pre-title text-light d-none d-lg-inline-block"></span>IBN
                                                    FIRNAS ACADEMY</h2>
                                                <h1 class="text-light font-weight-extra-bold text-10 line-height-2 pr-lg-5 mr-lg-5 mb-3 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="750"
                                                    data-plugin-options="{'minWindowWidth': 0}">IBN FIRNAS</h1>
                                                <p class="text-4 text-color-light font-weight-light mb-4 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1000"
                                                    data-plugin-options="{'minWindowWidth': 0}">Aligning with the Skies!</p>
                                                <a href="{{ url('/all_courses') }}"
                                                    class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1250"
                                                    data-plugin-options="{'minWindowWidth': 0}">View All Courses
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel Slide 2 -->
                                <div class="owl-item position-relative overflow-hidden">
                                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                                        data-appear-animation="kenBurnsToRight" data-appear-animation-duration="30s"
                                        data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                                        style="background-image: url({{ asset('front/assets/img/frone.png') }}); background-size: cover; background-position: center;">
                                    </div>
                                    <div class="container position-relative z-index-3 pb-5 h-100">
                                        <div
                                            class="row justify-content-center justify-content-lg-start align-items-center pb-5 h-100">
                                            <div class="col-sm-9 col-lg-7 text-center text-lg-left pb-5 mb-5 mt-5">
                                                <h2 class="text-light mt-5 font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="500"
                                                    data-plugin-options="{'minWindowWidth': 0}"><span
                                                        class="line-pre-title text-light d-none d-lg-inline-block"></span>IBN
                                                    FIRNAS ACADEMY</h2>
                                                <h1 class="text-light font-weight-extra-bold text-10 line-height-2 pr-lg-5 mr-lg-5 mb-3 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="750"
                                                    data-plugin-options="{'minWindowWidth': 0}">IBN FIRNAS</h1>
                                                <p class="text-4 text-color-light font-weight-light mb-4 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1000"
                                                    data-plugin-options="{'minWindowWidth': 0}">Aligning with the Skies!</p>
                                                <a href="{{ route('front.page.about') }}"
                                                    class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1250"
                                                    data-plugin-options="{'minWindowWidth': 0}">Explore More About Us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"></button>
                            <button type="button" role="presentation" class="owl-next"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row justify-content-center my-5">
            <div class="col-md-10 col-lg-4 text-center">
                <div class="feature-box feature-box-style-4 justify-content-center appear-animation animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                   <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                   <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                   <span class="box-content p-0 m-0">
                    <i class="icon-featured icon-location-pin icons"></i>
                   </span>
                   </span>
                   </span>
                   <div class="feature-box-info">
                        <h4 class="mb-2 mt-3 text-4 text-uppercase font-weight-bold">Dar Al Manal Building</h4>
                   </div>
                </div>
             </div>

            <div class="col-md-10 col-lg-4 text-center">
               <div class="feature-box feature-box-style-4 justify-content-center appear-animation animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                  <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                  <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                  <span class="box-content p-0 m-0">
                  <i class="icon-featured icon-earphones-alt icons"></i>
                  </span>
                  </span>
                  </span>
                  <div class="feature-box-info">
                     <h4 class="mb-2 mt-3 text-4 text-uppercase font-weight-bold">(+968) 9177 1779</h4>
                  </div>
               </div>
            </div>
            <div class="col-md-10 col-lg-4 text-center">
               <div class="feature-box feature-box-style-4 justify-content-center appear-animation animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                  <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                  <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                  <span class="box-content p-0 m-0">
                  <i class="icon-featured icon-location-pin icons"></i>
                  </span>
                  </span>
                  </span>
                  <div class="feature-box-info">
                     <h4 class="mb-2 mt-3 text-4 text-uppercase font-weight-bold">Oman</h4>
                  </div>
               </div>
            </div>
        </div>

    </div>
@endsection
