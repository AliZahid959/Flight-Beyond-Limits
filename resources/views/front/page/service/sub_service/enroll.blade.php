@extends('front.layout.app2')

@section('content')
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{asset('front/assets/img/12.jpg')}}'); background-position:center;">
    <div class="container">
       <div class="row mt-5">
          <div class="col-md-12 align-self-center p-static order-2 text-center">
             <h1 class="text-9 font-weight-bold">Enroll Now</h1>
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
<div class="container py-4">

    <div class="row mb-2 my-5">
        <div class="col-12 text-center my-5">
            {{-- <h2 class="text-center">Enroll Now</h2> --}}
        </div>
        <div class="col">

            <h2 class="font-weight-bold text-7 mt-2 mb-0">Enroll Now</h2>
            <p class="mb-4">Enroll Now For The Selected Course</p>

            <form class="contact-form-recaptcha-v3" action="{{url('/drone_training')}}" method="POST" novalidate="novalidate">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="mb-1 text-2">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="mb-1 text-2">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="mb-1 text-2">Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label class="mb-1 text-2">Message</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
@endsection
