@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Industry</h5>
                    <form action="{{ route('industry.destroy', $industry) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete Industry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('industry.update', $industry) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="industry_name">Industry Name</label>
                                    <input type="text" class="form-control @error('industry_name') is-invalid @enderror"
                                        name="industry_name" value="{{$industry->industry_name}}">
                                    @error('industry_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                @if ($industry->industry_image)
                                    <div class="col-12">
                                        <img src="{{ $industry->industry_image }}" width="81px" height="120px"
                                            alt="">
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="">Industry Image</label>
                                    <input type="file" class="form-control @error('industry_image') is-invalid @enderror" name="industry_image">
                                    @error('industry_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{$industry->description}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="">Body</label>
                                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body">{{$industry->body}}</textarea>

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
                                    <label class="form-label" for="stataus">Status: </label>
                                    <div class="input-group">
                                        <select class="form-control" name="status">
                                            <option value="Publish" {{ $industry->status == 'Publish' ? 'selected' : '' }}>
                                                Publish</option>
                                            <option value="Draft" {{ $industry->status == 'Draft' ? 'selected' : '' }}>Draft
                                            </option>
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
                                        @foreach ($industry->meta_keyword as $item)
                                            <option value="{{ $item }}" selected>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('meta_keyword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_description">Meta Description:</label>
                                    <textarea name="meta_description" class="form-control">{{$industry->meta_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Industry</button>
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
