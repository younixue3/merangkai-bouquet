@extends('component.layout.master')
@section('title', 'Home')
@section('content')
    <div>
        <div class="flex relative h-[35rem] w-full">
            <img class="h-full w-full object-cover object-top" src="{{asset('assets/img/2148442453.jpg')}}" />
            <div class="absolute flex w-full h-full">
                <div class="m-auto ml-52">
                    <h1 class="text-6xl font-extrabold text-rose-900">
                        <div class="font-dancing-script text-5xl text-rose-600 font-bold">Wedding</div>
                        Beautiful <br>in White
                    </h1>
                    <div class="mt-10">
                        <span class="font-outfit text-rose-600">Rp. 230.000</span>
                        <button class="btn-primary ml-2">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 px-36 pt-10">
            <div class="flex bg-white rounded-xl shadow-lg hover:shadow-xl border scale-90 hover:scale-100 transition-all p-5">
                <i class="fa-solid fa-truck text-2xl m-auto"></i>
                <div>
                    <h4 class="font-bold">Free Shipping</h4>
                    <p class="font-light text-sm">Free shipping all order.</p>
                </div>
            </div>
            <div class="flex bg-white rounded-xl shadow-lg hover:shadow-xl border scale-90 hover:scale-100 transition-all p-5">
                <i class="fa-solid fa-clock text-2xl m-auto"></i>
                <div>
                    <h4 class="font-bold">Support 24/7</h4>
                    <p class="font-light text-sm">Support 24 hours a day.</p>
                </div>
            </div>
            <div class="flex bg-white rounded-xl shadow-lg hover:shadow-xl border scale-90 hover:scale-100 transition-all p-5">
                <i class="fa-solid fa-hand-holding-dollar text-2xl m-auto"></i>
                <div>
                    <h4 class="font-bold">Money Return</h4>
                    <p class="font-light text-sm">30 Days for free return.</p>
                </div>
            </div>
            <div class="flex bg-white rounded-xl shadow-lg hover:shadow-xl border scale-90 hover:scale-100 transition-all p-5">
                <i class="fa-solid fa-fan text-2xl m-auto"></i>
                <div>
                    <h4 class="font-bold">Best Quality</h4>
                    <p class="font-light text-sm">Best Product Quality.</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-5 px-36 mt-20">
            <div class="flex relative group shadow rounded-lg overflow-hidden h-52">
                <img class="h-full w-full object-cover object-center" src="{{asset('assets/img/2148860022.jpg')}}" />
                <div class="absolute flex w-full h-full group-hover:bg-gray-500/20 group-hover:backdrop-blur-sm transition overflow-hidden">
                    <div class="m-auto text-center">
                        <h1 class="text-xl font-outfit font-extrabold text-rose-900">
                            <div class="font-dancing-script text-xl text-rose-600 font-bold">Promo</div>
                            Money Bouquet
                        </h1>
                        <div class="mt-10">
                            <button class="btn-primary ml-2">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex relative group shadow rounded-lg overflow-hidden h-52">
                <img class="h-full w-full object-cover object-center" src="{{asset('assets/img/1170.jpg')}}" />
                <div class="absolute flex w-full h-full group-hover:bg-gray-500/20 group-hover:backdrop-blur-sm transition ">
                    <div class="m-auto text-center">
                        <h1 class="text-xl font-outfit font-extrabold text-rose-900">
                            <div class="font-dancing-script text-xl text-rose-600 font-bold">Promo</div>
                            Money Bouquet
                        </h1>
                        <div class="mt-10">
                            <button class="btn-primary ml-2">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="mt-10">
            <h4 class="text-center text-6xl font-dancing-script mb-5">Bouquet Catalog</h4>
            <div class="flex justify-center gap-3 font-bold font-philosopher">
                <div><button class="btn-outline-primary">New</button></div>
                <div><button class="btn-outline-primary">Best Seller</button></div>
                <div><button class="btn-outline-primary">Money Bouquet</button></div>
                <div><button class="btn-outline-primary">Flower Bouquet</button></div>
            </div>
            <div class="grid grid-cols-5 gap-5 p-10 font-philosopher">
                @forelse($product as $key => $value)
                <a class="group" href="#">
                    <div class="bg-white flex border border-rose-200 rounded-lg p-4">
                        <div>
                            <img class="h-52 rounded-md w-full object-cover object-center" src="{{asset("storage/assets/product/{$value->image}")}}" />
                            <div class="mt-5 group-hover:text-rose-700 transition">
                                <h5 class="font-bold">{{$value->name}}</h5>
                                <p class="text-sm">Rp. {{$value->discount ? $value->price * ($value->discount / 100) : $value->price}}<span class="text-sm text-gray-500 line-through ml-2"> {{$value->discount ? "Rp. {$value->price}" : null}}</span></p>
                                <div class="text-sm mt-5 bg-gray-100 p-3 rounded-lg">{{$value->description}}</div>
                            </div>
                        </div>
                        <button class="rounded-md btn-primary text-xs m-1 p-0.5 px-2 absolute">{{$value->category}}</button>

                    </div>
                </a>
                @empty
                    Kosong
                @endforelse
            </div>
        </section>
    </div>
@endsection
