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
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/BreadcrumAgri.png')}}'); background-position:center;">
   <div class="container">
      <div class="row mt-5">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-9 font-weight-bold">{{$industry->industry_name}}</h1>
         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
               <li><a href="{{url('/')}}">Home</a></li>
               <li class="active">Industries</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section>



<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="text-primary mt-3 font-weight-bold">Agriculture Drones</h2>
        </div>

        <div class="col-12">
            <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                <div>
                    <img alt="" class="img-fluid rounded" src="{{asset('front/assets/img/products/rtx.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{asset('front/assets/img/products/phantom.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{asset('front/assets/img/products/any.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{asset('front/assets/img/products/any2.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{asset('front/assets/img/products/min1.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{asset('front/assets/img/products/rtx.png')}}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{asset('front/assets/img/products/phantom.png')}}">
                </div>
            </div>
        </div>
    </div>

</div>

</section>




 <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
    <div class="container">
       <div class="row align-items-center justify-content-center">
        <div class="col-12 text-left">
            {!!$industry->body!!}
         </div>

       </div>
    </div>
 </section>

@endsection

