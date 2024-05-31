@extends('component.layout.dashboard.master')
@section('title', 'Order')
@section('content')
    <form method="POST" action="{{route('dashboard.order.update', $order->id)}}"
          class="bg-white h-full rounded-lg border grid grid-cols-3 gap-5 p-5"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-span-3">
            <label>Status</label>
            <select name="status" class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
                <option value="completed">completed</option>
                <option value="cancelled">cancelled</option>
            </select>
        </div>
        <div class="col-span-3">
            <img class="h-96" src='{{asset("storage/payment/{$order->payment}")}}'>
        </div>
        <button class="btn-success w-full">Submit</button>
        <a href="{{route('dashboard.product.index')}}" class="btn btn-danger w-full col-start-3">Cancel</a>
    </form>
@endsection
