@extends('front.layout.app2')
@section('content')
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{$about->banner_image}}); background-position:center;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-9 font-weight-bold">About US</h1>
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

<section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12">
                            {!!$about->body!!}
                        </div>
                    </div>
                </div>
            </section>
        </div>
</section>

<section id="" class="section section-height-4 bg-dark border-0 m-0 appear-animation" data-appear-animation="fadeIn" id="ourservices">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="overflow-hidden">
                    <span class="d-block text-color-primary custom-font-secondary font-weight-semibold appear-animation" data-appear-animation="maskUp">{{$about->core_value_heading}}</span>
                </div>
                <div class="overflow-hidden mb-4">
                    <h2 class="text-color-light font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">{{$about->core_value_description}}</h2>
                </div>
            </div>
        </div>
        <div class="featured-boxes featured-boxes-style-4 custom-featured-boxes-style-1">
            <div class="row mb-2">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <h4 class="mb-4"></h4>
                    <div class="card mt-5">
                        <img class="card-img-top" src="{{$about->honesty_section_image}}" alt="Card Image">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">HONESTY</h4>
                            <p class="card-text">
                               {{$about->honesty_section_description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card">
                        <img class="card-img-top" src="{{$about->innovation_section_image}}" alt="Card Image">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">INNOVATION</h4>
                            <p class="card-text">
                               {{$about->innovation_section_description}}
                            </p>
                        </div>
                    </div>
                </div>
                </a>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <div class="card mt-5">
                        <img class="card-img-top" src="{{$about->commitment_section_image}}" alt="Card Image">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">COMMITMENT</h4>
                            <p class="card-text">
                                {{$about->commitment_section_description}}
                            </p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
</div>

@endsection
