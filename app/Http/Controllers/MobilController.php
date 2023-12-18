<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function datamobil (){
        return view('Admin.DataMobil.datamobil');
    }

    public function createMobil (){
        return view('Admin.DataMobil.tambahmobil');     
    }
    
    public function editMobil (){
        return view('Admin.DataMobil.editmobil');     
    }
}
