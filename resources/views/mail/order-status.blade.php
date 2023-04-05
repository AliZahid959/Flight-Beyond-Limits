 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Order Status</title>

     <!-- Vendor CSS -->
     <link rel="stylesheet" href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/vendor/fontawesome-free/css/all.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/vendor/animate/animate.compat.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/vendor/magnific-popup/magnific-popup.min.css') }}">

     <!-- Theme CSS -->
     <link rel="stylesheet" href="{{ asset('front/assets/css/theme.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/css/theme-elements.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/css/theme-blog.css') }}">
     <link rel="stylesheet" href="{{ asset('front/assets/css/theme-shop.css') }}">



     <!-- Demo CSS -->
     <link rel="stylesheet" href="{{ asset('front/assets/css/demos/demo-business-consulting-2.css') }}">
     <!-- Skin CSS -->
     <link id="skinCSS" rel="stylesheet" href="{{ asset('front/assets/css/skins/skin-business-consulting-2.css') }}">

     <!-- Theme Custom CSS -->
     <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">

     <!-- Head Libs -->
     <script src="{{ asset('front/assets/vendor/modernizr/modernizr.min.js') }}"></script>

 </head>

 <body>
     <!-- Invoice -->
     <div class="row">
         <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
             <div class="card invoice-preview-card">
                 <div class="card-body">
                     <div
                         class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                         <div class="mb-xl-0 mb-4">
                             <p class="mb-1">{{ $order->first_name }} {{ $order->last_name }}</p>
                         </div>
                         <div>
                             <span class="me-1">
                                 {{ $order->customer ? $order->customer->address : 'Address not Exist' }}</span><br>
                             <span
                                 class="fw-semibold">{{ $order->customer ? $order->customer->city : 'City not Exist' }}</span><br>
                             <span
                                 class="me-1">{{ $order->customer ? $order->customer->country : 'Country not Exist' }}</span>
                         </div>
                         <div>
                             @if ($order->product_id)
                                 <h4>Product Name : {{ $order->product->product_name }}</h4>
                                 {{-- <h4>Price : ${{$order->product->price}}</h4> --}}
                                 <h4>Quantity : {{ $order->qty }}</h4>
                                 {{-- <h4>Total : ${{$order->total}}</h4> --}}
                             @endif

                             @if ($order->software_id)
                                 <h4>Software Name : {{ $order->software->software_name }}</h4>
                             @endif

                             <h4>Order NO : {{ $order->order_no }}</h4>

                             <div class="mb-2">
                                 @if ($order->status == 'Pending')
                                     <span class="me-1 mb-2">Dear
                                         {{ $order->first_name }}
                                         {{ $order->last_name }},</span><br>
                                     <span class="me-1 mb-2">We are writing to let you know that your order is
                                         currently pending. We are currently working to resolve the issue and will
                                         update you as soon as we have more information.</span><br>
                                     <span class="me-1 mb-2">We apologize for any inconvenience this may have caused and
                                         appreciate your patience as we work to address the situation. We expect to have
                                         a resolution within 24 Hours, and we will keep you informed of any progress in
                                         the meantime.</span><br>
                                     <span class="me-1 mb-2">If you have any questions or concerns, please do not
                                         hesitate to contact us on our Website. We appreciate your business and look
                                         forward to resolving this matter as soon as possible.</span><br>
                                     <span class="me-1 mb-2">Best regards</span><br>
                                     <span class="me-1 mb-2">IBN-E-FIRNAS</span><br>
                                 @endif
                                 @if ($order->status == 'Accept')
                                     <span class="me-1 mb-2">Dear
                                         {{ $order->first_name }}
                                         {{ $order->last_name }},</span><br>
                                     <span class="me-1 mb-2">We are pleased to inform you that your order no.
                                         {{ $order->order_no }} has been accepted and is being processed. We appreciate
                                         your business
                                         and look forward to fulfilling your order.</span><br>
                                     <span class="me-1 mb-2">Your order is expected to be shipped by 4 working days,
                                         and you should receive a tracking number shortly after it has
                                         been shipped. Please note that shipping times may vary depending on your
                                         location and the shipping method selected.</span><br>
                                     <span class="me-1 mb-2">If you have any questions or concerns, please do not
                                         hesitate to contact us on our Website. We appreciate your business and look
                                         forward to resolving this matter as soon as possible.</span><br>
                                     <span class="me-1 mb-2">Thank you for choosing IBN-E-FIRNAS for your
                                         {{ $order->product->product_name }} needs.</span><br>
                                     <span class="me-1 mb-2">Best regards</span><br>
                                     <span class="me-1 mb-2">IBN-E-FIRNAS</span><br>
                                 @endif
                                 @if ($order->status == 'Reject')
                                     <span class="me-1 mb-2">Dear
                                         {{ $order->first_name }}
                                         {{ $order->last_name }},</span><br>
                                     <span class="me-1 mb-2">Thank you for your recent order with IBN-E-FIRNAS.
                                         Unfortunately, we regret to inform you that we are unable to fulfill your order
                                         at this time. After careful review, we have determined that the reason for
                                         rejection is shipping
                                         restriction or you have not entered the right address.</span><br>
                                     <span class="me-1 mb-2">We apologize for any inconvenience this may have caused and
                                         understand that you may be disappointed. If you would like to discuss your
                                         order further or explore other options, please do not hesitate to contact us on
                                         our Website.
                                         We will do our best to provide you with any
                                         feedback or guidance that may be helpful.</span><br>
                                     <span class="me-1 mb-2">Again, we apologize for the inconvenience and thank you for
                                         considering IBN-E-FIRNAS for your {{ $order->product->product_name }}
                                         needs.</span><br>
                                     <span class="me-1 mb-2">Best regards</span><br>
                                     <span class="me-1 mb-2">IBN-E-FIRNAS</span><br>
                                 @endif
                                 @if ($order->status == 'Notinstock')
                                     <span class="me-1 mb-2">Dear Respected
                                         {{ $order->first_name }}
                                         {{ $order->last_name }},</span><br>
                                     <span class="me-1 mb-2">Thank you for your recent order with IBN-E-FIRNAS.
                                         Unfortunately, we regret to inform you that we are unable to fulfill your order
                                         at this time. After careful review, we have determined that the reason for
                                         rejection is that the product is being out of stock and we will inform you when
                                         the product is in stock.</span><br>
                                     <span class="me-1 mb-2">We apologize for any inconvenience this may have caused and
                                         understand that you may be disappointed. If you would like to discuss your
                                         order further or explore other options, please do not hesitate to contact us on
                                         our Website.
                                         We will do our best to provide you with any
                                         feedback or guidance that may be helpful.</span><br>
                                     <span class="me-1 mb-2">Again, we apologize for the inconvenience and thank you for
                                         considering IBN-E-FIRNAS for your {{ $order->product->product_name }}
                                         needs.</span><br>
                                     <span class="me-1 mb-2">Best regards</span><br>
                                     <span class="me-1 mb-2">IBN-E-FIRNAS</span><br>
                                 @endif
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- /Invoice -->



     <script src="{{ asset('front/assets/vendor/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/popper/umd/popper.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/lazysizes/lazysizes.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/isotope/jquery.isotope.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/vide/jquery.vide.min.js') }}"></script>
     <script src="{{ asset('front/assets/vendor/vivus/vivus.min.js') }}"></script>

     <script src="{{ asset('front/assets/js/theme.js') }}"></script>



     <script src="{{ asset('front/assets/js/views/view.contact.js') }}"></script>

     <script src="{{ asset('front/assets/js/demos/demo-business-consulting-2.js') }}"></script>
     <script src="{{ asset('front/assets/js/custom.js') }}"></script>

     <script src="{{ asset('front/assets/js/theme.init.js') }}"></script>

 </body>

 </html>
