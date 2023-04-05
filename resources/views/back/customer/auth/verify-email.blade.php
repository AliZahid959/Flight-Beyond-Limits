@extends('back.customer.auth.layout.app')
@section('title')
    Verify Email
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder">{{ env('APP_NAME') }}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h3 class="mb-3 display-3 d-flex justify-content-center">Verify Email </h3>
                        <p class="mb-4 text-center">Thanks for signing up! Before getting started, could you verify your
                            email address by clicking on the link we just emailed to you...!</p>
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <form action="{{ route('verification.send') }}" method="POST" class="mb-3">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label ml-5">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Enter your email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Verify</button>
                            </div>
                        </form>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Do not want to Verify?</label>
                            <div class="col-sm-6 content-align-center mt-1">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <span class="align-middle">Log Out</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- verify email -->
            </div>
        </div>
    </div>
@endsection
