<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    // Show registration form
    // Handle registration request
    public function register(Request $request)
    {

       
        // Validate input
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create new user
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            //'role' => $request->role,
            'interest' => $request->interest 
        ]
        );

        // Automatically login after registration
        Auth::login($user);

        // Redirect to dashboard
        return redirect('/client')->with('success', 'Welcome to SkillSwap PH!');
    }

}