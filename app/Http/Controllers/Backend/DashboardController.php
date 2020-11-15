<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Models\Member;

class DashboardController extends Controller
{
    /**
     * method for counting summary
     *
     * @return void
     */
    public function index()
    {
        $product = Product::count();
        $feedback = Feedback::count();
        $member = Member::count();

        return view('backend.dashboard', compact('product','feedback','member'));
    }
}
