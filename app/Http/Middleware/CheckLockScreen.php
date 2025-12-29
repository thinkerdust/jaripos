<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLockscreen
{
    public function handle(Request $request, Closure $next)
    {
        if (session('is_locked')) {
            return redirect()->route('lock-screen');
        }

        return $next($request);
    }
}