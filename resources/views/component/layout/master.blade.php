<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merangkai | @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
</head>
<body>
@include('component.layout.header')
<div class="mb-10">
    @yield('content')
</div>
@include('component.layout.footer')
</body>
</html>
