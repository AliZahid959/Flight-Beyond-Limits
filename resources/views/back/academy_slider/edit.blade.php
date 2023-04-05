@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Slide</h5>

                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('academy-slider.update', $academySlider) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Slide Title</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" value="{{$academySlider->title}}">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                @if ($academySlider->slider_image)
                                    <div class="col-12">
                                        <img src="{{ $academySlider->slider_image }}" width="81px" height="120px" alt="">
                                    </div>
                                @endif
                                <label class="mt-3">Slide Image</label>
                                <input type="file" class="form-control" name="slider_image">

                                @error('slider_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="price">Button Text:</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-purchase-tag' ></i></span>
                                        <input type="text" class="form-control @error('btn_text') is-invalid @enderror"
                                            name="btn_text" value="{{ $academySlider->btn_text }}">
                                        @error('btn_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="price">Button Link url:</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-purchase-tag' ></i></span>
                                        <input type="text" class="form-control @error('btn_link') is-invalid @enderror"
                                            name="btn_link" value="{{$academySlider->btn_link}}">
                                        @error('btn_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">Update Slide</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </form>
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
