<?php

namespace App\Http\Controllers\Backend;

use App\Feedback;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function index()
    {
        if(request()->wantsJson()){
            return datatables(Feedback::latest('created_at')->get())
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.feedback');
    }
}
