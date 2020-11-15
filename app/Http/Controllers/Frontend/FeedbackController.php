<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * method that return the feedback view
     *
     * @return void
     */
    public function index()
    {
        return view('frontend.feedback');
    }

    /**
     * method for create feedback
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Feedback::create($request->only('subject'));

        return redirect()->back()->withSuccess('Task Created Successfully!');
    }
}
