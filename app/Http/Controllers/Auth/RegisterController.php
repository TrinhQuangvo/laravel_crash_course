<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|max:255',
            'con'
        ]);
        // validation
        // store user
        // sign user in
        // redirect
        User::create(
            [
                'name' => $req->name,
                'username' => $req->username,
                'email' => $req->email,
                'password' =>  Hash::make($req->password),
                'password_cofirmation' => Hash::make($req->password_confirmation)
            ]
        );
        return redirect()->route('dashboard');
    }
}
