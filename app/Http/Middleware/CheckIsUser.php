<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsUser
{
    public function handle($request, Closure $next)
    {
        if (! $request->expectsJson()) {
            if(Auth::user()->role == User::USER_ROLE) {
                return $next($request);
            }
            return abort(401);
        }
    }
}
