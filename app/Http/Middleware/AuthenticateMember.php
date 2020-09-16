<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->wantsJson()){
            if(!auth('member')->check()){
                return redirect()->route('member.login');
            }
        }

        return $next($request);
    }
}
