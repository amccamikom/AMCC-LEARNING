<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Feedback;
use App\Http\Controllers\Controller;
use App\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $product = Product::count();
        $feedback = Feedback::count();
        $member = Member::count();

        return view('backend.dashboard', compact('product','feedback','member'));
    }
}
