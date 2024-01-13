<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pengembalian;
use App\Models\Sewa;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mobils = Mobil::all();

        $mobil = Mobil::count();
        $sewa = Sewa::count();
        $transaksi = Transaksi::count();
        $pengembalian = Pengembalian::count();

        return view('Admin.dashboard',compact('mobils','mobil','sewa','transaksi','pengembalian'));
    }
}
