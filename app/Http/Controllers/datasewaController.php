<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datasewaController extends Controller
{
    public function datasewa (){
        return view('Admin.DataSewa.datasewa');
    }
}
