<?php

namespace App\Http\Controllers;

use App\Helper\getFilename;
use App\Http\Controllers\Order\DataOrderController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function __construct(DataOrderController $data)
    {
        $this->data = $data;
    }

    public function index()
    {
        $order = $this->data->get_data(true);
        return view('cart', $order);
    }

    public function payment(string $id)
    {
        $order = Order::findOrFail($id);
        $compact = compact('order');
        return view('pay', $compact);

    }

    public function pay(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $filename = getFilename::getFilename($request);
        Storage::disk('public')->putFileAs('payment', $request->fileupload, $filename['filename']);

        $order->update([
            'payment' => $filename['filename'],
            'status' => 'processing'
        ]);

        return redirect(route('cart'))->with('success', 'Update Data Successfully');
    }
}
