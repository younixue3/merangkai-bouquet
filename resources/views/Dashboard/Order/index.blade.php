@extends('component.layout.dashboard.master')
@section('title', 'Order')
@section('content')
    <div class="bg-white border rounded-lg p-5">
        <table class="w-full table-auto text-sm text-center mt-10">
            <thead class="h-10">
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Product</th>
                <th>Pcs</th>
                <th>Status</th>
                <th>Total Price</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            @forelse($order as $key => $value)
                <tr class="hover:bg-rose-100 transition">
                    <td>{{$value->id}}</td>
                    <td>{{$value->user->email}}</td>
                    <td>{{$value->product->name}}</td>
                    <td>{{$value->pcs}}</td>
                    <td>{{$value->status}}</td>
                    <td>Rp. {{$value->total_price}}</td>
                    <td class="py-3">
                        <a class="btn btn-warning" href="{{route('dashboard.order.edit', $value->id)}}">Detail</a>
                        <form method="POST" action="{{route('dashboard.order.destroy', $value->id)}}">
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
