<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        /*$products = Products::all();*/

        $title = "Welcome to my Laravel";
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        return view('products.index')->with('data', $data);
    }

    public function show($name)
    {
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
    }
    /*
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Products::create($input);
        return redirect('product')->with('flash_message', 'Product Addedd!');
    }

    public function show($id)
    {
        $product = Products::find($id);
        return view('products.show')->with('products', $product);
    }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('products.edit')->with('products', $product);
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'product Updated!');
    }

    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('product')->with('flash_message', 'product deleted!');
    }*/
}
