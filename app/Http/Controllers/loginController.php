<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function signin(){
        return view('Log.Login.login');
    }
}
