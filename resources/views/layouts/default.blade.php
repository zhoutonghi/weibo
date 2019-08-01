<!doctype html>
<html lang="en">
<head>
    <title>@yield('title','weibo app') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="offset-md-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
    </div>
</div>
</body>
</html>