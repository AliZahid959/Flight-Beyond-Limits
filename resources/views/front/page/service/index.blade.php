@extends('front.layout.app2')
@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('content')
    <div class="main">
        <section
            class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
            style="background-image: url('{{ asset('front/assets/img/main_ser2.jpg') }}'); background-position:center;background-size:cover;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">All Services</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section id="intro"
            class="section section-with-shape-divider border-0 custom-bg-color-grey-1 overflow-visible mb-5 m-0 pt-5 pb-5 pb-lg-0">
            <div class="container position-relative z-index-2 h-100 py-md-5">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-lg-6 col-12">
                        <h1
                            class="text-13 ls-0 line-height-1 custom-ws-nowrap mb-3 z-index-1 position-relative text-center text-sm-left">
                            <span class="d-block position-relative">
                                <span class="custom-bg-color-grey-1 z-index-1 position-relative pr-sm-4">
                                </span>
                                <svg class="d-none d-sm-block position-absolute left-0 top-50pct transform3dy-n50 mt-2"
                                    height="1" width="99%">
                                    <line x1="0" y1="0" x2="600" y2="0" stroke="#969696"
                                        stroke-width="5" class="appear-animation" data-appear-animation="customSVGLineAnim"
                                        data-appear-animation-delay="100" data-appear-animation-duration="2s">
                                    </line>
                                </svg>
                            </span>
                            <strong
                                class="font-weight-extra-bold text-3 text-sm-3-4 text-md-4 text-lg-3 text-xl-4 d-inline-block negative-ls-2 position-relative z-index-1 appear-animation animated fadeInLeftShorter appear-animation-visible"
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1200"
                                style="animation-delay: 1200ms;">Our Services</strong>
                        </h1>
                        <p class="text-2 pb-3 mb-4 appear-animation w-100 animated fadeInUpShorter appear-animation-visible">
                            At IBN FIRNAS, our DJI drones are equipped with unique features that can help with
                            the diverse needs of your particular industry, from high resolution images and
                            video, thermal cameras to gas detection sensors and more. We supply all types of
                            enterprise drones and related training and offer a variety of industrial drone
                            services that cover oil & gas, telecommunication, site inspection and even
                            photography. IBN FIRNAS understands drone technology and how it can positively
                            impact your industry. With driven software for each industry and the application of
                            new Artificial Intelligence (AI) software, we provide you with the services you
                            require to ensure it empowers your business towards its best performance
                        </p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="custom-product-image-style-1 d-none d-lg-block">
                            <div data-plugin-float-element=""
                                data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"
                                style="top: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, 0.0239817%, 0px);">
                                <img src="{{asset('front/assets/img/main_ser.jpg')}}"
                                    style="height: auto; margin-top: 50px; animation-delay: 600ms;"
                                    class="img-fluid appear-animation animated fadeInLeftShorter appear-animation-visible"
                                    alt="" data-appear-animation="fadeInLeftShorter"
                                    data-appear-animation-delay="600">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer pt-5 pb-4"></div>
            <div class="shape-divider shape-divider-bottom" style="height: 215px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 215"
                    preserveAspectRatio="xMinYMin">
                    <path fill="#FFF"
                        d="M-13,24c3.03-0.28,7.53-0.66,13-1c26.45-1.65,46.73-0.59,57,0c76.61,4.41,118,9,118,9
                    c70.55,7.83,105.82,11.74,151,19c32.98,5.3,65.87,11.44,179,37c145.79,32.94,138.71,33.5,203,47c85.09,17.87,149.08,31.32,237,40
                    c113.11,11.17,203.29,8.29,234,7c16.74-0.7,63.49-4.13,157-11c107.74-7.91,117.84-9.32,153-10c52.52-1.02,97.8,0.79,153,3
                    c21.27,0.85,54.96,2.38,96,5c37.55,2.4,68.64,4.91,119,9c30.97,2.52,56.12,4.64,72,6c0,13.33,0,26.67,0,40c-646,0-1292,0-1938,0
                    C-10.33,157.33-11.67,90.67-13,24z">
                    </path>
                </svg>
            </div>
        </section>

        @if ($setting->service_enable)
            <section id="our_services"
                class="py-5 mt-5 bg-color-quaternary section section-height-4 border-0 m-0 appear-animation"
                data-appear-animation="fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="overflow-hidden">
                                <h2
                                    class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation"
                                    data-appear-animation="maskUp">{{ $setting->service_title }}</h2>
                            </div>
                            <div class="overflow-hidden mb-4">
                                <h2 class="text-color-primary font-weight-bold mb-0 appear-animation"
                                    data-appear-animation="maskUp">{{ $setting->description }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
                        <div class="row mb-2">
                            @foreach ($services as $item)
                                <div class="col-lg-3 col-12 px-0">
                                    <a href="{{ route('front.page.service.show', $item) }}" class="text-decoration-none">
                                        <div class="featured-box featured-box-primary featured-box-effect-5 appear-animation"
                                            data-appear-animation="fadeInUpShorter">
                                            <div class="box-content mx-auto pt-3">
                                                <img src="{{ $item->thumbnail_service_image }}"
                                                    style="position: absolute;
                                            top: 0;
                                            left: 0;">
                                                <h3 class="font-weight-bold text-light opacity-9 mt-2">
                                                    {{ $item->service_name }}</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

    </div>
@endsection
