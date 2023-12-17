<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datapengembalianController extends Controller
{
    public function datapengembalian(){
        return view('Admin.DataPengembalian.datapengembalian');
    }
}
