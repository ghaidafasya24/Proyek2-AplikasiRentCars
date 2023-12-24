<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use App\Models\Pengembalian;
use App\Models\Sewa;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function view(){
        $mobil = Mobil::count();
        $sewa = Sewa::count();
        $transaksi = Transaksi::count();
        $pengembalian = Pengembalian::count();


        return view('Admin.dashboard',compact('mobil','sewa','pengembalian','transaksi'));
    }
}
