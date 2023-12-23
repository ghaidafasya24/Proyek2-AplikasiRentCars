<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function riwayattransaksi(){
        return view('Admin.RiwayatTransaksi.riwayattransaksi');
    }

    public function transaksiPembayaran(){
        return view('Customer.transaksiPembayaran');
    }
}
