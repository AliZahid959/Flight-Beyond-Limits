@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Blog Category</h5>
                    <form action="{{ route('blog-category.destroy', $blogCategory) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mt-3">Delete Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('blog-category.update', $blogCategory) }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="category_name">Category Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text"
                                            class="form-control @error('category_name') is-invalid @enderror"
                                            name="category_name" value="{{$blogCategory->category_name}}">
                                        @error('category_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="status">Status</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <select class="form-control @error('status') is-invalid @enderror"  name="status">
                                        <option value="Publish" {{$blogCategory->status == "Publish" ? 'selected' : ''}}>Publish</option>
                                        <option value="Draft" {{$blogCategory->status == "Draft" ? 'selected' : ''}}>Draft</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
