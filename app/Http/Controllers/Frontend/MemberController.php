<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * method for get profile within guarded member
     *
     * @return void
     */
    public function profile()
    {
        $member = $this->guard('member')->user();

        return view('frontend.profile', compact('member'));
    }

    /**
     * method that return login view
     *
     * @return void
     */
    public function showLoginForm()
    {
        return view('frontend.auth.login');
    }

    /**
     * method for member login
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        $this->guard('member')->login($this->member($request), true);

        return $this->state('member')?$this->redirect('index'):abort(403, 'Unauthorized');
    }

    /**
     * method for logout member
     *
     * @return void
     */
    public function logout()
    {
        $this->guard('member')->logout();

        return $this->redirect('index');
    }

    /**
     * method for check the secret key exist/not
     *
     * @param [type] $request
     * @return void
     */
    private function member($request)
    {
        return Member::where($request->only('secret'))->firstOrFail();
    }

    /**
     * method for check the guard state of member
     *
     * @param [type] $guard
     * @return void
     */
    private function state($guard)
    {
        return $this->guard($guard)->check();
    }

    /**
     * method for auth guard
     *
     * @param [type] $guard
     * @return void
     */
    private function guard($guard)
    {
        return auth()->guard($guard);
    }

    /**
     * method for redirect to particular route
     *
     * @param [type] $route
     * @return void
     */
    private function redirect($route)
    {
        return redirect()->route($route);
    }
}
