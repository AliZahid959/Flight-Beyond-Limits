@extends('front.layout.app2')


@section('content')

    <div role="main" class="main shop pt-0">
        <section id="banner_slider">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover bg-color-quaternary mb-0"
                        data-plugin-options="{'autoplayTimeout': 10000}"
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
                                                        class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>IBN
                                                    FIRNAS ONLINE SHOP</h2>
                                                <h1 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pr-lg-5 mr-lg-5 mb-3 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="750"
                                                    data-plugin-options="{'minWindowWidth': 0}">IBN FIRNAS</h1>
                                                <p class="text-4 text-color-light font-weight-light mb-4 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1000"
                                                    data-plugin-options="{'minWindowWidth': 0}">Aligning with the Skies!</p>
                                                <a href="{{ route('front.page.contact') }}"
                                                    class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1250"
                                                    data-plugin-options="{'minWindowWidth': 0}">GET CONNECTED</a>
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
                                                    data-appear-animation-delay="500"
                                                    data-plugin-options="{'minWindowWidth': 0}"><span
                                                        class="line-pre-title bg-color-primary d-none d-lg-inline-block"></span>IBN
                                                    FIRNAS ONLINE SHOP</h2>
                                                <h1 class="text-color-secondary font-weight-extra-bold text-10 line-height-2 pr-lg-5 mr-lg-5 mb-3 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="750"
                                                    data-plugin-options="{'minWindowWidth': 0}">IBN FIRNAS</h1>
                                                <p class="text-4 text-color-light font-weight-light mb-4 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1000"
                                                    data-plugin-options="{'minWindowWidth': 0}">Aligning with the Skies!</p>
                                                <a href="{{ route('front.page.contact') }}"
                                                    class="btn btn-primary btn-modern font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation"
                                                    data-appear-animation="fadeInUpShorter"
                                                    data-appear-animation-delay="1250"
                                                    data-plugin-options="{'minWindowWidth': 0}">GET CONNECTED</a>
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
        <section id="Our_activites">
            <div class="col-12 text-center">
                <h2 class="text-primary font-weight-bold my-5">Our Activites</h2>
            </div>
            <div class="owl-carousel my_slider video-section my-5">
                <div class="item">
                    <div>
                        <img src="{{asset('front/assets/video/home1.gif')}}" >
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('front/assets/video/shop.gif')}}" >
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{asset('front/assets/video/home2.gif')}}" >
                    </div>
                </div>
            </div>
        </section>


        <section id="Products">
            <div class="container">
                <div class="row">
                    @if ($setting->product_enable)
                    <div class="container">
                        @foreach ($product_categories as $category)

                            <div class="row mb-5 pb-3">
                                <div class="col-12 text-center">
                                    <h2 class="text-primary font-weight-bold mt-5">{{ $category->category_name }}</h2>
                                </div>

                                @forelse ($category->products as $item)
                                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                                        style="animation-delay: 200ms;">
                                        <div class="card my-3" style="height:550px !important">
                                            <img class="card-img-top" src="{{ $item->thumbnail_product_image }}"
                                                alt="Card Image">
                                            <div class="card-body">
                                                <h4 class="card-title mb-1 text-4 font-weight-bold">{{ $item->product_name }}</h4>
                                                <p class="card-text">{{ Str::limit($item->description, 50) }}</p>
                                                <a href="{{ route('front.page.product.show', $item) }}"
                                                    class="read-more text-color-primary font-weight-semibold text-2 mr-5">Show
                                                    More</a>
                                                <a href="{{ route('order.product.create' , $item) }}"
                                                    class="read-more text-color-primary font-weight-semibold text-2 ml-5">Get A
                                                    Quote <i class="fas fa-angle-right position-relative top-1 ml-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>

                        @endforeach
                    </div>

                @endif
                </div>
                {{-- <div class="row">
                    <div class="col text-center">
                        <a data-hash data-hash-offset="95" href="{{ route('front.page.products') }}"
                            class="btn btn-primary custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation"
                            data-appear-animation="fadeInUpShorter">{{ $setting->product_btn_text }}</a>
                    </div>
                </div> --}}
            </div>
        </section>

        <section id="Dji_Software">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-primary font-weight-bold my-4">SOFTWARES</h2>
                    </div>
                </div>
                <div class="row">


                    @foreach ($software as $item)

                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                            <div class="card" style="height:520px;">
                                <img class="card-img-top mx-auto" src="{{$item->thumbnail_software_image}}" style="height: 300px;" alt="Card Image">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">{{$item->software_name}}</h4>
                                    <p class="card-text">{{$item->description}}</p>
                                    <a href="{{route('front.page.software.show', $item)}}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                    <a href="{{ route('qoutation.software.create' , $item) }}"
                                       class="read-more text-color-primary font-weight-semibold text-2 ml-5">Get A
                                        Quote <i class="fas fa-angle-right position-relative top-1 ml-1"></i>
                                    </a>
                                </div>

                            </div>
                        </div>


                    @endforeach
                </div>
                {{-- <div class="row">
                    <div class="col text-center">
                        <a data-hash data-hash-offset="95" href="{{ url('/all_software') }}"
                            class="btn btn-primary my-5 custom-btn text-center text-uppercase text-decoration-none border-0 py-0 px-5 font-weight-semibold mt-4 appear-animation"
                            data-appear-animation="fadeInUpShorter">View All Software</a>
                    </div>
                </div> --}}
            </div>
        </section>

        <section id="wher_to_buy">
            <div class="row justify-content-center my-5">
                <div class="col-md-10 col-lg-4 text-center">
                    <div class="feature-box feature-box-style-4 justify-content-center appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="fadeInUp" data-appear-animation-delay="0" style="animation-delay: 0ms;">
                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                            <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                <span class="box-content p-0 m-0">
                                    <i class="icon-featured icon-bag icons"></i>
                                </span>
                            </span>
                        </span>
                        <div class="feature-box-info">
                            <h4 class="mb-2 mt-3 text-4 text-uppercase font-weight-bold">Where To Buy</h4>
                            <a href="{{route('front.page.products')}}" class="text-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-4 text-center">
                    <div class="feature-box feature-box-style-4 justify-content-center appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="fadeInUp" data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">
                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                            <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                <span class="box-content p-0 m-0">
                                    <i class="icon-featured icon-earphones-alt icons"></i>
                                </span>
                            </span>
                        </span>
                        <div class="feature-box-info">
                            <h4 class="mb-2 mt-3 text-4 text-uppercase font-weight-bold">Support</h4>
                            <a href="{{url('/contact')}}" class="text-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-4 text-center">
                    <div class="feature-box feature-box-style-4 justify-content-center appear-animation animated fadeInUp appear-animation-visible"
                        data-appear-animation="fadeInUp" data-appear-animation-delay="600"
                        style="animation-delay: 600ms;">
                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                            <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                <span class="box-content p-0 m-0">
                                    <i class="icon-featured icon-location-pin icons"></i>
                                </span>
                            </span>
                        </span>
                        <div class="feature-box-info">
                            <h4 class="mb-2 mt-3 text-4 text-uppercase font-weight-bold">Fly Safe</h4>
                            <a href="{{url('/about')}}" class="text-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
