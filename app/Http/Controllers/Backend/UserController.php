<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Method for get all newest user and display within datatables
     *
     * @return void
     */
    public function index()
    {
        if(request()->wantsJson()){
            return datatables(User::latest('created_at')->get())
                ->make(true);
        }

        return view('backend.user');
    }

    /**
     * Method For Create User
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'      => 'required|email',
            'password'  => 'required|min:6'
        ]);
        User::create($request->all());

        return redirect()->back()->withSuccess('Task Created Successfully!');
    }
}
