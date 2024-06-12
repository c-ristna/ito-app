<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginStore(Request $request)
    {
        $data = $request->validate([
            'nama_admin' => 'required|max:225',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();

            return redirect()->route('home');
        }
        return back()->with('error', 'email atau password salah!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
