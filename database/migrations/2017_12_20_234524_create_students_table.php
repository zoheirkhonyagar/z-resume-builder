<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('national_number')->nullable();
            $table->string('email')->nullable();
            $table->string('nationality');
            $table->string('birthday_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->text('address')->nullable();
            $table->text('image')->nullable();
            $table->text('educational_experience')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('proof')->nullable();
            $table->text('resume')->nullable();
            $table->timestamps();
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('course_student', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->primary(['student_id' , 'course_id']);
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('last_exam_score')->nullable();
            $table->string('class_project_score')->nullable();
            $table->string('last_project_score')->nullable();
            $table->string('total_score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('courses');
    }
}
