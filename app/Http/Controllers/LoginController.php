<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $admin = DB::table('admins')->where('email', $data['email'])->first();

        if ($admin && password_verify($data['password'], $admin->password)) {
            // Autentikasi berhasil
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'Email atau password salah!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}