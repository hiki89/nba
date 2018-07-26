<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest', ['except' => 'destroy']);
    // }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        $credentials = request()->only(['email', 'password']);
        $message = 'Email or password are incorrect. Please try again.';

        if (auth()->attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['message' => $message]);
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
