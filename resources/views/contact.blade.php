@extends('component.layout.master')
@section('title', 'Contact')
@section('content')
    <div>
        <div class="flex relative h-[35rem] w-full">
            <img class="h-full w-full object-cover object-top" src="{{asset('assets/img/2148442453.jpg')}}" />
            <div class="absolute flex w-full h-full">
                <div class="m-auto md:ml-52">
                    <h1 class="font-bold text-4xl text-rose-600">Kontak Kami</h1>
                    <div class="mt-10 w-96">
                        <ul>
                            <li>
                                Address goes here, street, Crossroad 123.
                            </li>
                            <li>
                                info@example.com / info@example.com
                            </li>
                            <li>
                                +1 35 776 859 000 / +1 35 776 859 011
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
