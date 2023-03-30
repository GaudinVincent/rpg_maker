<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $userLogin = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($userLogin)) {
            Auth::login($userLogin);
            return redirect()->intended('login.authenticate');
        }
        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ])->onlyInput('email');



    }
}