<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'national_number',
        'father_name',
        'email',
        'nationality',
        'birthday_date',
        'birth_place',
        'address',
        'proof',
        'resume'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class , 'course_student')->withPivot('student_id' , 'course_id' , 'start_date' , 'end_date' , 'last_exam_score' , 'class_project_score' , 'last_project_score' , 'total_score');
    }
}
