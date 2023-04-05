@extends('front.layout.app2')
@section('content')
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/software/banner-software.jpg')}}'); background-position:center;">
   <div class="container">
      <div class="row mt-5">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-9 font-weight-bold">DJI SOFTWARE</h1>
         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
               <li><a href="{{url('/')}}">Home</a></li>
               <li class="active">SOFTWARE</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section id="Dji_Payloads my-4">
    <div class="container">
       <div class="row">
          <div class="col-12 text-center">
             <h2 class="text-primary font-weight-bold my-5">All SOFTWARES</h2>
          </div>
       </div>
       <div class="row mb-4">

        @foreach ($software as $item)

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


 @endsection
