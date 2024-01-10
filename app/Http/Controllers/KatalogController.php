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

    // MENAMPILKAN HALAMAN KATALOG MOBIL
    public function tampil(){
        return view('Customer.KatalogMobil.katalogMobil');
    }

    public function detailMobil($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('Customer.detailMobil',compact('mobil'));
    }
}
