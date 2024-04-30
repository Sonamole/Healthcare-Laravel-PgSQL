<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){

        return view('admin.auth.login');
    }

    // public function login(Request $request)
    // {
    //     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
    //         // Authentication successful
    //         return redirect()->route('admin.caretaker.list');
    //     } else {
    //         // Authentication failed
    //         return redirect()->back()->withInput($request->only('email'))->withErrors([
    //             'email' => 'Invalid email or password.',
    //         ]);
    //     }
    // }

}