<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        return view('Log.Login.login');
    }
    public function landingpage(){
        return view('welcome');
    }
}
