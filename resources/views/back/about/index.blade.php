@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">About Page Setting</h5>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Manage About Page Content</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Banner Image</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="banner_image">
                                </div>
                                @error('banner_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 my-3">
                                <label for="">Body</label>
                                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{$about->body}}</textarea>
                            </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Our Core Values Section Title</label>
                                <input type="text" name="core_value_heading" class="form-control @error('core_value_heading') is-invalid @enderror" value="{{$about->core_value_heading}}">
                                @error('core_value_heading')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Core Value Section Description</label>
                                <textarea name="core_value_description" class="form-control @error('core_value_description') is-invalid @enderror" rows="4">{{$about->core_value_description}}</textarea>
                                @error('core_value_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Honesty Section Image</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="honesty_section_image">
                                </div>
                                @error('honesty_section_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Honesty Section Description</label>
                                <textarea name="honesty_section_description" class="form-control @error('honesty_section_description') is-invalid @enderror" rows="4">{{$about->honesty_section_description}}</textarea>
                                @error('honesty_section_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Innovation Section Image</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="innovation_section_image">
                                </div>
                                @error('innovation_section_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Innovation Section Description</label>
                                <textarea name="innovation_section_description" class="form-control @error('innovation_section_description') is-invalid @enderror" rows="4">{{$about->innovation_section_description}}</textarea>
                                @error('innovation_section_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Commitment Section Image</label>
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <input type="file" class="form-control" name="commitment_section_image">
                                </div>
                                @error('commitment_section_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Commitment Section Description</label>
                                <textarea name="commitment_section_description" class="form-control @error('commitment_section_description') is-invalid @enderror" rows="4">{{$about->commitment_section_description}}</textarea>
                                @error('commitment_section_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Our Core Values Section: </label>
                                    <div class="input-group">
                                        <input class="form-check-input" type="checkbox" name="enable_core_value" value="1" id="enable_core_value" {{$about->enable_core_value ? 'checked' : ''}}>
                                        <label class="form-check-label ms-2" for="enable_core_value"> Enable Section </label>
                                    </div>
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
@section('script')
    <script src="{{ asset('back/assets/vendor/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/select2/dist/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Please select as option",

            });
            $('#meta_keyword').select2({
                tags: true,
                placeholder: "Please Enter Tags Here",

            });

            tinymce.init({
                selector: 'textarea#body',
                plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table template tableofcontents visualblocks wordcount',
                toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
            });
        });
    </script>
@endsection
