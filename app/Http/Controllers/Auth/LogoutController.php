<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/'); // Redirect to the homepage or any other authenticated user page
        } else {
            return redirect('/signin'); // Redirect to the login page or any other non-authenticated user page
        }
    }
}