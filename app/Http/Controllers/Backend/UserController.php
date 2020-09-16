<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(request()->wantsJson()){
            return datatables(User::latest('created_at')->get())
                ->make(true);
        }

        return view('backend.user');
    }

    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->back()->withSuccess('Task Created Successfully!');
    }
}
