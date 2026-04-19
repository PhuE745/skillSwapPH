<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    // Handle login request
  public function login(Request $request)
{
    // Validate input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt login with email and password
    $credentials = $request->only('email', 'password');
    
    if (Auth::attempt($credentials, $request->remember)) {
        // Login successful
        $request->session()->regenerate();
        
        // Check user role
        $user = Auth::user();
        
        if ($user->role === 'ADMIN') {
            return redirect()->intended('/admin')->with('success', 'Welcome Admin!');
        }
        
        return redirect()->intended('/client')->with('success', 'Welcome back!');
    }

    // Login failed
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}
    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
