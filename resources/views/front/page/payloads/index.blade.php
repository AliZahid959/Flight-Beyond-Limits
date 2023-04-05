@extends('front.layout.app2')
@section('content')
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/payloads/payload-banner.jpg')}}'); background-position:center;">
   <div class="container">
      <div class="row mt-5">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-9 font-weight-bold">DJI PAYLOADS</h1>
         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
               <li><a href="{{url('/')}}">Home</a></li>
               <li class="active">DJI</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section id="Dji_Payloads">
    <div class="container">
       <div class="row">
          <div class="col-12 text-center">
             <h2 class="text-primary font-weight-bold my-5">All PAYLOADS</h2>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
             <div class="card" style="height:520px;">
                <img class="card-img-top mx-auto" src="{{asset('front/assets/img/payloads/playload-1.png')}}" style="height: 300px; width:300px;" alt="Card Image">
                <div class="card-body">
                   <h4 class="card-title mb-1 text-4 font-weight-bold">ZENMUSE P1</h4>
                   <p class="card-text">The Zenmuse P1 integrates a full-frame sensor with interchangeable fixed-focus lenses on a</p>
                   <a href="{{url('/payload_detail')}}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
             <div class="card" style="height:520px;">
                <img class="card-img-top mx-auto" src="{{asset('front/assets/img/payloads/playload-2.png')}}" style="height: 300px; width:300px;" alt="Card Image">
                <div class="card-body">
                   <h4 class="card-title mb-1 text-4 font-weight-bold">ZENMUSE L1</h4>
                   <p class="card-text">The Zenmuse L1 integrates a Livox Lidar module, a high-accuracy IMU, and a camera with a 1-inch CMOS on a 3-axis stabilized gimbal. When used</p>
                   <a href="{{url('/payload_detail')}}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
             <div class="card" style="height:520px;">
                <img class="card-img-top mx-auto" src="{{asset('front/assets/img/payloads/playload-3.png')}}" style="height: 300px; width:300px;" alt="Card Image">
                <div class="card-body">
                   <h4 class="card-title mb-1 text-4 font-weight-bold">ZENMUSE H20 SERIES</h4>
                   <p class="card-text">The Zenmuse H20 Series are integrated multi-sensor payloads with intelligent features that</p>
                   <a href="{{url('/payload_detail')}}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                </div>
             </div>
          </div>
        </div>
        <div class="row my-5">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
               <div class="card" style="height:520px;">
                  <img class="card-img-top mx-auto" src="{{asset('front/assets/img/payloads/playload-1.png')}}" style="height: 300px; width:300px;" alt="Card Image">
                  <div class="card-body">
                     <h4 class="card-title mb-1 text-4 font-weight-bold">ZENMUSE XT2</h4>
                     <p class="card-text">Capture 4K and thermal imagery with the Zenmuse XT2 – a dual sensor thermal solution</p>
                     <a href="{{url('/payload_detail')}}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
               <div class="card" style="height:520px;">
                  <img class="card-img-top mx-auto" src="{{asset('front/assets/img/payloads/playload-2.png')}}" style="height: 300px; width:300px;" alt="Card Image">
                  <div class="card-body">
                     <h4 class="card-title mb-1 text-4 font-weight-bold">ZENMUSE L1</h4>
                     <p class="card-text">The Zenmuse L1 integrates a Livox Lidar module, a high-accuracy IMU, and a camera with a 1-inch CMOS on a 3-axis stabilized gimbal. When used</p>
                     <a href="{{url('/payload_detail')}}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
               <div class="card" style="height:520px;">
                  <img class="card-img-top mx-auto" src="{{asset('front/assets/img/payloads/playload-3.png')}}" style="height: 300px; width:300px;" alt="Card Image">
                  <div class="card-body">
                     <h4 class="card-title mb-1 text-4 font-weight-bold">ZENMUSE H20 SERIES</h4>
                     <p class="card-text">The Zenmuse H20 Series are integrated multi-sensor payloads with intelligent features that</p>
                     <a href="{{url('/payload_detail')}}" class="read-more text-color-primary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                  </div>
               </div>
            </div>
          </div>
</section>

 @endsection