<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductsController extends Controller
{
    public function getIndex()
    {
        $products = Products::all();
        return view('supermarket.index', ['products' => $products]);
    }
}
