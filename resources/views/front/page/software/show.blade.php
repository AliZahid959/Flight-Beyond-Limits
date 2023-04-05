<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>IBN FIRNAS</title>

    {{-- <meta name="keywords" content="{{$product->meta_keyword}}" /> --}}
    <meta name="description" content="{{ $software->meta_description }}">


    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap-star-rating/css/star-rating.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('front/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme-shop.css') }}">



    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/demos/demo-product-landing.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('front/assets/css/skins/skin-business-consulting-2.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('front/assets/vendor/modernizr/modernizr.min.js') }}"></script>

    <style>
        html #header .header-nav-links .header-nav-main nav>ul>li.dropdown-full-color.dropdown-primary a {

            color: black !important;

        }

        .featured-boxes-style-4 .featured-box .box-content {

            transition: transform 0.5s !important;

        }

        .featured-boxes-style-4 .featured-box .box-content:hover {

            transform: scale(1.1) !important;

        }
    </style>

</head>

<body data-target="#header" data-spy="scroll" data-offset="100">
    <div class="body">
        @php
            $services = App\Models\Service::take(6)->get();
            $softwares = App\Models\Software::take(3)->get();
            $product_categories = App\Models\ProductCategory::all();
        @endphp
        <header id="header"
            class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0 bg-dark box-shadow-none pb-4 pt-2 ">
                <div class="header-container">
                    <div class="header-row">
                        <div class="header-column d-lg-none">
                            <div class="header-row">
                                <a href="{{ url('/') }}"
                                    style="position: relative;
                              background: transparent !important;">
                                    <img alt="" src="{{ asset('front/assets/img/white.png') }}"
                                        style="height: 70px; width:195px;">
                                </a>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row justify-content-end">
                                <div
                                    class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text justify-content-start">
                                    <div
                                        class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills py-2" id="mainNav">
                                                <li class="mr-5">
                                                    <a href="{{ url('/') }}"
                                                        style="
                                             background: transparent !important; margin-top:0px !important;"
                                                        class="d-lg-block d-none mt-0">
                                                        <img alt=""
                                                            src="{{ asset('front/assets/img/white.png') }}"
                                                            style="height: 70px; width:195px;">
                                                    </a>
                                                </li>
                                                <li class="ml-lg-5 ml-0" style="">
                                                    <a style="margin-left: 0px !important;" class="nav-link"
                                                        href="{{ url('/') }}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-full-color dropdown-primary dropdown-mega">
                                                    <a style="margin-left:0px !important;color:aliceblue !important;" class="dropdown-item dropdown-toggle current-page-active"
                                                       href="{{ route('front.page.services') }}">
                                                    Services
                                                    <i class="fas fa-chevron-down"></i></a>
                                                    <ul class="dropdown-menu mt-5" style="margin-left: 0px;">
                                                       <li>
                                                          <div class="dropdown-mega-content pt-3 p-0 px-3">
                                                             <div class="row">
                                                                @foreach ($services as $item)
                                                                <div class="col-lg-4 col-12 p-lg-3 p-0">
                                                                   <a href="{{ route('front.page.service.show' , $item) }}" class="p-0">
                                                                      <div class="feature-box feature-box-style-2">
                                                      <img src="{{$item->dropdown_service_image}}"
                                                                            height="100px" width="150px"
                                                                            class="">
                                                                         <div class="feature-box-info">
                                                                            <h4
                                                                               class="font-weight-bold text-4 mb-0 mt-3">
                                                                               {{$item->service_name}}
                                                                            </h4>
                                                                            <p class="mb-0 text-3"> {{ Str::limit($item->description, 20) }}
                                                                            </p>
                                                                   <a href="{{  route('front.page.service.show' , $item)  }}"
                                                                      class="btn btn-outline pl-0">View
                                                                   More</a>
                                                                   </div>
                                                                   </div>
                                                                   </a>
                                                                </div>
                                                                @endforeach
                                                             </div>
                                                          </div>
                                                       </li>
                                                    </ul>
                                                 </li>

                                                <li class="dropdown ">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        Solutions
                                                    </a>
                                                    <ul class="dropdown-menu bg-light">
                                                        <li class="py-2 border-0">
                                                            <a class="dropdown-item font-bold text-dark"
                                                                href="{{ route('front.page.softwares') }}">
                                                                Softwares
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item font-bold text-dark"
                                                                href="{{ route('front.page.products') }}">Products<i
                                                                    class="fas fa-chevron-down"></i></a>
                                                            <ul class="dropdown-menu bg-light">

                                                                @foreach ($product_categories as $item)
                                                                    <li><a class="dropdown-item font-bold text-dark"
                                                                            href="{{ route('front.page.category.show', $item) }}">{{ $item->category_name }}</a>
                                                                    </li>
                                                                @endforeach


                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a style="margin-left: 0px !important;" style="margin-left:0px;"
                                                        class="nav-link" href="{{ route('front.page.blogs') }}">
                                                        Blogs
                                                    </a>
                                                </li>
                                                <li>
                                                    <a style="margin-left:0px !important;" class="nav-link"
                                                        href="{{ route('front.page.about') }}">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a style="margin-left:0px !important;" class="nav-link"
                                                        href="{{ route('front.page.contact') }}">
                                                        Contact Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a style="margin-left:0px !important; border:1px solid #41bcab; border-radius:20px;"
                                                        class="nav-link" href="{{ url('/academy') }}">
                                                        Academy
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section
            class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
            style="background-image: url({{ $software->banner_software_image }}); background-position:center;height:500px;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">{{ $software->software_name }}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center mt-5">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('front.page.softwares') }}">Software</a></li>
                            <li class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div role="main" class="main">
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
                                        <line x1="0" y1="0" x2="600" y2="0"
                                            stroke="#969696" stroke-width="5" class="appear-animation"
                                            data-appear-animation="customSVGLineAnim"
                                            data-appear-animation-delay="100" data-appear-animation-duration="2s">
                                        </line>
                                    </svg>
                                </span>
                                <strong
                                    class="font-weight-extra-bold text-3 text-sm-3-4 text-md-4 text-lg-3 text-xl-4 d-inline-block negative-ls-2 position-relative z-index-1 appear-animation"
                                    data-appear-animation="fadeInLeftShorter"
                                    data-appear-animation-delay="1200">{{ $software->software_name }}</strong>
                            </h1>
                            <p
                                class="text-3-5 pb-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible">
                                {{ $software->description }}
                            </p>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="custom-product-image-style-1 d-none d-lg-block">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                    <img src="{{ $software->thumbnail_software_image }}"
                                        style="height: auto; width:530px;  margin-left:80px;margin-top:50px;"
                                        class="img-fluid appear-animation" alt=""
                                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer pt-5 pb-4"></div>
                <div class="shape-divider shape-divider-bottom" style="height: 215px;">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 1920 215" preserveAspectRatio="xMinYMin">
                        <path fill="#FFF"
                            d="M-13,24c3.03-0.28,7.53-0.66,13-1c26.45-1.65,46.73-0.59,57,0c76.61,4.41,118,9,118,9
							c70.55,7.83,105.82,11.74,151,19c32.98,5.3,65.87,11.44,179,37c145.79,32.94,138.71,33.5,203,47c85.09,17.87,149.08,31.32,237,40
							c113.11,11.17,203.29,8.29,234,7c16.74-0.7,63.49-4.13,157-11c107.74-7.91,117.84-9.32,153-10c52.52-1.02,97.8,0.79,153,3
							c21.27,0.85,54.96,2.38,96,5c37.55,2.4,68.64,4.91,119,9c30.97,2.52,56.12,4.64,72,6c0,13.33,0,26.67,0,40c-646,0-1292,0-1938,0
							C-10.33,157.33-11.67,90.67-13,24z" />
                    </svg>
                </div>
            </section>

            <section class="section section-height-3 bg-light border-0 m-0 pt-0" id="specifications">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 mb-lg-4">
                            <div class="overflow-hidden mb-1">
                                <div class="appear-animation" data-appear-animation="maskUp"
                                    data-appear-animation-delay="500">
                                    <span
                                        class="d-block text-color-dark custom-letter-spacing-1 text-3-5 opacity-5 mb-0">Software</span>
                                </div>
                            </div>
                            <h2 class="text-color-dark font-weight-bold ls-0 text-9 mb-4">
                                {{ $software->software_name }}</h2>
                            <p class="text-3-5 text-color-dark opacity-5">{!! $software->body !!}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="Dji_Payloads my-4">
                <div class="container">
                   <div class="row">
                      <div class="col-12 text-center">
                         <h2 class="text-primary font-weight-bold my-5">Softwares</h2>
                      </div>
                   </div>
                   <div class="row mb-4">

                    @foreach ($softwares as $item)

                    <div class="my-2 col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
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
            </section>


            <footer id="footer" class="m-0 border-0 bg-color-dark overflow-hidden py-4">
                <div class="container">
                    <div class="row py-5 custom-row-footer">
                        <div
                            class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
                            <img alt="FIRNAS" style="position: relative;bottom:70px;margin-top:30px;"
                                height="90px;" src="{{ asset('front/assets/img/white.png') }}">
                            <p class="d-block m-0 text-color-light">Dar Al Manal Building, Office Number 402 4th
                                Floor
                                Madinat Sultan Qaboos OM, 100, Oman</p>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-9 footer-column">
                            <div
                                class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
                                <div
                                    class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
                                    <ul class="nav nav-pills justify-content-between h-100 mb-4 mb-lg-0">
                                        <li class="nav-item d-inline-flex flex-column flex-lg-row">
                                            <span
                                                class="footer-nav-phone py-2 d-flex align-items-center text-color-secondary font-weight-semibold text-uppercase justify-content-start mb-2 mb-lg-0">
                                                <span>
                                                </span>
                                                <a class="font-weight-bold text-color-light text-decoration-none"
                                                    href="">(+968) 9177 1779</a>
                                            </span>

                                        </li>
                                    </ul>

                                </div>
                                <nav class="nav-footer w-100 d-none d-lg-block mt-3">
                                    <ul class="nav nav-pills justify-content-end" id="mainNav">
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                                href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                                href="{{ route('front.page.about') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                                href="{{ route('front.page.services') }}">
                                                Services
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                                href="{{ route('front.page.blogs') }}">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary"
                                                href="{{ route('front.page.contact') }}">
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright container bg-color-dark">
                    <div class="row">
                        <div class="col-lg-12 text-center m-0">
                            <p class="text-color-light">IBN FIRNAS © 2021. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Vendor -->
        <script src="{{ asset('front/assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/lazysizes/lazysizes.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/vivus/vivus.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/bootstrap-star-rating/js/star-rating.min.js') }}"></script>
        <script src="{{ asset('front/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('front/assets/js/theme.js') }}"></script>


        <!-- Current Page Vendor and Views -->


        <!-- Demo -->
        <script src="{{ asset('front/assets/js/demos/demo-product-landing.js') }}"></script>
        <!-- Theme Custom -->
        <script src="{{ asset('front/assets/js/custom.js') }}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{ asset('front/assets/js/theme.init.js') }}"></script>

        <!-- Examples -->
        <script src="{{ asset('front/assets/js/examples/examples.image360.js') }}"></script>
        <script src="{{ asset('front/assets/js/examples/examples.gallery.js') }}"></script>


</body>

</html>
