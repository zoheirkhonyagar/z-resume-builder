<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Helper;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('first_name', 'asc')
            ->paginate(12);
        $courses = Course::all();
        return view('main.index' , compact('students','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.student.create' , compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->input('first_name');
        //return $request->all();
        $student = Student::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'national_number' => $request->input('national_number'),
            'father_name' => $request->input('father_name'),
            'email' => $request->input('email'),
            'nationality' => $request->input('nationality'),
            'birthday_date' => $request->input('birthday_date'),
            'birth_place' => $request->input('birth_place'),
            'address' => $request->input('address'),
            'proof' => $request->input('proof'),
            'resume' => $request->input('resume')
        ]);

        $student->courses()->sync( array(
            $request->input('course_id') => array(
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'last_exam_score' => $request->input('last_exam_score'),
                'class_project_score' => $request->input('class_project_score'),
                'last_project_score' => $request->input('last_project_score'),
                'total_score' => $request->input('total_score')
            )
        ));

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('main.student.show' , compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }

    public function all()
    {
        $students = Student::paginate(10);
        return view('admin.student.all' , compact('students'));
    }

    public function search(Request $request)
    {

        $course = Course::find($request->input('course_id'));

        if ($request->input('first_name') == '' && $request->input('first_name') == '' ){
            $students = $course->students;
        }else{
            $students = $course->students->where( 'first_name', $request->input('first_name') )->Where('last_name', $request->input('last_name'));
        }
        
        $courses = Course::all();
        return view('main.student.search' , compact('students','courses','error'));
    }
}
