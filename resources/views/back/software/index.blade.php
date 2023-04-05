@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Softwares</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="software_table" class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Software Name</th>
                                    <td>Software Image</td>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sr_no = 1;
                                @endphp

                                @foreach ($software as $item)
                                    <tr>
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $item->software_name }}</td>
                                        <td><img src="{{$item->thumbnail_software_image}}" height="120px" width="120px" alt=""></td>
                                        <td>
                                            <a class="btn btn-sm w-50" style="background: #fff; border:1px solid #696cff;" href="{{ route('software.edit', $item) }}"><i
                                                    class="bx bx-edit-alt me-1"></i></a>
                                            <form action="{{ route('software.destroy', $item) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="w-50 btn btn-primary btn-sm mt-2"><i class="bx bx-trash me-1"></i>
                                                </button>
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
            $('#software_table').DataTable({
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
