<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Order\DataOrderController;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct(DataOrderController $data)
    {
        $this->data = $data;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->data->get_data();
        return view('dashboard.order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->data->store_data($request);

        return redirect()->back()->with('success', 'Insert Data Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->data->show_data($id);
        return view('order.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->data->show_data($id);
        return view('dashboard.order.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->data->update_data($request, $id);
        return redirect(route('dashboard.order.index'))->with('success', 'Update Data Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->data->destroy_data($id);
        return redirect(route('dashboard.product.index'))->with('success', 'Delete Data Successfully');
    }
}
