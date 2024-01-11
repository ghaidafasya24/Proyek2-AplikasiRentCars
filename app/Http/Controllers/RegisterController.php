<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function view()
    {
        return view('Log.Register.register');
    }

    public function regis(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string',
                'no_telp' => 'required|string',
                'username' => 'required|string',
                'password' => 'required|string|confirmed'
            ]);

            $dataUser = [
                'nama' => $request->nama,
                'no_telp' => $request->no_telp,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => 'customer'
            ];

            User::create($dataUser);

            return redirect()->route('Signin');
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withInput()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
}
