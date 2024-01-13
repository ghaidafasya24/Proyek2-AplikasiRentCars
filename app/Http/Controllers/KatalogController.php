<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function views()
    {
        $mobils = Mobil::all();
        return view('Customer.KatalogMobil.katalogMobil', compact('mobils'));
    }


    public function detailMobil($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('Customer.detailMobil',compact('mobil'));
    }
}
