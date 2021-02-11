<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
{
    public function handle($request, Closure $next)
    {
        if (! $request->expectsJson()) {
            if(Auth::user()->role == User::ADMIN_ROLE) {
                return $next($request);
            }
            return abort(401);
        }
    }
}
