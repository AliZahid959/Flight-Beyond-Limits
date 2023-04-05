@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Add New Product</h5>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 my-2">
                                <div class="">
                                    <label class="form-label" for="product_name">Product Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bxs-box"></i></span>
                                        <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                                            name="product_name" value="{{ old('product_name') }}">
                                        @error('product_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-2">
                                <label>Product Image</label>
                                <input type="file" class="form-control" name="product_image">
                                @error('product_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            {{-- <div class="col-12 my-2">
                                <label>Product Video</label>
                                <input type="file" class="form-control" name="product_video">

                                @error('product_video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div> --}}
                            <div class="col-12 my-2">
                                <div class="">
                                    <label class="form-label" for="price">Price:</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-purchase-tag' ></i></span>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                                            name="price" value="{{ old('price') }}">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-2">
                                <label for="">Short Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>

                            </div>
                            <div class="col-12 my-2">
                                <label for="">Detail Description</label>
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
                            <div class="col-12 my-2">
                                <div class="">
                                    <label class="form-label" for="stataus">Select Product Category: </label>
                                    <div class="input-group">
                                        <select class="form-control" name="product_category_id">
                                            @foreach ($product_categories as $item)
                                                <option value="{{$item->id}}">{{$item->category_name}}</option>
                                            @endforeach
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
                            <div class="col-12 my-2">
                                <div class="">
                                    <label class="form-label" for="stataus">Status: </label>
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
                            <div class="col-12 my-2">
                                <div class="">
                                    <label class="form-label" for="meta_keyword">Meta Keyword: </label>
                                    <select class="form-control" name="meta_keyword[]" id="meta_keyword" multiple>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 my-2">
                                <div class="">
                                    <label class="form-label" for="meta_description">Meta Description:</label>
                                    <textarea name="meta_description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                <button type="submit" class="btn btn-primary">Create Product</button>
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
