<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function views()
    {
        $mobils = Mobil::all();
        return view('Customer.katalogMobil', compact('mobils'));
    }

    public function detailMobil(){
        return view('Customer.detailMobil');
    }
}
