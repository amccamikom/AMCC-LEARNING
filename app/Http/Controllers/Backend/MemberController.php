<?php

namespace App\Http\Controllers\Backend;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        if(request()->wantsJson()){
            return datatables(Member::latest('created_at')->get())->make(true);
        }

        return view('backend.member');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
        ]);
        Member::create($request->all());

        return redirect()->back()->withSuccess('Task Created Successfully!');
    }
}
