<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use App\Models\Sewa;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    public function bookingTampil($id)
    {
        $mobil = Mobil::findOrFail($id);
        $user = Auth::user();
        
        $customer = $user->customer;
        return view('Customer.KatalogMobil.booking', compact('mobil','customer'));
    }

    public function datasewa()
    {
        $sewas = Sewa::all();
        return view('Admin.DataSewa.datasewa', compact('sewas'));
    }

    public function formSewa(Request $request)
    {
        $request->validate([
            'tanggal_sewa' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
            'waktu_sewa' => 'required|string',
            'waktu_pengembalian' => 'required|string',
            'lokasi_pengambilan' => 'required|string',
            'jumlah' => 'required|numeric'
        ]);
        $id_mobil = $request->id_mobil;
        $id_customer = $request->id_customer;
        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $stok = $request->stok;


        $sewa = [
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'waktu_sewa' => $request->waktu_sewa,
            'waktu_pengembalian' => $request->waktu_pengembalian,
            'lokasi_pengambilan' => $request->lokasi_pengambilan,
            'id_mobil' => $request->id_mobil,
            'id_customer' => $request->id_customer,
            'stok' => $request->jumlah
        ];

        $tanggal_sewa = $request->input('tanggal_sewa');
        $tanggal_pengembalian = $request->input('tanggal_pengembalian');
        

        $carbonTanggalPengambilan = Carbon::parse($tanggal_sewa);
        $carbonTanggalPengembalian = Carbon::parse($tanggal_pengembalian);

        $durasi = $carbonTanggalPengambilan->diffInDays($carbonTanggalPengembalian) + 1;

        $total_pembayaran = $durasi * $harga;

        $sewa = Sewa::create($sewa);
        $mobil = Mobil::findOrFail($id_mobil);

        $stokBaru = $stok - $jumlah;

        $cars = Mobil::find($id_mobil);

        $cars->update(['stok'=>$stokBaru]);

        
        // dd($sewa);
        return view('Customer.KatalogMobil.pembayaran', compact('sewa', 'mobil', 'total_pembayaran','durasi'));
    }
}
