<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merangkai | @yield('title')</title>
    {{-- <link rel="icon" type="image/png" href="{{asset('assets/logo/logo_colorfull.png')}}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app" class="bg-gray-100 w-full font-raleway font-outfit">
    {{-- @include('Front.layout.header') --}}
    <div class="">
        @yield('content')
    </div>
    {{-- @include('Front.layout.footer') --}}
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
