<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(DataProductController $data)
    {
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->data->get_data();
        return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'fileupload' => ['required', 'mimes:jpeg,jpg,webp,png'],
        ]);

        $data = $this->data->store_data($request);

        return redirect(route('product.index'))->with('success', 'Insert Data Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->data->show_data($id);
        return view('product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->data->update_data($request, $id);
        return redirect(route('product.index'))->with('success', 'Update Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->data->destroy_data($id);
        return redirect(route('product.index'))->with('success', 'Delete Data Successfully');
    }
}
