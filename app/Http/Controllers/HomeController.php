<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Product\DataProductController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DataProductController $productData)
    {
        $this->productData = $productData;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->productData->get_data();
        $compact = compact('data');
        return view('index', $data);
    }
}
