<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Method For get all product
     *
     * @return void
     */
    public function index()
    {
        $product = Product::all();

        return view('backend.product', compact('product'));
    }

    /**
     * Method For Create Product
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->back();
    }
}
