@extends('main.master')
@section('title')
    رزومه ها
@endsection

@section('content')
    <div class="col-sm-12 col-md-12 main">
        <h1 class="page-header">رزومه ها</h1>
        <form class="form-inline" method="post" action="{{ route('student.search') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="choose-course">انتخاب درس : </label>
                <select id="choose-course" class="form-control" name="course_id">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="search"></label>
                <input id="search" class="form-control" type="text" name="first_name" placeholder="نام خود را وارد کنید">
            </div>
            <div class="form-group">
                <label for="search"></label>
                <input id="search" class="form-control" type="text" name="last_name" placeholder="نام خانوادگی خود را وارد کنید">
            </div>
            <button type="submit" class="btn btn-default btn-primary">جستجو</button>
        </form>
        <div class="row placeholders" style="margin-top:30px;">
            @foreach($students as $student)
                <div class="col-xs-6 col-sm-2 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>{{ $student->first_name . " " . $student->last_name }}</h4>
                    <a href="{{ route( 'student.show' , [ 'id' => $student->id ] ) }}">مشاهده رزومه</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection