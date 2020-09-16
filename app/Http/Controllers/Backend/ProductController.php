<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('backend.product', compact('product'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        //
    }
}
