<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
                            <p class="mb-1">{{ $courseEnrollment->customer->first_name }}
                                {{ $courseEnrollment->customer->last_name }}</p>
                        </div>
                        <div>
                            <span
                                class="fw-semibold me-1">{{ $courseEnrollment->customer ? $courseEnrollment->customer->city : 'City Does nt Exist' }}</span>
                            <span
                                class="me-1">{{ $courseEnrollment->customer ? $courseEnrollment->customer->country : 'Country Does nt Exist' }}</span>
                        </div>
                        <div>
                            <h4>Course Name : {{ $courseEnrollment->course->course_name }}</h4>
                            {{-- <h4>Price : {{$enrollment->course->price}}</h4> --}}
                            <div class="mb-2">
                                @if ($courseEnrollment->status == 'Pending')
                                    <span class="me-1 mb-2">Dear Respected
                                        {{ $courseEnrollment->customer->first_name }}
                                        {{ $courseEnrollment->customer->last_name }},</span><br>
                                    <span class="me-1 mb-2">We are writing to let you know that your request is
                                        currently pending. We are currently working to resolve the issue and will update
                                        you as soon as we have more information.</span><br>
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
                                @if ($courseEnrollment->status == 'Accept')
                                    <span class="me-1 mb-2">Dear Respected
                                        {{ $courseEnrollment->customer->first_name }}
                                        {{ $courseEnrollment->customer->last_name }},</span><br>
                                    <span class="me-1 mb-2">Congratulations! We are delighted to inform you that your
                                        enrollment has been accepted for {{ $courseEnrollment->course->course_name }}
                                        Program. We are thrilled to have you join us and look forward to helping you
                                        achieve your goals.</span><br>
                                    <span class="me-1 mb-2">We will send you Time and Designation for further assistance
                                        and attending an orientation session</span><br>
                                    <span class="me-1 mb-2">If you have any questions or concerns, please do not
                                        hesitate to contact us on our Website. We are here to support you every step of
                                        the way and wish you all the best as you embark on this exciting new
                                        journey.</span><br>
                                    <span class="me-1 mb-2">Again, congratulations on your acceptance, and welcome to
                                        our community!</span><br>
                                    <span class="me-1 mb-2">Best regards</span><br>
                                    <span class="me-1 mb-2">IBN-E-FIRNAS</span><br>
                                @endif
                                @if ($courseEnrollment->status == 'Reject')
                                    <span class="me-1 mb-2">Dear Respected
                                        {{ $courseEnrollment->customer->first_name }}
                                        {{ $courseEnrollment->customer->last_name }},</span><br>
                                    <span class="me-1 mb-2">Thank you for your interest in
                                        {{ $courseEnrollment->course->course_name }} Program. We appreciate the time
                                        and effort you put into your application, but we regret to inform you that your
                                        enrollment has not been accepted at this time.</span><br>
                                    <span class="me-1 mb-2">After careful review, we have determined that we have
                                        limited space that leads to failure to meet admission requirements. While this
                                        news may be disappointing to you so, we encourage you to explore other options that may be
                                        more suitable for your needs.</span><br>
                                    <span class="me-1 mb-2">If you have any questions or concerns, please do not
                                        hesitate to contact us on our Website. We are here to support you every step of
                                        the way and wish you all the best as you embark on this exciting new
                                        journey.</span><br>Again, we appreciate your interest in our program
                                         and wish you all the best in your future endeavors.</span><br>
                                    <span class="me-1 mb-2">Best regards</span><br>
                                    <span class="me-1 mb-2">IBN-E-FIRNAS</span><br>
                                @endif
                            </div>
                            <div>
                                <span
                                    class="fw-semibold me-1">{{ $courseEnrollment->customer ? $courseEnrollment->customer->city : 'City Does nt Exist' }}</span>
                                <span
                                    class="me-1">{{ $courseEnrollment->customer ? $courseEnrollment->customer->country : 'Country Does nt Exist' }}</span>
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
