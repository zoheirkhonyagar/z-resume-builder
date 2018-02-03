<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="btn-primary"><a href="{{route('student.create')}}">افزودن رزومه</a></li>
        <li class="btn-primary"><a href="{{route('course.create')}}">افزودن درس</a></li>
        <li class="btn-danger">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                خروج
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>