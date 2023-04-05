@extends('back.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Pages</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="page_name">Page Title</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control @error('page_name') is-invalid @enderror"
                                        name="page_name" value="{{ $page->page_name }}">
                                    @error('page_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="slug">Slug: </label>
                                <div class="input-group">
                                    <span class="input-group-text">{{ Request::getHost() }}</span>
                                    <input type="text" class="form-control" name="slug" value="{{ $page->slug }}"
                                        placeholder="Optional">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        @if ($page->default)
                            <h5>Page Section</h5>
                            <div class="col-12 mt-3">
                                <div class="accordion mt-3" id="accordionExample">

                                    @forelse ($page->sections as $item)
                                        <div class="card accordion-item {{ $loop->first ? 'active' : '' }}">
                                            <h2 class="accordion-header">
                                                <button type="button" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#{{ $item->slug }}"
                                                    aria-expanded="false" aria-controls="accordionTwo">
                                                    {{ $item->section_name }}
                                                </button>
                                            </h2>
                                            <div id="{{ $item->slug }}"
                                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Section Heading</label>
                                                                <input type="text" name="section_heading"
                                                                    class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="">Section Description</label>
                                                                <textarea class="form-control" name="section_description" rows="4" readonly>{{ $item->section_description }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <button type="button" data-id="{{ $item->id }}"
                                                                class="btn btn-primary">Edit</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    <div class="row">
                                        <div class="col-12">
                                            No Section Found
                                        </div>
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                        @else
                            <div class="col-12 mt-3">
                                <label for="">Body</label>
                                <textarea type="text" class="form-control @error('body') is-invalid @enderror"name="body" id="body">{{$page->body}}</textarea>
                            </div>
                        @endif
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
                                        <option value="1" {{ $page->active ? 'selected' : '' }}>Publish</option>
                                        <option value="0" {{ $page->active ? '' : 'selected' }}>Draft</option>
                                    </select>
                                    @error('page_name')
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
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="meta_keyword">Meta Keyword: </label>
                                <select name="meta_keyword[]" class="select2 form-control @error('meta_keyword') is-invalid @enderror" multiple>
                                    @foreach ($page->meta_keyword as $item)
                                        <option value="{{$item}}" selected>{{$item}}</option>
                                    @endforeach
                                </select>
                                @error('meta_keyword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="meta_description">Meta Description:</label>
                                <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror">{{$page->meta_description}}</textarea>
                                @error('meta_description')
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
