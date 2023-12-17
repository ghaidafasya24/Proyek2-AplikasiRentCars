<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datamobilController extends Controller
{
    public function datamobil (){
        return view('Admin.DataMobil.datamobil');
    }
}
