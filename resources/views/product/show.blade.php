@extends('component.layout.master')
@section('title', 'Product')
@section('content')
    <div class="pt-20">
        <div class="flex relative w-full">
            <div class="w-1/2">
                <img class="h-96 w-96 m-auto rounded-lg object-cover object-top" src="{{asset("storage/assets/product/{$product->image}")}}" />
            </div>
            <div class="w-1/2">
                <h1 class="font-bold text-4xl text-rose-600">{{$product->name}}</h1>
                <div class="mt-10 w-96">
                    {{$product->description}}
                </div>
                <div class="mt-10">
                    <form class="grid grid-cols-4 gap-4" method="post" action="{{route('order.store')}}">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <span class="font-outfit text-rose-600 col-span-4">Rp. {{$product->price}}</span>
                        <div>
                            <label>Pcs</label>
                            <input name="pcs" type="number"
                                   class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
                        </div>
                        <button class="btn-primary ml-2 col-span-4">Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
