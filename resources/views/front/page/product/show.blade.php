
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>IBN FIRNAS</title>

		{{-- <meta name="keywords" content="{{$product->meta_keyword}}" /> --}}
		<meta name="description" content="{{$product->meta_description}}">


		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/magnific-popup/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/bootstrap-star-rating/css/star-rating.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-shop.css')}}">



		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/demos/demo-product-landing.css')}}">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('front/assets/css/skins/skin-business-consulting-2.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('front/assets/vendor/modernizr/modernizr.min.js')}}"></script>

        <style>

            html #header .header-nav-links .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary a{

                color:black !important;

            }

            .featured-boxes-style-4 .featured-box .box-content{

                transition: transform 0.5s !important;

                }

                .featured-boxes-style-4 .featured-box .box-content:hover{

                transform: scale(1.1) !important;

                }

        </style>

	</head>
	<body data-target="#header" data-spy="scroll" data-offset="100">
		<div class="body">
            @php
            $services = App\Models\Service::take(6)->get();
            $software = App\Models\Software::take(3)->get();
            $product_categories = App\Models\ProductCategory::all();
            @endphp
        <header id="header" class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0 bg-dark box-shadow-none pb-4 pt-2 ">
               <div class="header-container">
                  <div class="header-row">
                     <div class="header-column d-lg-none">
                        <div class="header-row">
                           <a href="{{ url('/') }}" style="position: relative;
                              background: transparent !important;">
                           <img alt="" src="{{ asset('front/assets/img/white.png') }}"
                              style="height: 70px; width:195px;">
                           </a>
                        </div>
                     </div>
                     <div class="header-column">
                        <div class="header-row justify-content-end">
                           <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text justify-content-start">
                              <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                 <nav class="collapse">
                                    <ul class="nav nav-pills py-2" id="mainNav">
                                       <li class="mr-5">
                                          <a href="{{ url('/') }}" style="
                                             background: transparent !important; margin-top:0px !important;" class="d-lg-block d-none mt-0">
                                          <img alt="" src="{{ asset('front/assets/img/white.png') }}"
                                             style="height: 70px; width:195px;">
                                          </a>
                                       </li>
                                       <li class="ml-lg-5 ml-0" style="">
                                          <a style="margin-left: 0px !important;" class="nav-link" href="{{ url('/') }}">
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
                                                 <a class="dropdown-item font-bold text-dark" href="{{route('front.page.softwares')}}">
                                                     Softwares
                                                 </a>
                                              </li>
                                             <li class="dropdown-submenu">
                                                 <a class="dropdown-item font-bold text-dark" href="{{route('front.page.products')}}">Products<i class="fas fa-chevron-down"></i></a>
                                                 <ul class="dropdown-menu bg-light">

                                                     @foreach ($product_categories as $item)

                                                         <li><a class="dropdown-item font-bold text-dark" href="{{route('front.page.category.show' , $item)}}">{{$item->category_name}}</a></li>

                                                     @endforeach


                                                 </ul>
                                             </li>

                                         </ul>
                                     </li>


                                       {{-- <li class="dropdown dropdown-full-color dropdown-primary">
                                          <a style="margin-left: 0px !important;" class="dropdown-item dropdown-toggle" href="">
                                          Solutions
                                          </a>
                                          <ul class="dropdown-menu">

                                             <li class="py-2">
                                                <div class="col-12">
                                                   <a class="w-100 py-5" href="{{route('front.page.softwares')}}">
                                                     Softwares
                                                   </a>
                                                </div>
                                             </li>

                                             <li class="py-2">
                                                 <div class="col-12">
                                                    <a class="w-100 py-5" href="{{route('front.page.products')}}">
                                                      Products
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                         <li>
                                                             <a class="" href="">Dji Payloads</a>
                                                         </li>
                                                    </ul>
                                                 </div>
                                              </li>

                                          </ul>
                                       </li> --}}
                                       <li>
                                          <a style="margin-left: 0px !important;" style="margin-left:0px;" class="nav-link" href="{{ route('front.page.blogs') }}">
                                          Blogs
                                          </a>
                                       </li>
                                       <li>
                                          <a style="margin-left:0px !important;" class="nav-link" href="{{ route('front.page.about') }}">
                                          About Us
                                          </a>
                                       </li>
                                       <li>
                                          <a style="margin-left:0px !important;" class="nav-link" href="{{ route('front.page.contact') }}">
                                          Contact Us
                                          </a>
                                       </li>
                                       <li>
                                          <a style="margin-left:0px !important; border:1px solid #41bcab; border-radius:20px;" class="nav-link"
                                             href="{{url('/academy')}}">
                                          Academy
                                          </a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
                              <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                              <i class="fas fa-bars"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </header>

            <section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{$product->banner_product_image}}); background-position:center;height:600px;">
                <div class="container">
                   <div class="row mt-5">
                      <div class="col-md-12 align-self-center p-static order-2 text-center">
                         <h1 class="text-9 font-weight-bold">{{$product->product_name}}</h1>
                      </div>
                      <div class="col-md-12 align-self-center order-1">
                         <ul class="breadcrumb breadcrumb-light d-block text-center mt-5">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active"></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </section>
			<div role="main" class="main">
				<section id="intro" class="section section-with-shape-divider border-0 custom-bg-color-grey-1 overflow-visible mb-5 m-0 pt-5 pb-5 pb-lg-0">
					<div class="container position-relative z-index-2 h-100 py-md-5">
						<div class="row align-items-center justify-content-center h-100">
							<div class="col-lg-12 col-12">
								<h1 class="text-13 ls-0 line-height-1 custom-ws-nowrap mb-3 z-index-1 position-relative text-center text-sm-left">
									<span class="d-block position-relative">
										<span class="custom-bg-color-grey-1 z-index-1 position-relative pr-sm-4">
											<span class="d-inline-block text-color-grey positive-ls-3 custom-font-size-1 custom-letter-spacing-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">INTRODUCING</span>
										</span>
										<svg class="d-none d-sm-block position-absolute left-0 top-50pct transform3dy-n50 mt-2" height="1" width="99%">
										  	<line x1="0" y1="0" x2="600" y2="0" stroke="#969696" stroke-width="5" class="appear-animation" data-appear-animation="customSVGLineAnim" data-appear-animation-delay="100" data-appear-animation-duration="2s"></line>
										</svg>
									</span>
									<strong class="font-weight-extra-bold text-3 text-sm-3-4 text-md-4 text-lg-3 text-xl-4 d-inline-block negative-ls-2 position-relative z-index-1 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1200">{{$product->product_name}}</strong>
								</h1>
								<p class="font-weight-light text-5 text-center text-sm-right mb-4" ></p>
								<div class="d-flex flex-column flex-sm-row align-items-center justify-content-end mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600">
									{{-- <span class="font-weight-bold mr text-4">{{$product->category->category_name}}</span> --}}
									{{-- <span class="text-color-primary font-weight-bold text-11 my-3 my-sm-0 mx-4"><small>(OMR)</small> {{$product->price}}</span> --}}
									<a href="{{ route('order.product.create' , $product) }}" class="btn btn-primary btn-rounded font-weight-bold text-4 px-5 py-3">Get A Qoute</a>
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="custom-product-image-style-1 d-none d-lg-block">
									{{-- <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
										<img src="{{$product->thumbnail_product_image}}" style="height: 300px; margin-left:80px;margin-top:50px;" class="img-fluid appear-animation" alt="" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" />
									</div> --}}
								</div>
							</div>
						</div>
					</div>
					<div class="spacer pt-5 pb-4"></div>
					<div class="shape-divider shape-divider-bottom" style="height: 215px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 215" preserveAspectRatio="xMinYMin">
						<path fill="#FFF" d="M-13,24c3.03-0.28,7.53-0.66,13-1c26.45-1.65,46.73-0.59,57,0c76.61,4.41,118,9,118,9
							c70.55,7.83,105.82,11.74,151,19c32.98,5.3,65.87,11.44,179,37c145.79,32.94,138.71,33.5,203,47c85.09,17.87,149.08,31.32,237,40
							c113.11,11.17,203.29,8.29,234,7c16.74-0.7,63.49-4.13,157-11c107.74-7.91,117.84-9.32,153-10c52.52-1.02,97.8,0.79,153,3
							c21.27,0.85,54.96,2.38,96,5c37.55,2.4,68.64,4.91,119,9c30.97,2.52,56.12,4.64,72,6c0,13.33,0,26.67,0,40c-646,0-1292,0-1938,0
							C-10.33,157.33-11.67,90.67-13,24z"/>
						</svg>
					</div>
				</section>

				<section class="section section-with-shape-divider border-0 bg-light overflow-visible my-5 z-index-1 m-0 pt-0 pb-1">
					<div class="container custom-xs-margin-top-1 pt-3">
						<div class="row align-items-start justify-content-center">

                            <div class="col-lg-8 col-12">
								<div class="overflow-hidden mb-1">
									<span class="d-block text-color-default custom-letter-spacing-1 text-3-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400"></span>
								</div>
								<div class="overflow-hidden mb-4">
									<h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">{{$product->product_name}}</h2>
								</div>
								<p class="font-weight-bold text-4-5 line-height-6 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"></p>
								<p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" style="word-wrap: break-word;" data-appear-animation-delay="1000">{{$product->description}}.</p>
								<a href="{{ route('order.product.create' , $product) }}" data-hash data-hash-offset="70" class="btn btn-primary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Get A Qoute</a>
							</div>
                            <div class="col-lg-4 col-12">
								<div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
									<img src="{{$product->thumbnail_product_image}}" style="hight:300px;" class="img-fluid custom-xl-margin-top-1 mt-4 appear-animation" alt="" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" />
								</div>
							</div>

						</div>
					</div>
				</section>

				{{-- <div class="container container-xl-custom position-relative overflow-hidden pb-5">
					<svg class="position-absolute w-100 h-100 z-index-2 p-events-none d-none d-lg-block" viewBox="0 0 120 120" version="1.1" xmlns="http://www.w3.org/2000/svg" style="bottom: -80px; left: 0;">
						<circle cx="60" cy="90" r="90" stroke="#edeeee" stroke-width="0.3" fill="transparent" class="appear-animation" data-appear-animation="customSVGLineAnimTwo" data-appear-animation-delay="200" data-appear-animation-duration="3s" data-plugin-options="{'accY': -300, 'forceAnimation': true}" />
					</svg>
					<div class="row" id="tour">
						<div class="col text-center pt-5 mt-5">
							<div class="overflow-hidden mb-1">
								<span class="d-block text-color-default positive-ls-3 text-3-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">360º VIRTUAL TOUR</span>
							</div>
							<div class="overflow-hidden mb-1">
								<h2 class="font-weight-bold negative-ls-05 text-9 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">{{$product->product_name}}</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="cd-product-viewer-wrapper" data-frame="5" data-friction="50">
							   	<div>
							      	<figure class="product-viewer appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							        	<img src="{{$product->thumbnail_product_image}}" alt="Product Preview">
							        	<div class="product-sprite" data-image="{{$product->thumbnail_product_image}}"></div>
							      	</figure>

							      	<div class="cd-product-viewer-handle">
							        	<span class="fill"></span>
							        	<span class="handle">
							        		Handle
							        		<span class="bars"></span>
							        	</span>
							      	</div>
							   	</div>
							</div>
						</div>
					</div>
				</div> --}}

				<section class="section section-height-3 bg-dark border-0 m-0" id="specifications">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-7 col-xl-8 mb-lg-4">
								<div class="overflow-hidden mb-1">
									<div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">
										<span class="d-block text-color-light custom-letter-spacing-1 text-3-5 opacity-5 mb-0">{{$product->product_name}}</span>
									</div>
								</div>
								<h2 class="text-color-light font-weight-bold ls-0 text-9 mb-4">Specifications</h2>
								<p class="text-3-5 text-color-light opacity-5">{!!$product->body!!}</p>
							</div>
							<div class="col-lg-5 col-xl-4 mb-5 mb-lg-0 pt-lg-5">
								<div class="d-flex flex-wrap align-items-center justify-content-lg-end">
									<span class="text-color-primary font-weight-bold text-11 line-height-1 mr-4">
										{{-- <span class="d-block text-color-light custom-font-size-2 line-height-3 font-weight-light opacity-5">Starting at</span> --}}
										{{-- <small>(OMR)</small> {{$product->price}} --}}
									</span>
									<a href="{{ route('order.product.create' , $product) }}" class="btn btn-primary btn-rounded font-weight-bold text-3-5 mt-2 px-5 py-3">Get A Qoute</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h3 class="text-color-light text-4 font-weight-bold mb-2">GENERAL Info</h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-4 pr-lg-4 py-lg-2">
								<ul class="list list-light list-unstyled mb-0">
									<li class="text-color-light font-weight-light mb-1"><span class="custom-min-width opacity-5">Prize :</span>{{$product->product_name}}</li>
								</ul>
							</div>
                            <div class="col-md-6 col-lg-4 pr-lg-4 py-lg-2">
								<ul class="list list-light list-unstyled mb-0">
									<li class="text-color-light font-weight-light mb-1"><span class="custom-min-width opacity-5">Category :</span>{{$product->category->category_name}}</li>
								</ul>
							</div>
						</div>
					</div>
				</section>


			    {{-- <div id="carouselExampleIndicators" style="opacity: 0.7;" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                    </ol>
                    <div id="carrousel" class="carousel-inner">

                        <!-- Carousel item  2 -->

                        <!-- end of carousel item 2-->
                        <!-- Carousel item  3 -->
                        <div data-pause="true" data-interval="10000" class="carousel-item active">
                            <div class="videoSlider">
                                <video width="100%" class="elVideo" loop="loop" autoPlay playsInline muted
                                    src="{{$product->product_video}}" id='video-slider-3'>
                                </video>
                            </div>
                        </div>
                        <!-- end of carousel item 3-->
                    </div>
                </div> --}}

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

			<footer id="footer" class="m-0 border-0 bg-color-dark overflow-hidden py-4">
                <div class="container">
                    <div class="row py-5 custom-row-footer">
                        <div class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
                            <img alt="FIRNAS" style="position: relative;bottom:70px;margin-top:30px;" height="90px;" src="{{asset('front/assets/img/white.png')}}">
                            <p class="d-block m-0 text-color-light">Dar Al Manal Building, Office Number 402 4th Floor Madinat Sultan Qaboos OM, 100, Oman</p>
                        </div>
                        <div class="col-12 col-sm-12 col-lg-9 footer-column">
                            <div class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
                                <div class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
                                    <ul class="nav nav-pills justify-content-between h-100 mb-4 mb-lg-0">
                                        <li class="nav-item d-inline-flex flex-column flex-lg-row">
                                            <span class="footer-nav-phone py-2 d-flex align-items-center text-color-secondary font-weight-semibold text-uppercase justify-content-start mb-2 mb-lg-0">
                                                <span>
                                                </span>
                                                <a class="font-weight-bold text-color-light text-decoration-none" href="">(+968) 9177 1779</a>
                                            </span>

                                        </li>
                                    </ul>

                                </div>
                                <nav class="nav-footer w-100 d-none d-lg-block mt-3">
                                    <ul class="nav nav-pills justify-content-end" id="mainNav">
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{url('/')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('front.page.about')}}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('front.page.services')}}">
                                                Services
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('front.page.blogs')}}">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="dropdown-secondary">
                                            <a class="nav-link text-color-light font-weight-bold letter-spacing-05 text-color-hover-primary" href="{{route('front.page.contact')}}">
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
                            <p class="text-color-light">IBN FIRNAS ©  2021.  All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('front/assets/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/lazysizes/lazysizes.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/vivus/vivus.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/bootstrap-star-rating/js/star-rating.min.js')}}"></script>
		<script src="{{asset('front/assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('front/assets/js/theme.js')}}"></script>


		<!-- Current Page Vendor and Views -->


		<!-- Demo -->
		<script src="{{asset('front/assets/js/demos/demo-product-landing.js')}}"></script>
		<!-- Theme Custom -->
		<script src="{{asset('front/assets/js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('front/assets/js/theme.init.js')}}"></script>

		<!-- Examples -->
		<script src="{{asset('front/assets/js/examples/examples.image360.js')}}"></script>
		<script src="{{asset('front/assets/js/examples/examples.gallery.js')}}"></script>


	</body>
</html>
