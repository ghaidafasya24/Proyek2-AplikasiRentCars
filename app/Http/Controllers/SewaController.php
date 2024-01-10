<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Sewa;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class SewaController extends Controller
{


    public function bookingTampil(){
        return view('Customer.KatalogMobil.booking');
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
            'lokasi_pengambilan' => 'required|string'
        ]);
        $id_mobil = $request->input('id_mobil');
        $id_customer = $request->input('id_customer');
        $harga = $request->input('harga');

        $sewa = [
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'waktu_sewa' => $request->waktu_sewa,
            'waktu_pengembalian' => $request->waktu_pengembalian,
            'lokasi_pengambilan' => $request->lokasi_pengambilan,
            'id_mobil' => $request->id_mobil,
            'id_customer' => $request->id_customer,
        ];

        $tanggal_sewa = $request->input('tanggal_sewa');
        $tanggal_pengembalian = $request->input('tanggal_pengembalian');
        $harga = $request->harga;

        $carbonTanggalPengambilan = Carbon::parse($tanggal_sewa);
        $carbonTanggalPengembalian = Carbon::parse($tanggal_pengembalian);

        $durasi = $carbonTanggalPengambilan->diffInDays($carbonTanggalPengembalian) + 1;

        $total_pembayaran = $durasi * $harga;

        $sewa = Sewa::create($sewa);
        $mobil = Mobil::findOrFail($id_mobil);
        return view('Customer.transaksiPembayaran', compact('sewa', 'mobil','total_pembayaran'));
    }
}
