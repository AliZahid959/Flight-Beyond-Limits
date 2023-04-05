@extends('back.customer.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Change Password</h5>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('customer.change-password.post') }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="current_password">Enter Your Current Password</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-key '></i></span>
                                        <input type="text" placeholder="current password"
                                            class="form-control @error('current_password') is-invalid @enderror"
                                            name="current_password">
                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="new_password">Enter Your New Password</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-key '></i></span>
                                        <input type="text" placeholder="new password"
                                            class="form-control @error('new_password') is-invalid @enderror"
                                            name="new_password">
                                        @error('new_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="confirm_password">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-key '></i></span>
                                        <input type="text" placeholder="confirm password"
                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                            name="confirm_password">
                                        @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status: </label>
                                    <div class="input-group">
                                        <input class="form-check-input" type="checkbox" name="blog_enable" value="1"
                                            id="blog_enable">
                                        <label class="form-check-label ms-2" for="blog_enable"> Enable Section </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
