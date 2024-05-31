@extends('component.layout.master')
@section('title', 'Payment')
@section('content')
    <div class="pt-20 px-10">
        <form method="POST" action="{{route('pay', $order->id)}}"
              class="bg-white h-full rounded-lg border grid grid-cols-3 gap-5 p-5"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-span-3">
                <label>Bukti Pembayaran</label>
                <input name="fileupload" type="file"
                       class="px-2 py-1 w-full border border-rose-400 text-rose-400 rounded-lg outline-none block items-center transition-all ease-in-out">
            </div>
            <button class="btn-success w-full">Submit</button>
            <a href="{{route('dashboard.product.index')}}" class="btn btn-danger w-full col-start-3">Cancel</a>
        </form>
    </div>
@endsection
