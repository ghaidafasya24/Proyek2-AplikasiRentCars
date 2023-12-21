<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function views(){
        $mobils = Mobil::all();
        return view('katalogMobil',compact('mobils'));
    }
}
