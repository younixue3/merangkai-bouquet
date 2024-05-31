@extends('component.layout.master')
@section('title', 'About')
@section('content')
    <div>
        <div class="flex relative h-[35rem] w-full">
            <img class="h-full w-full object-cover object-top" src="{{asset('assets/img/2148442453.jpg')}}" />
            <div class="absolute flex w-full h-full">
                <div class="m-auto md:ml-52">
                    <h1 class="font-bold text-4xl text-rose-600">Merangkai Bouquet</h1>
                    <div class="mt-10 w-96">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque egestas nibh quis mollis lacinia. Duis a imperdiet sem. Quisque non faucibus nisl, eget vulputate orci. Morbi aliquam venenatis leo at vehicula. Integer vel gravida odio. Cras eleifend metus quis mattis blandit. Sed id feugiat enim. Suspendisse rutrum ac enim id convallis. Sed a vehicula leo. Integer id neque sed dolor gravida fermentum vitae vitae nulla. Donec in orci purus. Donec varius lectus id dui scelerisque, luctus sodales urna volutpat. Suspendisse cursus vel nibh quis efficitur. Praesent tempor suscipit dignissim.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
