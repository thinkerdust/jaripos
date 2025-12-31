<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;

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

    public function processRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        auth()->login($user);

        return redirect()->route('dashboard');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    public function processResetPassword(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'The provided email does not match our records.',
            ]);
        }

        $password = Str::random(8);
        $user->password = Hash::make($password);
        $user->save();

        Mail::to($user->email)->send(new ResetPasswordMail($user, $password));

        return redirect()->route('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
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
            'password' => 'required|min:4',
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
