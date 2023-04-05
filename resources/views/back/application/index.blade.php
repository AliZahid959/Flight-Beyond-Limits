@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">All Course Enrollments application</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="blog_table" class="table table-striped w-100 table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Course Name</th>
                                    <th>Price</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>

                                @php
                                    $sr_no = 1;
                                @endphp

                                @foreach ($enrollments as $item)
                                    <tr>
                                        <td>{{ $sr_no++ }}</td>
                                        <td>{{ $item->customer->first_name }} {{ $item->customer->last_name }}</td>
                                        <td>{{ $item->customer->email }}</td>
                                        <td>{{ $item->course->course_name }}</td>
                                        <td>{{ $item->course->price }}</td>
                                        <td>{{ $item->customer->city }}</td>
                                        <td>
                                            <a href="{{ route('course-enrollment.show', $item) }}" class="btn btn-sm w-50"
                                                style="background: #fff; border:1px solid #696cff;">
                                                <i class="bx bx-show-alt"></i>
                                            </a>
                                            <form
                                                action="{{ route('course-enrollment.destroy', ['course_enrollment' => $item]) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="mt-2 w-50 btn btn-primary btn-sm mt-2"><i
                                                        class="bx bx-trash me-1"></i>
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
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('#blog_table').DataTable({
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
                pageLength: 8

            });

        });
    </script>
@endsection
