@include('main.layout.header')



@include('main.layout.navbar')

<div class="container-fluid">
    <div class="row">
        @include('main.layout.sidebar')
        @include('main.layout.content')
    </div>
</div>

@include('main.layout.footer')