<?php

namespace App\Http\Controllers\Backend;

use App\Models\Feedback;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Method For get all feedback with newest filter
     *
     * @return void
     */
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
