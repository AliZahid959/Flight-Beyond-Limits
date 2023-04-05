@extends('front.layout.app2')

@section('content')
    <section
        class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/assets/img/regitration_academy.jpg') }}'); background-position:center;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">Course Registration</h1>
                    {{-- <span class="sub-title">The perfect choice for your next project</span> --}}
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="">Home</a></li>
                        <li class="active"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-0">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                        <strong>{{ session('message') }} </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            </div>
        </div>
        <div class="row mb-2 my-0">
            <div class="col">
                <h2 class="font-weight-bold text-7 mt-4 mb-0">Enrollment Application</h2>
                <p class="mb-4">Enter Course information To submit application</p>
                <form class="contact-form-recaptcha-v3" action="{{ route('course-enroll.store', $course) }}" method="POST"
                    novalidate="novalidate">
                    @csrf
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-lg-6">
                            <label class="mb-1 text-2">course Name</label>
                            <input type="text" value="{{ $course->course_name }}"
                                data-msg-required="Please enter your name." maxlength="100"
                                class="form-control text-3 h-auto py-2 text-dark " required="" readonly>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="mb-1 text-2">Course Price</label>
                            <input type="text" value="(OMR){{ $course->price }}"
                                data-msg-required="Please enter your name." maxlength="100"
                                class="form-control text-3 h-auto py-2 text-dark " required="" readonly>
                        </div>




                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="mb-1 text-2">Message</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <button type="submit" value="Apply For Qoutation" class="btn btn-primary btn-modern">Submit
                                Application</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.getElementById("qty").addEventListener("keyup", function(e) {

            var qty = e.srcElement.value;

            var price = '{{ $course->price }}';

            var total = qty * price;

            document.getElementById("total").value = total;

        }, false);
    </script>
@endsection
