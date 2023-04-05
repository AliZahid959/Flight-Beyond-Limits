@extends('front.layout.app')
@section('meta')
    <title>{{$page->page_name}}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{$page->meta_description}}">
    <meta name="keywords" content="{{implode(',', $page->meta_keyword)}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('content')
<div class="main">
    <section class="section section-height-4 bg-quaternary border-0 m-0" id="contactus">
        <div class="container container-xl-custom">
            <div class="row mb-5">
                <div class="col text-center">
                    <span class="text-color-primary custom-font-secondary font-weight-semibold">{{$page->page_name}}</span>
                    <h2 class="text-color-light font-weight-bold mb-3">{{$page->meta_description}}</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 order-2 order-xl-1 mb-4 mb-lg-0">
                    <div class="card custom-card-style-1 h-100">
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection