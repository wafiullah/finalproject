<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->intended('admin/dashboard');
        } else {
            return redirect('/admin/login')->with('error', 'Login failed')->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
