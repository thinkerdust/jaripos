<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function lockScreen()
    {
        session(['is_locked' => true]);
        return view('auth.lock-screen');
    }

    public function unlockScreen(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => auth()->user()->email, 'password' => $request->password])) {
            session()->forget('is_locked');
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'password' => 'The provided password does not match our records.',
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
