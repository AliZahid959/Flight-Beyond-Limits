@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Setting</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>General Setting</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.general') }}" method="post"  enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Site Name</label>
                                    <input type="text" name="site_name"
                                        class="form-control @error('site_name') is-invalid @enderror" value="{{$setting->site_name}}">
                                    @error('site_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Site Description</label>
                                    <textarea name="site_description" class="form-control @error('site_description') is-invalid @enderror" rows="4">{{$setting->site_description}}</textarea>
                                    @error('site_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Site Favicon</label>
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <input type="file" class="form-control" name="site_favicon">
                                    </div>
                                    @error('site_favicon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Site Logo</label>
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <input type="file" class="form-control" name="site_logo">
                                    </div>
                                    @error('site_logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Office Address:</label>
                                    <input type="text" name="footer_text"
                                        class="form-control @error('footer_text') is-invalid @enderror" value="{{$setting->footer_text}}">
                                    @error('footer_text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Contact Setting</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.contact') }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Contact Heading:</label>
                                    <input type="text" name="contact_heading"
                                        class="form-control @error('contact_heading') is-invalid @enderror"
                                        value="{{ $setting->contact_heading }}">
                                    @error('contact_heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Contact Description:</label>
                                    <textarea name="contact_description" class="form-control @error('contact_description') is-invalid @enderror"
                                        rows="4">{{ $setting->contact_description }}</textarea>
                                    @error('contact_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Contact No:</label>
                                    <input type="text" name="contact_no"
                                        class="form-control @error('contact_no') is-invalid @enderror"
                                        value="{{ $setting->contact_no }}">
                                    @error('contact_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Contact Email:</label>
                                    <input type="email" name="contact_email"
                                        class="form-control @error('contact_email') is-invalid @enderror"
                                        value="{{ $setting->contact_email }}">
                                    @error('contact_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">Contact Address:</label>
                                    <textarea name="contact_address" class="form-control @error('contact_address') is-invalid @enderror" rows="4">{{ $setting->contact_address }}</textarea>
                                    @error('contact_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>SMTP Setting</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.smtp') }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">MAIL MAILER</label>
                                    <input type="text" name="MAIL_MAILER"
                                        class="form-control  @error('MAIL_MAILER') is-invalid @enderror"
                                        value="{{ env('MAIL_MAILER') }}" required>
                                    @error('MAIL_MAILER')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">MAIL MAILER</label>
                                    <input type="text" name="MAIL_HOST"
                                        class="form-control  @error('MAIL_HOST') is-invalid @enderror"
                                        value="{{ env('MAIL_HOST') }}" required>
                                    @error('MAIL_HOST')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">MAIL MAILER</label>
                                    <input type="text" name="MAIL_PORT"
                                        class="form-control  @error('MAIL_PORT') is-invalid @enderror"
                                        value="{{ env('MAIL_PORT') }}" required>
                                    @error('MAIL_PORT')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">MAIL MAILER</label>
                                    <input type="text" name="MAIL_USERNAME"
                                        class="form-control  @error('MAIL_USERNAME') is-invalid @enderror"
                                        value="{{ env('MAIL_USERNAME') }}" required>
                                    @error('MAIL_USERNAME')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">MAIL MAILER</label>
                                    <input type="text" name="MAIL_PASSWORD"
                                        class="form-control  @error('MAIL_PASSWORD') is-invalid @enderror"
                                        value="{{ env('MAIL_PASSWORD') }}" required>
                                    @error('MAIL_PASSWORD')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">MAIL MAILER</label>
                                    <input type="text" name="MAIL_ENCRYPTION"
                                        class="form-control  @error('MAIL_ENCRYPTION') is-invalid @enderror"
                                        value="{{ env('MAIL_ENCRYPTION') }}" required>
                                    @error('MAIL_ENCRYPTION')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Pusher Setting</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.pusher') }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">PUSHER_APP_ID:</label>
                                    <input type="text" name="MAIL_MAILER"
                                        class="form-control  @error('MAIL_MAILER') is-invalid @enderror"
                                        value="{{ env('MAIL_MAILER') }}" required>
                                    @error('MAIL_MAILER')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">PUSHER APP KEY</label>
                                    <input type="text" name="MAIL_HOST"
                                        class="form-control  @error('MAIL_HOST') is-invalid @enderror"
                                        value="{{ env('MAIL_HOST') }}" required>
                                    @error('MAIL_HOST')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">PUSHER APP SECRET:</label>
                                    <input type="text" name="MAIL_PORT"
                                        class="form-control  @error('MAIL_PORT') is-invalid @enderror"
                                        value="{{ env('MAIL_PORT') }}" required>
                                    @error('MAIL_PORT')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">PUSHER HOST</label>
                                    <input type="text" name="MAIL_USERNAME"
                                        class="form-control  @error('MAIL_USERNAME') is-invalid @enderror"
                                        value="{{ env('MAIL_USERNAME') }}" required>
                                    @error('MAIL_USERNAME')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">PUSHER PORT</label>
                                    <input type="text" name="MAIL_PASSWORD"
                                        class="form-control  @error('MAIL_PASSWORD') is-invalid @enderror"
                                        value="{{ env('MAIL_PASSWORD') }}" required>
                                    @error('MAIL_PASSWORD')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">PUSHER SCHEME</label>
                                    <input type="text" name="MAIL_ENCRYPTION"
                                        class="form-control  @error('MAIL_ENCRYPTION') is-invalid @enderror"
                                        value="{{ env('MAIL_ENCRYPTION') }}" required>
                                    @error('MAIL_ENCRYPTION')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="from-group mb-3">
                                    <label for="">PUSHER APP CLUSTER</label>
                                    <input type="text" name="MAIL_ENCRYPTION"
                                        class="form-control  @error('MAIL_ENCRYPTION') is-invalid @enderror"
                                        value="{{ env('MAIL_ENCRYPTION') }}" required>
                                    @error('MAIL_ENCRYPTION')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
