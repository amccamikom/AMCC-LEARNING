<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('frontend.feedback');
    }

    public function store(Request $request)
    {
        Feedback::create($request->only('subject'));

        return redirect()->back()->withSuccess('Task Created Successfully!');
    }
}
