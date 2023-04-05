@extends('back.customer.auth.layout.app')
@section('title')
    Forget Password
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
                        <h3 class="mb-3 display-3 d-flex justify-content-center">Forget Password </h3>
                        <p class="mb-0 text-center">Forgot your password? </p>
                        <p class="mb-4 text-center"> No problem. Just let us know your email address
                            and we will email you a password reset link that will allow you to choose a new one.</p>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('customer.password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" :value="__('Email')" class="form-label ml-5">Email</label>
                                <input type="text":value="old('email')"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    placeholder="Enter your email" autofocus required />

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
                    </div>
                </div>
                <!-- verify email -->
            </div>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
@endsection
