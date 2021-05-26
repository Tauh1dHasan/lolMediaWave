<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
// Showing user login page
    public function login()
    {
        return view('admin.login');
    }

// User login function
    public function loginFunction(Request $request)
    {
        // login function
        if (!auth()->attempt($request->only('email', 'password'))) {
            return redirect('/login')->with('error', 'Email or Password did not matched');
        }
        return redirect('/dashboard');
    }

// User logout function
    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
