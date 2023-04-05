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
@endsection

@section('content')
    <div role="main" class="main">
        <section
            class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
            style="background-image: url('{{ asset('front/assets/img/slide2.jpg') }}'); background-position:center;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">All Blogs</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="">Home</a></li>
                            <li class="active">Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-4 mt-5">
            <div class="row ">
                <div class="col-12 text-center">
                    <h1 class="font-weight-bold">ALL BLOGS</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    @foreach ($blogs as $item)
                        <div class="col-lg-12">
                            <div class="blog-posts">
                                <article class="post post-medium">
                                    <div class="row mb-3">
                                        <div class="col-lg-5">
                                            <div class="post-image">
                                                <div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light mb-0 owl-loaded owl-drag owl-carousel-init"
                                                    data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}"
                                                    style="height: auto;">
                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage"
                                                            style="transform: translate3d(-336px, 0px, 0px); transition: all 0.25s ease 0s; width: 1011px;">
                                                            <div class="owl-item"
                                                                style="width: 326.891px; margin-right: 10px;">
                                                                <div>
                                                                    <div class="img-thumbnail border-0 p-0 d-block">
                                                                        <img class="img-fluid border-radius-0"
                                                                            src="{{ $item->thumbnail_blog_image }}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="post-content">
                                                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                    <a
                                                        href="{{ route('front.page.blog.show', $item) }}">{{ $item->title }}</a>
                                                </h2>
                                                <p class="mb-0">{{ $item->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="post-meta">
                                                <span><i class="far fa-calendar-alt"></i> {{ $item->created_at }} </span>
                                                <span><i class="far fa-user"></i> By <a
                                                        href="#">{{ $item->author_name }}</a> </span>
                                                <span>
                                                    <i class="far fa-folder"></i>
                                                    <a href="#">{{ implode(', ', $item->meta_keyword) }}</a>
                                                </span>
                                                <span><i class="far fa-comments"></i> <a
                                                        href="#">{{ $item->category->category_name }}</a></span>
                                                <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a
                                                        href="{{ route('front.page.blog.show', $item) }}"
                                                        class="btn btn-xs btn-light text-1 text-uppercase">Read
                                                        More</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
