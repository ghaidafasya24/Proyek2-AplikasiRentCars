<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signin()
    {
        return view('Log.Login.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'admin'){
                return redirect()->route('dashboard')->with('success', 'Login berhasil!');
            } else {
                return redirect()->route('katalogmobil')->with('success', 'Login berhasil!');
            }
            // Jika login berhasil, arahkan ke halaman dashboard atau halaman lainnya
        } else {
            // Jika login gagal, kembali ke halaman login dengan pesan error
            return redirect()->route('Signin')->with('error', 'Login gagal. Periksa kembali username dan password.');
        }
    }
}
