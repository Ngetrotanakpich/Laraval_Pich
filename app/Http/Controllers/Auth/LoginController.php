<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

use App\Models\User; // User Model

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;




class LoginController extends Controller
{
    public function show_login_form()
    {
        return view('login');
    }

    public function process_login(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'name' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/'); // Redirect to the intended page after successful login
        } else {
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function show_signup_form()
    {
        return view('signup');
    }

    public function process_signup(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Password' => 'required',
            'Email' => 'required'
        ]);

        try {
            User::create([
                'name' => trim($request->input('Name')),
                'password' => bcrypt($request->input('Password')),
                'email' => strtolower($request->input('Email')),
            ]);

            session()->flash('message', 'Your account has been created');
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('message', 'There was an error with your registration');
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}
