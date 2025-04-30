<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

// @desc Show register form
// @route GET /login
class LoginController extends Controller
{
    // @desc    Show login form
    // @route   GET /login
    public function login(): View {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse {
        
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:100'],
            'password' => ['required', 'string'],
        ]);

        // Attempt to authenticate user
        if(Auth::attempt($credentials)) {
            // Regenerate the session to prevent fixatio! attacks 
            $request->session()->regenerate();

            return redirect()->intended(route('home'))->with('sucess', 'You are now logged in!');
        }

        // If auth fails, redirect back with error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');

    }

    // @desc    Logout user
    // @route   POST /logout
    public function logout(Request $request): RedirectResponse {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
