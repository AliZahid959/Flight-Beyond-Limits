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
    <section
        class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/assets/img/shop.jpg') }}'); background-position:center;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">{{ $productCategory->category_name }}</h1>
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
            <div class="col-12 text-center">
                <h2 class="font-weight-bold">Our {{ $productCategory->category_name }}</h2>
            </div>
        </div>
        <div class="row">

            @foreach ($productCategory->products as $item)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                    style="animation-delay: 200ms;">
                    <div class="card my-3" style="height:620px !important">
                        <img class="card-img-top" src="{{ $item->thumbnail_product_image }}" alt="Card Image">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">{{ $item->product_name }}</h4>
                            {{-- <p class="text-8 mt-2">{{$item->price}}</p> --}}
                            <p class="card-text">{{ Str::limit($item->description, 50) }}</p>
                            <a href="{{ route('order.product.create', $item) }}"
                                class="read-more text-color-primary mr-5 font-weight-semibold text-2">Get A
                                Quote <i class="fas fa-angle-right position-relative top-1 ml-1"></i>
                            </a>
                            <a href="{{ route('front.page.product.show', $item) }}"
                                class="read-more text-color-primary font-weight-semibold ml-5 text-2">Shop Now</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
