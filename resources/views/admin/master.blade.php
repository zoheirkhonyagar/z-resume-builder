@include('admin.layout.header')



@include('admin.layout.navbar')

<div class="container-fluid">
    <div class="row">
        @include('admin.layout.sidebar')
        @include('admin.layout.content')
    </div>
</div>

@include('admin.layout.footer')