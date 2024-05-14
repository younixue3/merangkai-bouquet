@extends('component.layout.master')
@section('title', 'Product')
@section('content')
    <div class="pt-20 px-10">
        <form method="POST" action="{{route('product.update', $product->id)}}" class="bg-white h-full w-[40rem] m-auto rounded-lg border grid grid-cols-3 gap-5 p-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-span-3">
                <label>Name</label>
                <input name="name" value="{{$product->name}}" class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
            </div>
            <div class="col-span-3">
                <label>Description</label>
                <textarea name="description" class="px-2 py-1 w-full resize-none border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">{{$product->name}}</textarea>
            </div>
            <div class="col-span-3">
                <label>Category</label>
                <input name="category" value="{{$product->category}}" class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
            </div>
            <div class="col-span-3">
                <label>Pcs</label>
                <input name="pcs" type="number" value="{{$product->pcs}}" class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
            </div>
            <div class="col-span-3">
                <label>Price</label>
                <input name="price" type="number" value="{{$product->price}}" class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
            </div>
            <div class="col-span-3">
                <label>Discount</label>
                <input name="discount" type="number" value="{{$product->discount}}" class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
            </div>
            <div class="col-span-3">
                <label>Image</label>
                <input name="fileupload" type="file" class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
            </div>
            <button class="btn-success w-full">Submit</button>
            <a href="{{route('product.index')}}" class="btn btn-danger w-full col-start-3">Cancel</a>
        </form>
    </div>
@endsection
