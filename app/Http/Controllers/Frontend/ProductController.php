<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('frontend.product', compact('product'));
    }
}
