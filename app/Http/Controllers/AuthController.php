<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('landing.login');
    }
    public function loginAuth(Request $request)
    {
        if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {
            return "Berhasil Login";
        } else {
            return back()->with("pesan", "Username atau password salah!");
        }
    }
}
