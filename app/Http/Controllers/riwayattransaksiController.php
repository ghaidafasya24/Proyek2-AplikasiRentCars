<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    public function riwayattransaksi(){
        return view('Admin.RiwayatTransaksi.riwayattransaksi');
    }
}
