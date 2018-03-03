@extends('admin.master')
@section('title')
    افزودن رزومه
@endsection

@section('content')

    <div class="row placeholders col-md-4 col-md-offset-3" style="text-align: right">
        <h1 class="page-header">افزودن درس :</h1>
        <form class="form-horizontal" method="POST" action="{{ route('course.update' , [ 'id' => $course->id]) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-3 control-label" style="text-align: right">نام :</label>

                <div class="col-md-7">
                    <input id="name" type="text" class="form-control" name="name" value="{{ $course->name }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">
                        ویرایش درس
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection