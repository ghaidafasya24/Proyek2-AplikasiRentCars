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
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'no_telp' => 'required',
            'password' => 'required|confirmed'
        ]);
        dd($request->all());


        $data['nama'] = $request->name;
        $data['username'] = $request->username;
        $data['no_telp'] = $request->no_telp;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if (!$user) {
            return redirect(route('register'))->with('Error', 'Registration failed, try again');
        }
        return redirect(route('Signin'))->with('Success', 'Registration success!!');
    }
}
