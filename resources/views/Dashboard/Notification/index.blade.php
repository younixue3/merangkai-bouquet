@extends('component.layout.dashboard.master')
@section('title', 'Order')
@section('content')
    <div class="bg-gray-200 grid grid-cols-1 p-5 text-white">
        @forelse($notification as $key => $value)
            <div id="info-popup" tabindex="-1" class="overflow-y-auto overflow-x-hidden w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 md:p-8">
                        <div class="mb-4 text-sm font-light text-gray-500 dark:text-gray-400">
                            <h3 class="mb-3 text-2xl font-bold text-gray-900 dark:text-white">{{$value->message}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            Kosong
        @endforelse
    </div>
@endsection
