@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Update Permission</h5>
                    <h5 class="mb-0">All Pages</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="service_table" class="table table-striped text-theme w-100">
                            <a href="{{ route('service.create') }}" class="btn btn-primary w-25 float-right my-3">Add New
                                Services</a>

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    {{-- <th>Service Image</th> --}}
                                    <th>Service Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $sr_no = 1;
                                @endphp

                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->description }}</td>
                                        {{-- <td>{{$service->thumbnail_service_image}}</td> --}}
                                        <td>{{ $service->detail }}</td>
                                        <td><a href="{{ route('service.edit', $service) }}">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
