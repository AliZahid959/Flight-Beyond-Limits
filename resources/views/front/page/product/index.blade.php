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
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/shop.jpg')}}'); background-position:center;">
   <div class="container">
      <div class="row mt-5">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-9 font-weight-bold">Shop</h1>
            {{-- <span class="sub-title">The perfect choice for your next project</span> --}}
         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
               <li><a href="">Home</a></li>
               <li class="active">Pages</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="font-weight-bold mt-5"></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 my-5 text-center">
            <h2 class="font-weight-bold">Accessories</h2>
            <div class="owl-carousel owl-theme dots-morphing" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
                <div>
                    <img alt="" class="img-fluid rounded"  height="200px;" src="{{asset('front/assets/img/ac.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac1.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac2.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac3.jpg')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac4.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac5.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac6.png')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 my-5 text-center">
            <h2 class="font-weight-bold">DJI Enterprise Drones</h2>
            <div class="owl-carousel owl-theme dots-morphing" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
                <div>
                    <img alt="" class="img-fluid rounded"  height="200px;" src="{{asset('front/assets/img/ac.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac1.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac2.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac3.jpg')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac4.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac5.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac6.png')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 my-5 text-center">
            <h2 class="font-weight-bold">Industrial</h2>
            <div class="owl-carousel owl-theme dots-morphing" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
                <div>
                    <img alt="" class="img-fluid rounded"  height="200px;" src="{{asset('front/assets/img/ac.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac1.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac2.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac3.jpg')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac4.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac5.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" height="200px;" src="{{asset('front/assets/img/ac6.png')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="font-weight-bold">Our Products</h2>
        </div>
        <div class="col">
            <div class="tabs tabs-bottom tabs-center tabs-simple">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimple1" data-toggle="tab">Camera Drones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimple2" data-toggle="tab">Hand Held</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimple3" data-toggle="tab">Education And Industry</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="#tabsNavigationSimple4" data-toggle="tab">Services</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tabsNavigationSimple1">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera.png')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Avato Pro-view Combo</h4>
                                        <p class="text-8 mt-2">$2120</p>
                                        <p class="card-text">Avata lets you Experience immersive flight it supports 4k video and next-level safety with its built in proppler guard</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera2.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mini 3 Pro</h4>
                                        <p class="text-8 mt-2">$1150</p>
                                        <p class="card-text">Dji Mini Pro is just as powerful as its portable weighing less than 246 g it offers upgrading safety a 1/1.3 inch sensor</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera3.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mavic 3</h4>
                                        <p class="text-8 mt-2">$1750</p>
                                        <p class="card-text">Mavic 3 comes with a 4/3 CMOS Hasselblad camera and its equipped with obstacle Sensing</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimple2">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera.png')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Avato Pro-view Combo</h4>
                                        <p class="text-8 mt-2">$2120</p>
                                        <p class="card-text">Avata lets you Experience immersive flight it supports 4k video and next-level safety with its built in proppler guard</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera2.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mini 3 Pro</h4>
                                        <p class="text-8 mt-2">$1150</p>
                                        <p class="card-text">Dji Mini Pro is just as powerful as its portable weighing less than 246 g it offers upgrading safety a 1/1.3 inch sensor</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera3.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mavic 3</h4>
                                        <p class="text-8 mt-2">$1750</p>
                                        <p class="card-text">Mavic 3 comes with a 4/3 CMOS Hasselblad camera and its equipped with obstacle Sensing</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimple3">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera.png')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Avato Pro-view Combo</h4>
                                        <p class="text-8 mt-2">$2120</p>
                                        <p class="card-text">Avata lets you Experience immersive flight it supports 4k video and next-level safety with its built in proppler guard</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera2.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mini 3 Pro</h4>
                                        <p class="text-8 mt-2">$1150</p>
                                        <p class="card-text">Dji Mini Pro is just as powerful as its portable weighing less than 246 g it offers upgrading safety a 1/1.3 inch sensor</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera3.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mavic 3</h4>
                                        <p class="text-8 mt-2">$1750</p>
                                        <p class="card-text">Mavic 3 comes with a 4/3 CMOS Hasselblad camera and its equipped with obstacle Sensing</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="tabsNavigationSimple4">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera.png')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Avato Pro-view Combo</h4>
                                        <p class="text-8 mt-2">$2120</p>
                                        <p class="card-text">Avata lets you Experience immersive flight it supports 4k video and next-level safety with its built in proppler guard</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera2.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mini 3 Pro</h4>
                                        <p class="text-8 mt-2">$1150</p>
                                        <p class="card-text">Dji Mini Pro is just as powerful as its portable weighing less than 246 g it offers upgrading safety a 1/1.3 inch sensor</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('front/assets/img/camera3.jpg')}}" height="380px;" alt="Card Image">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1 text-4 font-weight-bold">DJI Mavic 3</h4>
                                        <p class="text-8 mt-2">$1750</p>
                                        <p class="card-text">Mavic 3 comes with a 4/3 CMOS Hasselblad camera and its equipped with obstacle Sensing</p>
                                        <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection