<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return $student = Student::create([
//            'first_name' => 'سامان',
//            'last_name' => 'پذیرنده',
//            'father_name' => 'عباس',
//            'email' => 'saman@gmail.com',
//            'nationality' => 'ایرانی',
//            'birthday_date' => '12/04/1376',
//            'birth_place' => 'زاهدان',
//            'address' => 'آدرس',
//            'proof' => 'لیسانس کامپیوتر',
//            'resume' => 'مدرس دوره برنامه نویسی'
//        ]);

        return view('main.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
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
        //
    }
}
