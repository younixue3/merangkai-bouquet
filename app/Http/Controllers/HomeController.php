<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Product\DataProductController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(DataProductController $productData)
    {
        $this->productData = $productData;
    }

    public function index()
    {
        $data = $this->productData->get_data();
        return view('index', $data);
    }
}
