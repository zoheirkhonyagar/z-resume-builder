<!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">

<link href="/css/bootstrap-rtl.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<style>
    .nav-sidebar li a{
        color: #fff;
    }

    .nav-sidebar li{
        margin: 10px 0;
    }
    .nav-sidebar li a:hover{
        color: #fff;
        background-color: #5cb85c;
    }
    .form-control,.form-control:hover ,.form-control:active {
        box-shadow: none;
    }

    input[type=file]:focus, input[type=checkbox]:focus, input[type=radio]:focus{
        outline: none !important;
    }

    .navbar-right .dropdown-menu {
        right: 0;
        left: auto;
    }

    .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
        background: #080808;
    }

    .navbar-nav>li>.dropdown-menu li a{
        color: #fff;
    }

    .navbar-nav>li>.dropdown-menu{
        border:none;
        background: #080808;
    }
    .sidebar-h4{
        padding: 10px;
        background: #e8e8e8;
        margin: 0;
    }

    .nav-sidebar li.btn-danger a:hover {
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    .panel-btn{
        height: 50px;
        padding: 15px 15px;
        font-size: 18px;
        line-height: 40px;
    }
</style>
@yield('custom-styles')