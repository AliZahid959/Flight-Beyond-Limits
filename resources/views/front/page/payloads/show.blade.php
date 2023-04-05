@extends('front.layout.app2')
@section('content')
    <section
        class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/assets/img/payloads/payload-banner.jpg') }}'); background-position:center;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">ZENMUSE L1</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active">PAYLOADS</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="row my-5">
        <div class="col-md-5 mb-5 mb-md-0">
            <div class="thumb-gallery-wrapper">
                <div
                    class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3 owl-loaded owl-drag">
                    <div class="owl-stage-outer owl-height" style="height: 445px;">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2730px;">
                            <div class="owl-item active" style="width: 445px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid" src="{{asset('front/assets/img/payloads/playload-1.png')}}"
                                        data-zoom-image="{{asset('front/assets/img/payloads/playload-1.png')}}">
                                    <div class="zoomContainer"
                                        style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:445px;width:445px;">
                                        <div class="zoomWindowContainer" style="width: 400px;">
                                            <div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: -110px 0px; width: 445px; height: 445px; float: left; cursor: grab; background-repeat: no-repeat; position: absolute; background-image: url(&quot;img/products/product-grey-7.jpg&quot;); top: 0px; left: 0px; opacity: 0.0227265;"
                                                class="zoomWindow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 445px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg"
                                        data-zoom-image="{{asset('front/assets/img/payloads/playload-1.png')}}">
                                    <div class="zoomContainer"
                                        style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:445px;width:445px;">
                                        <div class="zoomWindowContainer" style="width: 400px;">
                                            <div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 445px; height: 445px; float: left; display: none; cursor: grab; background-repeat: no-repeat; position: absolute; background-image: url(&quot;img/products/product-grey-7-2.jpg&quot;);"
                                                class="zoomWindow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 445px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid" src="{{asset('front/assets/img/payloads/playload-1.png')}}"
                                        data-zoom-image="{{asset('front/assets/img/payloads/playload-1.png')}}">
                                    <div class="zoomContainer"
                                        style="-webkit-transform: translateZ(0);position:absolute;left:0px;top:0px;height:445px;width:445px;">
                                        <div class="zoomWindowContainer" style="width: 400px;">
                                            <div style="z-index: 999; overflow: hidden; margin-left: 0px; margin-top: 0px; background-position: 0px 0px; width: 445px; height: 445px; float: left; display: none; cursor: grab; background-repeat: no-repeat; position: absolute; background-image: url(&quot;img/products/product-grey-7-3.jpg&quot;);"
                                                class="zoomWindow">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation"
                            class="owl-prev disabled"></button><button type="button" role="presentation"
                            class="owl-next"></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
                <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs owl-loaded owl-drag">





                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 575px;">
                            <div class="owl-item active selected" style="width: 100px; margin-right: 15px;">
                                <div class="cur-pointer">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 100px; margin-right: 15px;">
                                <div class="cur-pointer">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 100px; margin-right: 15px;">
                                <div class="cur-pointer">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-7-3.jpg">
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 100px; margin-right: 15px;">
                                <div class="cur-pointer">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-7-4.jpg">
                                </div>
                            </div>
                            <div class="owl-item" style="width: 100px; margin-right: 15px;">
                                <div class="cur-pointer">
                                    <img alt="" class="img-fluid" src="img/products/product-grey-7-5.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>

        </div>

        <div class="col-md-7">

            <div class="summary entry-summary position-relative">

                <div class="position-absolute top-0 right-0">
                    <div class="products-navigation d-flex">
                        <a href="#"
                            class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary"
                            data-tooltip="" data-original-title="Red Ladies Handbag"><i
                                class="fas fa-chevron-left"></i></a>
                        <a href="#"
                            class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary"
                            data-tooltip="" data-original-title="Green Ladies Handbag"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>

                <h1 class="mb-0 font-weight-bold text-7">ZENMUSE L1</h1>

                <div class="pb-0 clearfix d-flex align-items-center">
                    <div title="Rated 3 out of 5" class="float-left">
                        <input type="text" class="d-none" value="3" title="" data-plugin-star-rating=""
                            data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                    </div>
                </div>

                <div class="divider divider-small">
                    <hr class="bg-color-grey-scale-4">
                </div>

                <p class="price mb-3">
                    <span class="sale text-color-dark">$15,00</span>
                    <span class="amount">$22,00</span>
                </p>

                <p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed
                    elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>

                <ul class="list list-unstyled text-2">
                    <li class="mb-0">AVAILABILITY: <strong class="text-color-dark">AVAILABLE</strong></li>
                    <li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>
                </ul>


                    <table class="table table-borderless" style="max-width: 300px;">
                        <tbody>
                            <tr>
                                <td class="align-middle text-2 px-0 py-2">SIZE:</td>
                                <td class="px-0 py-2">
                                    <div class="custom-select-1">
                                        <select name="size" class="form-control text-1 h-auto py-2">
                                            <option value="">PLEASE CHOOSE</option>
                                            <option value="blue">Small</option>
                                            <option value="red">Normal</option>
                                            <option value="green">Big</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-2 px-0 py-2">COLOR:</td>
                                <td class="px-0 py-2">
                                    <div class="custom-select-1">
                                        <select name="color" class="form-control text-1 h-auto py-2">
                                            <option value="">PLEASE CHOOSE</option>
                                            <option value="blue">Blue</option>
                                            <option value="red">Red</option>
                                            <option value="green">Green</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>

             
            </div>

        </div>
    </div>
@endsection
