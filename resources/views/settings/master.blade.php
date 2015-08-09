<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <div class="header" style="background-color: orangered">
        @section('header')
            This is master header
        @show
    </div>
    <div class="container" style="background-color: #ffffff">
        @yield('container')
    </div>
    <div class="footer" style="background-color: green">
        @section('footer')
            This is master footer
        @show
    </div>
</body>
</html>