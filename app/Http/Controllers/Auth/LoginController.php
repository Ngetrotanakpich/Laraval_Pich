<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;

use App\Models\User; // User Model

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function show_login_form()
    {
        return view('sign_in');
    }


    public function process_login(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'name' => 'required'
            
        ]);


        $credentials = $request->except(['_token']);

        //dd( $request);

        $user = User::where('name',$request->name)->first();

        if (auth()->attempt($credentials)) {  // user and password match

            return redirect("/");  // Redirect to homepage

        }else{

            session()->flash('message', 'Invalid credentials'); // Reture error if password and user wrong
            return redirect()->back();
        }

    }

    public function show_signup_form()
    {
        return view('sign_up');
    }

    public function process_signup(Request $request)
    {

        $request->validate([
            'Name' => 'required',
            'Password' => 'required',
            //'Contact_number' => 'required',
            'Email' => 'required'
            
        ]);

        try{
            User::create([
                'name' => trim($request->input('Name')),
                'password' => bcrypt($request->input('Password')),  // Password bcrypt
                //'Contact_number' => bcrypt($request->input('Contact_number')), 
                'email' => strtolower($request->input('Email')),

                
            ]);

            session()->flash('message', 'Your account is created');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('message', 'Your registration is getting problem');

        }

        return redirect()->route('sign_in');

    }

    public function logout()
    {

        \Auth::logout();

        return redirect()->route('sign_in');

    }


}