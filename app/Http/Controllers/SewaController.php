<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function datasewa (){
        return view('Admin.DataSewa.datasewa');
    }
}
