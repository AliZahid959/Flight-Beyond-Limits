<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Application;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\EnrollmentStatus;
use Illuminate\Validation\Rule;
use App\Models\CourseEnrollment;
use Google\Service\Calendar\Setting;
use Illuminate\Support\Facades\Mail;

class  CourseEnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer')->only(['create']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        $enrollments = CourseEnrollment::with('course')->get();
        return view('back.application.index', compact('enrollments', 'course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('front.page.academy.appliction.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        $data = $request->validate([
            'message' => ['required', 'string', 'min:3', 'max:255']
        ]);
        $data['course_id'] = $course->id;
        $data['slug'] = $course->course_name;
        $data['customer_id'] = auth('customer')->user()->id;
        $data['email'] = auth('customer')->user()->email;

        $enrollment = CourseEnrollment::create($data);

        // Mail::to($request->email)->send(new EnrollmentStatus($enrollment));

        return back()->with('message', 'your Application has been Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CourseEnrollment $courseEnrollment)
    {
        return view('back.application.show', compact('courseEnrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseEnrollment $courseEnrollment)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(['Pending', 'Accept', 'Reject'])],
        ]);
        $courseEnrollment->update($data);

        Mail::to(auth('customer')->user()->email)->send(new EnrollmentStatus($courseEnrollment));
        return back()->with('status', 'Application Status has been changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $enrollment = CourseEnrollment::findOrFail($id);
        $enrollment->delete();
        return redirect()->back()->with('status', 'Application has been removed');
    }
}
