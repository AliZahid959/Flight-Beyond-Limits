@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Industries</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="page_table" class="table table-striped w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Industry Name</th>
                                <th>Status</th>
                                <th>Industry Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $sr_no = 1;
                            @endphp

                            @foreach ($industries as $item)
                                <tr>
                                    <td>{{ $sr_no++ }}</td>
                                    <td>{{ $item->industry_name }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td><img src="{{$item->industry_image}} " height="90px" alt="no Image Exist"></td>
                                    <td>
                                        <a class="btn btn-sm w-50" style="background: #fff; border:1px solid #696cff;" href="{{ route('industry.edit', $item) }}"><i
                                                class="bx bx-edit-alt me-1"></i></a>
                                        <form action="{{ route('industry.destroy', $item) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="w-50 btn btn-primary btn-sm mt-2"><i
                                                    class="bx bx-trash me-1"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('#page_table').DataTable({
                "dom": '<lfB<t>ip>',
                buttons: ['excel', 'print'],
                paging: true,
                searching: true,
                autoWidth: true,
                lengthChange: true,
                columnDefs: [{
                    orderable: true,
                    targets: '_all'
                }],
                pageLength: 10

            });

        });
    </script>
@endsection
