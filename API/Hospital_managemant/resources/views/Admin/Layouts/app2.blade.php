<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,400&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
        <link href="{{asset('css/sidenav.css')}}" rel="stylesheet" >
        <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" >

    </head>
    <body class="fix-header fix-sidebar">

        @include('Admin.Layouts.menu')


        @yield('content')


        </div>
        </div>
        <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    </body>
    
</html>