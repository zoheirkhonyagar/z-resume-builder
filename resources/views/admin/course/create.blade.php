@extends('admin.master')
@section('title')
    افزودن رزومه
@endsection

@section('content')

    <div class="row placeholders col-md-4 col-md-offset-3" style="text-align: right">
        <h1 class="page-header">افزودن درس :</h1>
        <form class="form-horizontal" method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-3 control-label" style="text-align: right">نام :</label>

                <div class="col-md-7">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                        ثبت درس
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="row col-sm-9 col-sm-offset-3">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام درس</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>
                            <form action="{{ route('course.destroy' , [ 'id' => $course->id ]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                {{--<a class="btn btn-primary btn-xs"  href="{{ route( 'students.show' , [ 'id' => $student->id ] ) }}">نمایش مشخصات</a>--}}
                                <a class="btn btn-info btn-xs"  href="{{ route( 'course.edit' , [ 'id' => $course->id ] ) }}">ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-xs">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $courses->links() }}
    </div>
@endsection