@extends('front.layout.app2')

@section('content')

<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/Artboard.png')}}'); background-position:center;">
    <div class="container">
       <div class="row mt-5">
          <div class="col-md-12 align-self-center p-static order-2 text-center">
             <h1 class="text-9 font-weight-bold">Our Clients</h1>
          </div>
          <div class="col-md-12 align-self-center order-1">
             <ul class="breadcrumb breadcrumb-light d-block text-center">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Client</li>
             </ul>
          </div>
       </div>
    </div>
 </section>


<Section class="mt-5">
   <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="blog-posts">
                <article class="post post-medium">
                    <div class="row mb-3">
                        <div class="col-lg-5">
                            <div class="post-image mt-5">
                                <a href="https://www.bitlogicx.com/">
                                    <img src="{{asset('front/assets/img/cl2.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="post-content">
                                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="https://www.bitlogicx.com/">Bitlogicx</a></h2>
                                <p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post post-medium">
                    <div class="row mb-3">
                        <div class="col-lg-5">
                            <div class="post-image">
                                <a href="http://sernaatech.com/">
                                    <img src="{{asset('front/assets/img/cl1.png')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="post-content mt-5">
                                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="http://sernaatech.com/">Sernaa Tech</a></h2>
                                <p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
   </div>
</Section>
    
@endsection