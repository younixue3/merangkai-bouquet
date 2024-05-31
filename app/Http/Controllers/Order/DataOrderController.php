<?php

namespace App\Http\Controllers\Order;

use App\Helper\getFilename;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataOrderController extends Controller
{
    public function get_data($cart = false)
    {
        if ($cart) {
            $order = Order::where('user_id', auth()->user()->id)->paginate(20);
        } else {
            $order = Order::paginate(20);
        }
        $compact = compact('order');
        return $compact;
    }

    public function store_data($request)
    {
        $product = Product::find($request->product_id);

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'pcs' => $request->pcs,
            'total_price' => $product->price * $request->pcs,
        ]);

        return $order;
    }

    public function show_data($id)
    {
        $order = Order::findOrFail($id);
        $compact = compact('order');

        return $compact;
    }

    public function update_data($request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update([
            'status' => $request->status,
        ]);

        return $order;
    }

    public function destroy_data($id)
    {
        $order = Order::findOrFail($id)->delete();
        $compact = compact('order');

        return $compact;
    }
}
