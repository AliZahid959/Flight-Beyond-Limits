@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">{{$industry->industry_name}}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="">Industry Name</label>
                                <input type="text" class="form-control" value="{{$industry->industry_name}}" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="">Industry Description</label>
                                <textarea cols="6" rows="10" class="form-control" readonly>{{$industry->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                @foreach ($industry->meta_keyword as $item)
                                    <span class="badge bg-primary">{{$item}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h4>Industry Categories</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="accordion mt-3" id="accordionExample">

                                @forelse ($industry->categories as $item)
                                    <div class="card accordion-item {{ $loop->first ? 'active' : '' }}">
                                        <h2 class="accordion-header">
                                            <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#{{ $item->slug }}"
                                                aria-expanded="false" aria-controls="accordionTwo">
                                                {{ $item->category_name }}
                                            </button>
                                        </h2>
                                        <div id="{{ $item->slug }}"
                                            class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-12 mb-3">
                                                        <div class="form-group">
                                                            <label for="">Category Name:</label>
                                                            <input type="text" class="form-control" value="{{$item->category_name}}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="">Category Description:</label>
                                                        <textarea cols="6" rows="10" class="form-control" readonly>{{$item->description}}</textarea>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <a href="{{route('industry-category.edit', $item)}}" class="btn btn-primary">Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                <div class="row">
                                    <div class="col-12">
                                        No Result Found
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
