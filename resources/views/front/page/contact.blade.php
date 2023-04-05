@extends('front.layout.app2')
@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('css')
    @livewireStyles
@endsection
@section('content')
    <div class="main">

        <section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/Commitment.jpg')}}'); background-position:center;">
            <div class="container">
               <div class="row mt-5">
                  <div class="col-md-12 align-self-center p-static order-2 text-center">
                     <h1 class="text-9 font-weight-bold">Contact US</h1>
                  </div>
                  <div class="col-md-12 align-self-center order-1">
                     <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active"></li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>

         <div class="container">
            <div class="row">
                <div class="col-12 text-center my-3">
                    <h2 class="text-primary mt-3 font-weight-bold">Contact us</h2>
                    <p class="text-2 pb-3 mb-4 text-align-start appear-animation w-100 animated fadeInUpShorter appear-animation-visible">
                        Thank you for choosing Ibn Firnas as your drone destination. We look forward to
                        helping you explore the world from a whole new perspective!
                        We take customer service seriously. Our team is always available to answer any
                        questions you may have about our products or services.
                        Contact us and let’s discuss how our drones can help elevate your industry
                        process and efficiency today!
                    </p>
                </div>
             </div>
         </div>


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
        <div class="container">
            <div class="row">
                <div class="col-6">
                    @livewire('front.contact-form')
                </div>
                <div class="col-6 mt-5 pt-5">
                    <div class="mapouter mt-5 pt-3"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=ibn firnas drone center&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:75%;width:100%;}</style></div></div>            </div>
                </div>
        </div>
@endsection
@section('script')
    @livewireScripts
@endsection


