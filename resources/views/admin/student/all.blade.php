@extends('admin.master')
@section('title')
    لیست دانشجویان
@endsection

@section('content')
    <div class="row placeholders col-md-4 col-md-offset-3" style="text-align: right">
        <h1 class="page-header">لیست دانشجویان</h1>
    </div>
    <div class="row col-sm-9 col-sm-offset-3">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>
                            <form action="{{ route('student.destroy' , [ 'id' => $student->id ]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                {{--<a class="btn btn-primary btn-xs"  href="{{ route( 'students.show' , [ 'id' => $student->id ] ) }}">نمایش مشخصات</a>--}}
                                {{--  <a class="btn btn-info btn-xs"  href="{{ route( 'course.edit' , [ 'id' => $course->id ] ) }}">ویرایش</a>  --}}
                                <button type="submit" class="btn btn-danger btn-xs">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $students->links() }}
    </div>
@endsection