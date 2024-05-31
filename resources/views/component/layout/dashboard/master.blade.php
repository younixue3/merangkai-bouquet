<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIMA | @yield('title')</title>
    {{-- <link rel="icon" type="image/png" href="{{asset('assets/logo/logo_colorfull.png')}}"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app" class="bg-gray-100 min-h-screen w-full font-raleway font-outfit relative">
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        @include('component.layout.dashboard.header')
        <main class="p-4 md:ml-64 h-auto pt-20 min-h-screen">
            @yield('content')
        </main>
    </div>
    {{-- @include('Back.layout.footer') --}}
    <div class="absolute bottom-0 right-0 flex flex-col space-y-1 p-5">
        @forelse ($errors->all() as $error)
            <div id="toast-danger" class="flex w-96 h-20 items-center p-4 text-gray-500 bg-rose-500 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                    </svg>
                    <span class="sr-only">{{$error}}</span>
                </div>
                <div class="ml-3 text-sm text-white font-normal">{{$error}}</div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @empty
        @endforelse

    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
<style>
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
</body>
</html>
