@extends('front.layout.app2')
@section('css')
    <style>
        .post-slide {
            background: #fff;
            margin: 20px 15px 20px;
            border-radius: 15px;
            padding-top: 1px;
            box-shadow: 0px 14px 22px -9px #bbcbd8;
        }

        .post-slide .post-img {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: -12px 15px 8px 15px;
            margin-left: -10px;
        }

        .post-slide .post-img img {
            width: 100%;
            height: auto;
            transform: scale(1, 1);
            transition: transform 0.2s linear;
        }

        .post-slide:hover .post-img img {
            transform: scale(1.1, 1.1);
        }

        .post-slide .over-layer {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            background: linear-gradient(-45deg, rgba(65, 188, 171, 100) 0%, rgba(45, 112, 253, 0.6) 100%);
            transition: all 0.50s linear;
        }

        .post-slide:hover .over-layer {
            opacity: 1;
            text-decoration: none;
        }

        .post-slide .over-layer i {
            position: relative;
            top: 45%;
            text-align: center;
            display: block;
            color: #fff;
            font-size: 25px;
        }

        .post-slide .post-content {
            background: #fff;
            padding: 2px 20px 40px;
            border-radius: 15px;
        }

        .post-slide .post-title a {
            font-size: 15px;
            font-weight: bold;
            color: #333;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px !important;

        }

        .post-slide .post-title a:hover {
            text-decoration: none;
            color: #41bcab;
        }

        .post-slide .post-description {
            line-height: 24px;
            color: #808080;
            margin-bottom: 25px;
        }

        .post-slide .post-date {
            color: #a9a9a9;
            font-size: 14px;
        }

        .post-slide .post-date i {
            font-size: 20px;
            margin-right: 8px;
            color: #CFDACE;
        }

        .post-slide .read-more {
            padding: 7px 20px;
            float: right;
            font-size: 12px;
            background: #41bcab;
            color: #ffffff;
            box-shadow: 0px 10px 20px -10px #41bcab;
            border-radius: 25px;
            text-transform: uppercase;
        }

        .post-slide .read-more:hover {
            background: #41bcab;
            text-decoration: none;
            color: #fff;
        }
        @media only screen and (max-width:1280px) {
            .post-slide .post-content {
                padding: 0px 15px 25px 15px;
            }
        }
    </style>
    @livewireStyles
@endsection
@section('content')
    <div role="main" class="main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($home_slider as $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$item->id}}" class="{{$loop->first ? 'active' : ''}}"></li>
                @endforeach
            </ol>
            <div id="carrousel" class="carousel-inner">
                @foreach ($home_slider as $item)
                    <div data-pause="true" data-interval="10000" class="carousel-item {{$loop->first ? 'active' : ''}}">
                        <div class="videoSlider">
                            <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted
                                src="{{ $item->slider_video }}">
                            </video>
                        </div>
                    </div>
                @endforeach
                <!-- Carousel item  2 -->
                <!-- end of carousel item 2-->
                <!-- Carousel item  3 -->
                {{-- <div data-pause="true" data-interval="10000" class="carousel-item active">
                    <div class="videoSlider">
                        <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted
                            src="{{ asset('front/assets/video/home1.mp4') }}">
                        </video>
                    </div>
                </div> --}}
                <!-- end of carousel item 3-->

            </div>
            {{-- <a class="carousel-control-prev" href="javascript:void(0)" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="javascript:void(0)" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a> --}}

        </div>

        @if ($setting->service_enable)
            <section id="our_services"
                class="py-5 bg-color-quaternary section section-height-4 border-0 m-0 appear-animation"
                data-appear-animation="fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="overflow-hidden">
                                <h2
                                    class="text-primary font-weight-bold"
                                    data-appear-animation="maskUp">{{ $setting->service_description }}</h2>
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
                    <div class="row">
                        <div class="col text-center">
                            <a data-hash data-hash-offset="95" href="{{ route('front.page.services') }}"
                                class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation"
                                data-appear-animation="fadeInUpShorter">{{ $setting->service_btn_text }}</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section id="banner_slider my-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover bg-color-quaternary mb-0"
                        data-plugin-options="{'autoplayTimeout': 9000}"
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
                                                <h2 class="text-color-primary mt-5 font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="500"
                                                    data-plugin-options="{'minWindowWidth': 0}"><span
                                                        class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>
                                                        Your Omani Gateway to the Skies </h2>
                                                <h1 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pr-lg-5 mr-lg-5 mb-3 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="750"
                                                    data-plugin-options="{'minWindowWidth': 0}"> Aligning with the skies
                                                </h1>
                                                <p class="text-3 text-color-light font-weight-light mb-4 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1000"
                                                    data-plugin-options="{'minWindowWidth': 0}">Drone technology can transform your business; providing you with eagle eye
                                                    perspectives and capabilities previously unknown. Drone inspections can save you
                                                    time and cost with their ability to fly across hard to reach areas and provide
                                                    accurate real time data. Enabling you to speed up your processes and improve your
                                                    efficiency, no matter what industry you are in.
                                                    What’s more, drone technology supports cleaner air quality, reducing carbon
                                                    emissions and your carbon footprint by replacing previously utilized aircraft or
                                                    trucks for the same jobs</p>
                                                <a href="{{ route('front.page.about') }}"
                                                    class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1250"
                                                    data-plugin-options="{'minWindowWidth': 0}">About us
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
                                                <h2 class="text-color-primary mt-5 font-weight-bold text-uppercase text-4 line-height-3 mb-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="700"
                                                    data-plugin-options="{'minWindowWidth': 0}"><span
                                                        class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>
                                                        Your Omani Gateway to the Skies </h2>
                                                <h1 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pr-lg-5 mr-lg-5 mb-3 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="750"
                                                    data-plugin-options="{'minWindowWidth': 0}">Aligning with the skies</h1>
                                                <p class="text-3 text-color-light font-weight-light mb-4 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1000"
                                                    data-plugin-options="{'minWindowWidth': 0}">IBN FIRNAS, founded in 2018, is the sole distributor for DJI Drones in the Sultanate.
                                                    We take on the responsibility to sow the seeds of progress in Oman. To that end,
                                                    we provide you with all types of enterprise drones along with the necessary
                                                    training, to support a variety of functionalities across various industries, including
                                                    aerial photography, building inspection, agriculture surveillance and mapping,
                                                    rescue operations, oil and gas refinery inspection and more</p>
                                                    <a href="{{ route('front.page.contact') }}"
                                                    class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1250"
                                                    data-plugin-options="{'minWindowWidth': 0}">Get Connected
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



        @if ($setting->product_enable)
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-primary font-weight-bold mt-5">{{ $setting->product_title }}</h2>
                    </div>
                    @foreach ($products as $item )

                    <div class="col-lg-6 col-12 my-3">
                        <div class="post-slide" style="height: 400px;">
                            <div class="post-img">
                                <img src="{{ $item->thumbnail_product_image }}" style="height: 400px;" alt="">
                                <a href="{{ route('front.page.product.show', $item) }}" class="over-layer"><i
                                        class="fa fa-link"></i></a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('front.page.product.show', $item) }}">{{ $item->product_name }}</a>
                                </h3>
                                <p class="post-description">{{ Str::limit($item->description, 40) }}</p>
                                {{-- <span class="post-date">(OMR) {{ $item->price }}</span> --}}
                                <a href="{{ route('order.product.create', $item) }}" class="read-more">Get A
                                    Quote</a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="col text-center">
                    <a data-hash data-hash-offset="95" href="{{ route('front.page.products') }}"
                        class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter">{{ $setting->product_btn_text }}
                    </a>
                </div>
            </div>
        @endif


        @if ($setting->team_enable)
            <section id="our_team">
                <div class="col-12 text-center">
                    <h2 class="text-primary font-weight-bold mt-5">{{ $setting->team_title }}</h2>
                </div>
                <div class="container">
                    <div class="row team-list sort-destination" data-sort-id="team">
                        @foreach ($team as $item)
                            <div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
                                <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                                    <span class="thumb-info-wrapper">
                                        <a href="">
                                            <img src="{{ $item->image }}" class="img-fluid" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{ $item->name }}</span>
                                                <span class="thumb-info-type">{{ $item->title }}</span>
                                            </span>
                                        </a>
                                    </span>
                                    <span class="thumb-info-caption">
                                        <span class="thumb-info-caption-text">{{ $item->description }}</span>
                                        {{-- <span class="thumb-info-social-icons mb-4">
                                            <a target="_blank" href="http://www.facebook.com"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                            <a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                                        </span> --}}
                                    </span>
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a data-hash data-hash-offset="95" href=""
                            class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation"
                            data-appear-animation="fadeInUpShorter">{{ $setting->team_btn_text }}
                        </a>
                    </div>
                </div>
            </section>
        @endif
        <section id="Our_activites">
            <div class="col-12 text-center">
                <h2 class="text-primary font-weight-bold my-5">OUR ACTIVITIES</h2>
            </div>
            <div class="owl-carousel my_slider video-section my-5">
                <div class="item">
                    <div>
                        <img src="{{asset('front/assets/video/home1.gif')}}" >
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('front/assets/video/home2.gif')}}" >
                    </div>
                </div>
            </div>
        </section>
        <section id="Partners" class="d-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 my-5 text-center">
                        <h2 class="text-primary font-weight-bold mt-5 mb-5">Our Partners</h2>
                        <div class="owl-carousel owl-theme dots-morphing"
                            data-plugin-options="{'responsive': {'0': {'items': 1}, '379': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
                            <div>
                                <img alt="" class="img-fluid rounded" height="150px;"
                                    src="{{ asset('front/assets/img/ac.png') }}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" height="150px;"
                                    src="{{ asset('front/assets/img/ac1.png') }}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" height="150px;"
                                    src="{{ asset('front/assets/img/ac2.png') }}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" height="150px;"
                                    src="{{ asset('front/assets/img/ac3.jpg') }}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" height="150px;"
                                    src="{{ asset('front/assets/img/ac4.png') }}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" height="150px;"
                                    src="{{ asset('front/assets/img/ac5.png') }}">
                            </div>
                            <div>
                                <img alt="" class="img-fluid rounded" height="150px;"
                                    src="{{ asset('front/assets/img/ac6.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Our_partners">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-primary font-weight-bold mt-5 mb-5">Our Partners</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div style=""
                            class="owl-carousel owl-theme stage-margin nav-style-1 owl-loaded owl-drag owl-carousel-init"
                            data-plugin-options="{'items': 2, 'margin': 10, 'loop': true, 'nav': true, 'dots': true, 'stagePadding': 40}"
                            style="height: auto;">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-346px, 0px, 0px); transition: all 0s ease 0s; width: 1814px; margin-auto;">
                                    <div class="owl-item" style="">
                                        <div>
                                            <a href="JavaScript:void(0)">
                                                <img alt="" class="img-fluid rounded"
                                                    src="{{ asset('front/assets/img/partner2.png') }}">

                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="">
                                        <div>
                                            <a href="JavaScript:void(0)">
                                                <img alt="" class="img-fluid rounded mt-5"
                                                src="{{ asset('front/assets/img/partner1.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="">
                                        <div>
                                            <a href="JavaScript:void(0)">
                                                <img alt="" class="img-fluid rounded mt-5"
                                                    src="{{ asset('front/assets/img/partner3.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 163.333px; margin-right: 10px;">
                                        <div>
                                            <a href="JavaScript:void(0)">
                                                <img alt="" class="img-fluid rounded mt-5"
                                                    src="{{ asset('front/assets/img/partner4.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 163.333px; margin-right: 10px;">
                                        <div>
                                            <a href="JavaScript:void(0)">
                                                <img alt="" class="img-fluid rounded mt-5"
                                                    src="{{ asset('front/assets/img/partner5.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 163.333px; margin-right: 10px;">
                                        <div>
                                            <a href="JavaScript:void(0)">
                                                <img alt="" class="img-fluid rounded mt-5"
                                                    src="{{ asset('front/assets/img/partner6.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation"
                                    class="owl-prev"></button><button type="button" role="presentation"
                                    class="owl-next"></button></div>
                            <div class="owl-dots"></div>
                        </div>
                    </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-primary mt-3 font-weight-bold">Our Clients</h2>
                </div>

                <div class="col-12">
                    <div class="owl-carousel owl-theme stage-margin mt-3" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded" src="{{asset('front/assets/img/esbar.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded mt-3" src="{{asset('front/assets/img/port.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded mt-5" src="{{asset('front/assets/img/platinum.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded mt-3" src="{{asset('front/assets/img/Gutech.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded mt-4" src="{{asset('front/assets/img/crowne.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded mt-5" src="{{asset('front/assets/img/dawood.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded" src="{{asset('front/assets/img/bp.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded mt-5" src="{{asset('front/assets/img/public_authority.png')}}">
                        </div>
                        <div>
                            <img style="height:auto;" alt="" class="img-fluid rounded" src="{{asset('front/assets/img/muskatbay.png')}}">
                        </div>

                    </div>
                </div>
            </div>

        </div>

        @if ($setting->blog_enable)
            <section class="our-blog">
                <div class="container">
                    <div class="row mt-3 pt-5">
                        <div class="col">
                            <p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span
                                    class="line-pre-title bg-color-primary"></span>our blog</p>
                            <h2 class="text-color-secondary font-weight-bolder text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                {{ $setting->blog_title }}
                            </h2>
                        </div>
                    </div>
                    <div class="row mb-3 pb-5">
                        <div class="col">
                            <div class="row">
                                @foreach ($blogs as $item)
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <article>
                                            <div class="card border-0 border-radius-0 box-shadow-1 appear-animation"
                                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="min-height: 655px !important;">
                                                <div class="card-body p-4 z-index-1">
                                                    <a href="{{ route('front.page.blog.show', $item) }}">
                                                        <img class="card-img-top border-radius-0 " height="300px"
                                                            src="{{ $item->thumbnail_blog_image }}" alt="{{ $item->title }}">
                                                    </a>
                                                    <div class="card-body p-0">
                                                        <h4 class="card-title mb-3 text-5 font-weight-bold mt-3"><a
                                                                class="text-color-secondary"
                                                                href="{{ route('front.page.blog.show', $item) }}">{{ $item->title }}</a>
                                                        </h4>
                                                        <p class="card-text mb-3">{{ $item->description }}</p>
                                                        <a href="{{ route('front.page.blog.show', $item) }}"
                                                            class="font-weight-bolder text-uppercase text-decoration-none d-block mt-3">Read
                                                            More +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 mt-2 text-center">
                            <a data-hash data-hash-offset="95" href="{{ route('front.page.blogs') }}"
                                class="btn btn-primary custom-btn text-center* text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation"
                                data-appear-animation="fadeInUpShorter">{{ $setting->blog_btn_text }}</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <div class="container py-5">
            @livewire('front.contact-form')
        </div>

    </div>
@endsection
@section('script')
    @livewireScripts
@endsection
