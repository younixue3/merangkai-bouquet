@extends('component.layout.master')
@section('title', 'Cart')
@section('content')
    <div class="bg-white border rounded-lg p-5 pt-10">
        <table class="w-full table-auto text-sm text-center mt-10">
            <thead class="h-10">
            <tr>
                <th>Id</th>
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
                    <td>{{$value->product->name}}</td>
                    <td>{{$value->pcs}}</td>
                    <td>{{$value->status}}</td>
                    <td>Rp. {{$value->total_price}}</td>
                    <td class="py-3">
                        <a class="btn {{$value->status === 'pending' ? 'btn-warning' : 'btn-success'}}"
                           @if($value->status === 'pending')
                               href="{{route('payment', $value->id)}}"
                           @endif
                        >
                            @if($value->status === 'processing')
                                Sudah
                            @endif
                            Bayar
                        </a>
                    </td>
                </tr>
            @empty
                Kosong
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
