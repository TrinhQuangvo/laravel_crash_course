<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $req)
    {
        $credentials = $req->only('email', 'password'); 

        $this->validate($req, [
            'email' => 'required|max:255',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials , $req->remember)) {
            return back()->with('status', 'invalid login details');
        }

        return redirect()->route('home');
    }
}
