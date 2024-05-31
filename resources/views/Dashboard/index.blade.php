@extends('component.layout.dashboard.master')
@section('title', 'Dashboard')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div class="col-span-4 text-white text-center bg-gray-800 border border-gray-600 rounded-lg p-5">
            <h1 class="text-4xl">Hi {{auth()->user()->name}}, Selamat Datang di Dashboard</h1>
        </div>
    </div>
@endsection
