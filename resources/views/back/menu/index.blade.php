@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">My Menu</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="menu_table" class="table table-striped w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu Name</th>
                                <th>Slug</th>
                                <th>Default</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $sr_no = 1;
                            @endphp

                            @foreach ($menu as $item)
                                <tr>
                                    <td>{{ $sr_no++ }}</td>
                                    <td>{{ $item->menu_name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        @if ($item->default)
                                            <span class="badge bg-success">Yes</span>
                                        @else
                                            <span class="badge bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('menu.show', $item) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Show</a>
                                                <a class="dropdown-item" href="{{ route('menu.edit', $item) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <form action="{{ route('menu.destroy', $item) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="dropdown-item"><i
                                                            class="bx bx-trash me-1"></i> Delete</button>
                                                </form>

                                            </div>
                                        </div>
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

            $('#menu_table').DataTable({
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
