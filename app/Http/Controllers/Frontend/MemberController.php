<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function profile()
    {
        $member = $this->guard('member')->user();

        return view('frontend.profile', compact('member'));
    }

    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $this->guard('member')->login($this->member($request), true);

        return $this->state('member')?$this->redirect('index'):abort(403, 'Unauthorized');
    }

    public function logout()
    {
        $this->guard('member')->logout();

        return $this->redirect('index');
    }

    private function member($request)
    {
        return Member::where($request->only('secret'))->firstOrFail();
    }

    private function state($guard)
    {
        return $this->guard($guard)->check();
    }

    private function guard($guard)
    {
        return auth()->guard($guard);
    }

    private function redirect($route)
    {
        return redirect()->route($route);
    }
}
