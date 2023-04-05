@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Team Members</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="team_table" class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Member Name</th>
                                    <th>Member Title</th>
                                    <th>Member Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $sr_no = 1;
                                @endphp
                                @foreach ($teams as $item)
                                    <tr>
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td><img src="{{ $item->image }}" height="200px" alt=""></td>
                                        <td>

                                            <a class="btn btn-sm w-50" style="background: #fff; border:1px solid #696cff;" href="{{ route('team.edit', $item) }}"><i
                                                    class="bx bx-edit-alt me-1"></i></a>
                                            <form action="{{ route('team.destroy', $item) }}" method="post">
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
    </div>
@endsection
@section('script')

<script>
    $(document).ready(function() {

        $('#team_table').DataTable({
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
