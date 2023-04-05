@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Add New Course</h5>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="course_name">Course Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text"  placeholder="Enter Course Name" class="form-control @error('course_name') is-invalid @enderror"
                                            name="course_name" value="{{ old('course_name') }}">
                                        @error('course_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label>course Image</label>
                                <input type="file" class="form-control" name="course_image">

                                @error('course_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="col-6">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="start_date">Start Date:</label>
                                    <div class="input-group input-group-merge">
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                            name="start_date" value="">
                                        @error('start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="end_date">End Date:</label>
                                    <div class="input-group input-group-merge">
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                            name="end_date" value="">
                                        @error('end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3 mt-3">
                                    <label class="form-label" for="price">Price:</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-purchase-tag' ></i></span>
                                        <input type="text"  placeholder="Enter Price" class="form-control @error('price') is-invalid @enderror"
                                            name="price" value="{{ old('price') }}">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="" class="mt-3">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="course_detail"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="">Body</label>
                                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="stataus">Select Course Category: </label>
                                    <div class="input-group">
                                        <select class="form-control" name="course_category_id">
                                            @foreach ($course_categories as $item)
                                                <option value="{{$item->id}}">{{$item->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Enter Course Strength: </label>
                                    <div class="input-group">
                                        <input class="form-control" type="number" name="strength" placeholder="Enter Course Strength">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status: </label>
                                    <div class="input-group">
                                        <input class="form-check-input" type="checkbox" name="allow_enroll" value="1" id="allow_enroll">
                                        <label class="form-check-label ms-2" for="allow_enroll"> Open Enrollment </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Course Type : </label>
                                    <div class="input-group">
                                        <select class="form-control" name="course_type">
                                            <option value="Online">Online</option>
                                            <option value="Offline">Offline</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status: </label>
                                    <div class="input-group">
                                        <select class="form-control" name="status">
                                            <option value="Publish">Publish</option>
                                            <option value="Draft">Draft</option>
                                        </select>
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
                                <div class="mb-3">
                                    <label class="form-label" for="meta_keyword">Meta Keyword: </label>
                                    <select class="form-control" name="meta_keyword[]" id="meta_keyword" multiple>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_description">Meta Description:</label>
                                    <textarea name="meta_description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create Course</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">

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
