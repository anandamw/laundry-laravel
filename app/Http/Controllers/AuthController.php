<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login view
    public function login()
    {
        return view('auth.login');
    }

    // Handle the login action
    public function login_action(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'EMAIL WAJIB DIISI',
            'password.required' => 'PASSWORD WAJIB DIISI',
        ]);

        // Gather login information
        $credentials = $request->only('email', 'password');

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Check user role and redirect accordingly
            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                    return redirect('/dashboard');
                case 'pembeli':
                    return redirect('/home');
                case 'karyawan':
                    return redirect('/dashboard');
                default:
                    return redirect('/login')->withErrors('ROLE TIDAK VALID')->withInput();
            }
        } else {
            // Authentication failed, redirect back with an error message
            return redirect('/login')->withErrors('PASSWORD ATAU EMAIL SALAH')->withInput();
        }
    }

    // Handle the logout action
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
