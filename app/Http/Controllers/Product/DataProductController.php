<?php

namespace App\Http\Controllers\Product;

use App\Helper\getFilename;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DataProductController extends Controller
{
    public function get_data()
    {
        $product = Product::paginate(20);
        $compact = compact('product');
        return $compact;
    }

    public function store_data($request)
    {
        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('public')->putFileAs('/assets/product', $request->fileupload, $filename['filename']);

            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category,
                'pcs' => $request->pcs,
                'discount' => $request->discount,
                'image' => $filename['filename'],
            ]);
        } else {
            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category,
                'pcs' => $request->pcs,
                'discount' => $request->discount
            ]);
        };

        return $product;
    }

    public function show_data($id)
    {
        $product = Product::findOrFail($id);
        $compact = compact('product');

        return $compact;
    }

    public function update_data($request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->fileupload != null) {
            $filename = getFilename::getFilename($request);
            Storage::disk('public')->putFileAs('blog', $request->fileupload, $filename['filename']);

            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category,
                'pcs' => $request->pcs,
                'discount' => $request->discount,
                'image' => $filename['filename'],
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'category' => $request->category,
                'pcs' => $request->pcs,
                'discount' => $request->discount
            ]);
        };

        return $product;
    }

    public function destroy_data($id)
    {
        $product = Product::findOrFail($id)->delete();
        $compact = compact('product');

        return $compact;
    }
}
