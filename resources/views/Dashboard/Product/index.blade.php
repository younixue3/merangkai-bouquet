@extends('component.layout.dashboard.master')
@section('title', 'Product')
@section('content')
        <div class="bg-white border rounded-lg p-5">
            <a href="{{route('dashboard.product.create')}}" class="btn btn-primary">Tambah Produk</a>
            <table class="w-full table-auto text-sm text-center mt-10">
                <thead class="h-10">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Pcs</th>
                    <th>Discount</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @forelse($product as $key => $value)
                    <tr class="hover:bg-rose-100 transition">
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->category}}</td>
                        <td>{{$value->pcs}}</td>
                        <td>{{$value->discount}}%</td>
                        <td>Rp. {{$value->Price}}</td>
                        <td>
                            <img class="h-20 object-cover object-center m-auto" src='{{asset("storage/assets/product/{$value->image}")}}' />
                        </td>
                        <td class="py-3">
                            <a class="btn btn-warning" href="{{route('dashboard.product.edit', $value->id)}}">Detail</a>
                            <form method="POST" action="{{route('dashboard.product.destroy', $value->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" href="">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    Kosong
                @endforelse
                </tbody>
            </table>
        </div>
@endsection
