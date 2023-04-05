@extends('back.customer.auth.layout.app')
@section('title')
    Register
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
                        <h4 class="mb-2">Welcome!</h4>
                        <p class="mb-4">Please sign-in to your account...</p>

                        <div class="row">
                            <div class="col-12">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ session('status') }} </strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                            </div>
                        </div>


                        <form method="POST" action="{{ route('customer.register.post') }}">
                            @csrf

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="first_name" class="form-label">First Name</label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="last_name"class="form-label">Last Name</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                        class="form-control" name="first_name":value="old('first_name')" id="first_name"
                                        required autofocus autocomplete="first_name">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        class="form-control" name="last_name":value="old('last_name')" id="last_name"
                                        required autofocus autocomplete="last_name">

                                </div>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="mb-2">
                        <div class="mb-2">
                            <label for="user_name" class="labelarea form-label">User Name</label>
                            <input type="text" class=" form-control @error('user_name') is-invalid @enderror textarea"
                                name="user_name":value="old('user_name')" placeholder="Enter your User Name" required
                                autocomplete="username" />

                            @error('user_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <div class="mb-2">
                                <label for="email" class="form-label labelarea">Email</label>
                                <input type="text" class="textarea form-control @error('email') is-invalid @enderror"
                                    name="email":value="old('email')" placeholder="Enter your email" autofocus required
                                    autocomplete="email" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <div class="mb-2">
                                    <label for="contact_no" class="labelarea form-label">Contact Number</label>
                                    <input type="number"
                                        class="textarea form-control @error('contact_no') is-invalid @enderror"
                                        name="contact_no" placeholder="Enter your Contact number" autofocus />

                                    @error('contact_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <label for="city" class="form-label labeltext">City</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="country"class="form-label ">Country</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text"
                                            class="inputtext form-control @error('city') is-invalid @enderror"
                                            name="city":value="old('city')" id="city" required autofocus
                                            autocomplete="name" placeholder="City">
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="name" class="form-control" style="width: 11em"
                                            name="country":value="old('country')" id="country" required autofocus
                                            autocomplete="name" placeholder="Country">

                                    </div>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="address" class="labelarea form-label">Address</label>
                                    <input type="address"
                                        class="textarea form-control @error('address') is-invalid @enderror"
                                        name="address" placeholder="Enter your Address" autofocus />

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <label for="city" class="form-label labeltext">Password</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="confirm-password"class="form-label ">Confirm Password</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"
                                            class="inputtext form-control @error('password') is-invalid @enderror"
                                            name="password" placeholder="Enter Password" aria-describedby="password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" style="width: 11em"
                                            class=" form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" placeholder="Confirm Password "
                                            aria-describedby="password_confirmation" />
                                    </div>
                                    @error('confirm-password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <button class="btn btn-primary d-grid textarea" type="submit">Register</button>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label inputtext">Not having an Account?</label>
                                    <div class="col-sm-6 mt-1">
                                        <a href="{{ route('customer.login.index') }}">
                                            Log In!
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Register -->

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $error }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <style scoped>
                    .textarea {
                        width: 25em;
                        margin: auto;
                        display: block;
                    }

                    .labelarea {
                        margin-left: 1em;
                    }

                    .labeltext {
                        margin-left: 1em;
                    }

                    .inputtext {
                        width: 11em;
                        margin-left: 1em;
                    }
                </style>
            @endsection
