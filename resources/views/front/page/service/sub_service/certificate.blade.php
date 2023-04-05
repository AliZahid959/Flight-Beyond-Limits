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
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/a.jpg')}}'); background-position:center;">
    <div class="container">
       <div class="row mt-5">
          <div class="col-md-12 align-self-center p-static order-2 text-center">
             <h1 class="text-9 font-weight-bold">Certificates</h1>
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
    <div class="row mb-5 pb-3">
        <div class="col-12 text-center my-4">
            <h2 class="font-weight-bold">All Certificates</h2>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
            <div class="card">
                <img class="card-img-top" src="{{url('front/assets/img/slide3.jpg')}}" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title mb-1 text-4 font-weight-bold">Flight Simulator Certificate</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi.</p>
                    <a href="{{url('/enroll_form')}}" class="read-more text-color-primary font-weight-semibold text-2">Register Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
            <div class="card">
                <img class="card-img-top" src="{{url('front/assets/img/11.jpg')}}" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title mb-1 text-4 font-weight-bold">Drone Pilot Certificate</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi.</p>
                    <a href="{{url('/enroll_form')}}" class="read-more text-color-primary font-weight-semibold text-2">Register Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
            <div class="card">
                <img class="card-img-top" src="{{url('front/assets/img/12.jpg')}}" alt="Card Image">
                <div class="card-body">
                    <h4 class="card-title mb-1 text-4 font-weight-bold">Remote Pilot Certificate</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus nulla dui, in dapi.</p>
                    <a href="{{url('/enroll_form')}}" class="read-more text-color-primary font-weight-semibold text-2">Register Now</a>
                </div>
            </div>
        </div>
        <div class="col-12 text-center my-4">
            <a href="{{url('/enroll_form')}}" class="btn btn-outline btn-primary rounded btn-lg">Register Now</a>
        </div>
    </div>

</div>

@endsection

