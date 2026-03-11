<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class authController extends Controller
{
    public function showLogin() : View
    {
        return view('auth.login');
    }

    public function login(Request $request) 
    {
        $userLogin = $request->only('name', 'password');

        if (Auth::attempt($userLogin)) {
            return redirect('/');
        }

        return back()->with('error', 'login gagal');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
