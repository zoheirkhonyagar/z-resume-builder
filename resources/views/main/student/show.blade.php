@extends('main.master')
@section('title')
    {{ $student->first_name . " " . $student->last_name }}
@endsection
@section('custom-styles')
    <style>
        .placeholders h4 {
            margin-top: 35px;
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <div class="row placeholders col-sm-8 col-md-offset-3" style="text-align: right;margin-top: 40px;">
        <div class="col-xs-12 col-sm-12 placeholder" style="text-align: center">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" class="img-responsive" alt="Generic placeholder thumbnail">
        </div>
        <h4>نام : {{ $student->first_name }}</h4>
        <h4>نام خانوادگی : {{ $student->last_name }}</h4>
        <h4>نام پدر : {{ $student->father_name }}</h4>
        <h4> کد ملی : {{ $student->national_number }}</h4>
        <h4>ایمیل : {{ $student->email }}</h4>
        <h4>ملیت : {{ $student->nationality }}</h4>
        <h4>تاریخ تولد : {{ $student->birthday_date }}</h4>
        <h4>محل تولد : {{ $student->birth_place }}</h4>
        <h4>آدرس : {{ $student->address }}</h4>
        <h4>مدرک تحصیلی : {{ $student->proof }}</h4>
        <h4>رزومه کاری : {{ $student->resume }}</h4>
        <hr style="border-top:1px solid #c0c0c0;">
        @foreach($student->courses as $course)
            <h4 style="margin:20px 0;background: #71d5cd; padding: 15px;">نام دوره : {{ $course->name }}</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>تاریخ شروع</th>
                        <th>تاریخ پایان</th>
                        <th>نمره امتحان پایانی</th>
                        <th>نمره پروژه کلاسی</th>
                        <th>نمره پروژه پایانی</th>
                        <th>نمره کل</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($courses as $course)--}}
                        <tr>
                            <td>{{ $course->pivot->start_date }}</td>
                            <td>{{ $course->pivot->end_date }}</td>
                            <td>{{ $course->pivot->last_exam_score }}</td>
                            <td>{{ $course->pivot->class_project_score }}</td>
                            <td>{{ $course->pivot->last_project_score }}</td>
                            <td>{{ $course->pivot->total_score }}</td>
                        </tr>
                    {{--@endforeach--}}
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection