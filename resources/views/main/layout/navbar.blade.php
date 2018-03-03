<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if(Auth::check())
                    <a class="btn-warning panel-btn" href="{{ route('admin') }}">پنل مدیریت</a>
                @else
                    <a class="btn-warning panel-btn" href="{{ route('login') }}">ورود به پنل</a>
            @endif
            
            <a class="navbar-brand" href="/">رزومه آیدیا</a>
        </div>
    </div>
</nav>