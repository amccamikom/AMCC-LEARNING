<?php

namespace App\Http\Controllers\Backend;

use App\Models\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Method For get latest member within datatables
     *
     * @return void
     */
    public function index()
    {
        if(request()->wantsJson()){
            return datatables(Member::latest('created_at')->get())->make(true);
        }

        return view('backend.member');
    }

    /**
     * Method For Create Member
     *
     * @param Request $request
     * @return void
     */
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
