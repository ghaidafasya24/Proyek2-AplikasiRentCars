<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riwayattransaksiController extends Controller
{
    public function riwayattransaksi(){
        return view('Admin.RiwayatTransaksi.riwayattransaksi');
    }
}
