<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name'];

    public function students()
    {
        return $this->belongsToMany(Student::class , 'course_student')->withPivot('student_id' , 'course_id' , 'start_date' , 'end_date' , 'last_exam_score' , 'class_project_score' , 'last_project_score' , 'total_score');
    }
}
