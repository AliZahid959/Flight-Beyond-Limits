@extends('back.layout.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between shadow">
                    <h5 class="mb-0">{{ $courseEnrollment->customer->first_name }}
                        {{ $courseEnrollment->customer->last_name }} </h5>
                    <div class="card-header-elements ms-auto">
                        {{-- <form action="{{ route('course-enrollment.destroy', $courseEnrollment) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Customer Name</label>
                                <input type="text"
                                    class="form-control"value="{{ $courseEnrollment->customer->first_name }} {{ $courseEnrollment->customer->last_name }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control"value="{{ $courseEnrollment->customer->email }}"
                                    readonly>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Course Name</label>
                                <input type="text"
                                    class="form-control"value="{{ $courseEnrollment->course->course_name }} " readonly>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">Price</label>
                                <input type="text" class="form-control"value="{{ $courseEnrollment->course->price }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="from-group mb-3">
                                <label for="">City</label>
                                <input type="text" class="form-control"value="{{ $courseEnrollment->customer->city }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="from-group mb-3">
                                <label for="">Body</label>
                                <textarea class="form-control" name="body" readonly>{{ $courseEnrollment->message }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('course-enrollment.update', $courseEnrollment) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <small class="text-muted d-block mb-2">Choose course Status:</small>
                                        <div class="row gy-3 text-nowrap">
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked">
                                                    <label class="form-check-label custom-option-content py-2">
                                                        <input name="status" class="form-check-input" type="radio"
                                                            value="Pending"
                                                            {{ $courseEnrollment->status == 'Pending' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Pending</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked ">
                                                    <label class="form-check-label custom-option-content py-2 ">
                                                        <input name="status" class="form-check-input " type="radio"
                                                            value="Accept"
                                                            {{ $courseEnrollment->status == 'Accept' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Accept</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check custom-option custom-option-basic checked">
                                                    <label class="form-check-label custom-option-content py-2">
                                                        <input name="status" class="form-check-input" type="radio"
                                                            value="Reject"
                                                            {{ $courseEnrollment->status == 'Reject' ? 'checked' : '' }}>
                                                        <span class="custom-option-header pb-0">
                                                            <span>Reject</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
