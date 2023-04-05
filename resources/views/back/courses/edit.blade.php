@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Course</h5>
                    <form action="{{ route('course.destroy', $course) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mt-3">Delete Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('course.update', $course) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
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
                                        <input type="text" class="form-control @error('course_name') is-invalid @enderror"
                                            name="course_name" value="{{$course->course_name}}">
                                        @error('course_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                @if ($course->thumbnail_course_image)
                                    <div class="col-12">
                                        <img src="{{ $course->thumbnail_course_image }}" width="81px" height="120px" alt="">
                                    </div>
                                @endif
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
                                            name="start_date" value="{{$course->start_date}}">
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
                                            name="end_date" value="{{$course->end_date}}">
                                        @error('end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="price">Price:</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                                            name="price" value="{{$course->price}}">
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
                                <textarea class="form-control @error('description') is-invalid @enderror" name="course_detail">{{$course->course_detail}}</textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="">Body</label>
                                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{$course->body}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
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
                                    <label class="form-label" for="status">Course Strength: </label>
                                    <div class="input-group">
                                        <input class="form-control" value="{{$course->strength}}" type="number" name="strength" placeholder="Enter Course Strength">
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
                                        <input class="form-check-input" type="checkbox" name="allow_enroll" value="1" id="allow_enroll"  {{$course->allow_enroll ? 'checked' : ''}}>
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
                                            <option value="Online" {{ $course->course_type == 'Online' ? 'selected' : '' }}></option>
                                            <option value="Offline" {{ $course->course_type == 'Offline' ? 'selected' : '' }}></option>
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
                                            <option value="Publish" {{ $course->status == 'Publish' ? 'selected' : '' }}>
                                                Publish</option>
                                            <option value="Draft" {{ $course->status == 'Draft' ? 'selected' : '' }}>
                                                Draft</option>
                                        </select>
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
                                        @foreach ($course->meta_keyword as $item)
                                            <option value="{{ $item }}" selected>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_description">Meta Description:</label>
                                    <textarea name="meta_description" class="form-control">{{$course->meta_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Course</button>
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
