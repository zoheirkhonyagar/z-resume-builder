@extends('admin.master')
@section('title')
افزودن رزومه
@endsection

@section('content')

    <div class="row placeholders col-md-4 col-md-offset-3" style="text-align: right">
        <h1 class="page-header">افزودن رزومه :</h1>
        <form class="form-horizontal" method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-3 control-label" style="text-align: right">نام :</label>

                <div class="col-md-7">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-3 control-label" style="text-align: right">نام خانوادگی :</label>

                <div class="col-md-7">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('national_number') ? ' has-error' : '' }}">
                <label for="national_number" class="col-md-3 control-label" style="text-align: right">کد ملی :</label>

                <div class="col-md-7">
                    <input id="national_number" type="text" class="form-control" name="national_number" value="{{ old('national_number') }}" required autofocus>

                    @if ($errors->has('national_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('national_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-3 control-label" style="text-align: right">ایمیل :</label>

                <div class="col-md-7">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
                <label for="father_name" class="col-md-3 control-label" style="text-align: right">نام پدر :</label>

                <div class="col-md-7">
                    <input id="father_name" type="text" class="form-control" name="father_name" value="{{ old('father_name') }}" autofocus>

                    @if ($errors->has('father_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('father_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                <label for="nationality" class="col-md-3 control-label" style="text-align: right">ملیت :</label>

                <div class="col-md-7">
                    <input id="nationality" type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" autofocus>

                    @if ($errors->has('nationality'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nationality') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('birthday_date') ? ' has-error' : '' }}">
                <label for="birthday_date" class="col-md-3 control-label" style="text-align: right">تاریخ تولد :</label>

                <div class="col-md-7">
                    <input id="birthday_date" type="text" class="form-control" name="birthday_date" value="{{ old('birthday_date') }}" autofocus>

                    @if ($errors->has('birthday_date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('birthday_date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('birth_place') ? ' has-error' : '' }}">
                <label for="birth_place" class="col-md-3 control-label" style="text-align: right">محل تولد :</label>

                <div class="col-md-7">
                    <input id="birth_place" type="text" class="form-control" name="birth_place" value="{{ old('birth_place') }}" autofocus>

                    @if ($errors->has('birth_place'))
                        <span class="help-block">
                            <strong>{{ $errors->first('birth_place') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('proof') ? ' has-error' : '' }}">
                <label for="proof" class="col-md-3 control-label" style="text-align: right">مدرک تحصیلی :</label>

                <div class="col-md-7">
                    <input id="proof" type="text" class="form-control" name="proof" value="{{ old('proof') }}" autofocus>

                    @if ($errors->has('proof'))
                        <span class="help-block">
                            <strong>{{ $errors->first('proof') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('educational_experience') ? ' has-error' : '' }}">
                <label for="educational_experience" class="col-md-3 control-label" style="text-align: right">سوابق آمورشی :</label>

                <div class="col-md-7">
                    <input id="educational_experience" type="text" class="form-control" name="educational_experience" value="{{ old('educational_experience') }}" autofocus>

                    @if ($errors->has('educational_experience'))
                        <span class="help-block">
                            <strong>{{ $errors->first('educational_experience') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('resume') ? ' has-error' : '' }}">
                <label for="resume" class="col-md-3 control-label" style="text-align: right">سوابق کاری :</label>

                <div class="col-md-7">
                    <textarea id="resume" class="form-control" name="resume">{{ old('resume') }}</textarea>
                    @if ($errors->has('resume'))
                        <span class="help-block">
                            <strong>{{ $errors->first('resume') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address" class="col-md-3 control-label" style="text-align: right">آدرس :</label>

                <div class="col-md-7">
                    <textarea id="address" class="form-control" name="address">{{ old('address') }}</textarea>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="course_id" class="col-md-3 control-label" style="text-align: right">انتخاب درس :</label>
                <div class="col-md-7">
                    <select name="course_id" class="form-control" id="course_id">
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                <label for="start_date" class="col-md-3 control-label" style="text-align: right">تاریخ شروع دوره :</label>

                <div class="col-md-7">
                    <input id="start_date" type="text" class="form-control" name="start_date" value="{{ old('start_date') }}" required autofocus>

                    @if ($errors->has('start_date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('start_date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                <label for="end_date" class="col-md-3 control-label" style="text-align: right">تاریخ پایان دوره :</label>

                <div class="col-md-7">
                    <input id="end_date" type="text" class="form-control" name="end_date" value="{{ old('end_date') }}" required autofocus>

                    @if ($errors->has('end_date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('end_date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_exam_score') ? ' has-error' : '' }}">
                <label for="last_exam_score" class="col-md-3 control-label" style="text-align: right">نمره امتحان پایانی :</label>

                <div class="col-md-7">
                    <input id="last_exam_score" type="text" class="form-control" name="last_exam_score" value="{{ old('last_exam_score') }}" required autofocus>

                    @if ($errors->has('last_exam_score'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_exam_score') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('class_project_score') ? ' has-error' : '' }}">
                <label for="class_project_score" class="col-md-3 control-label" style="text-align: right">نمره پروژه کلاسی :</label>

                <div class="col-md-7">
                    <input id="class_project_score" type="text" class="form-control" name="class_project_score" value="{{ old('class_project_score') }}" required autofocus>

                    @if ($errors->has('class_project_score'))
                        <span class="help-block">
                            <strong>{{ $errors->first('class_project_score') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_project_score') ? ' has-error' : '' }}">
                <label for="last_project_score" class="col-md-3 control-label" style="text-align: right">نمره پروژه پایانی :</label>

                <div class="col-md-7">
                    <input id="last_project_score" type="text" class="form-control" name="last_project_score" value="{{ old('last_project_score') }}" required autofocus>

                    @if ($errors->has('last_project_score'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_project_score') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('total_score') ? ' has-error' : '' }}">
                <label for="total_score" class="col-md-3 control-label" style="text-align: right">نمره کل :</label>

                <div class="col-md-7">
                    <input id="total_score" type="text" class="form-control" name="total_score" value="{{ old('total_score') }}" required autofocus>

                    @if ($errors->has('total_score'))
                        <span class="help-block">
                            <strong>{{ $errors->first('total_score') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label for="image" class="col-md-3 control-label" style="text-align: right">تصویر دانشجو :</label>

                <div class="col-md-7">
                    <input type="file" id="image" class="form-control" name="image" value="{{ old('image') }}" autofocus>

                    @if ($errors->has('image'))
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">
                        ثبت رزومه
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection