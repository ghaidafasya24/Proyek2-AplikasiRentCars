<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function riwayattransaksi()
    {
        $transaksis = Transaksi::all();
        return view('Admin.RiwayatTransaksi.riwayattransaksi', compact('transaksis'));
    }

    public function pembayaranTampil(){
        return view('Customer.KatalogMobil.pembayaran');
    }

    public function struk(){
        return view('Customer.KatalogMobil.strukTransaksi');
    }

    public function transaksi(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_pemegang_kartu' => 'required|string',
            'nomor_kartu' => 'required|numeric',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $id_mobil = $request->id_mobil;
        $id_sewa = $request->id_sewa;
        $id_customer = $request->id_customer;
        $harga = $request->harga;

        $durasi = $request->durasi;


        $image = $request->file('bukti_pembayaran');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img/bukti_pembayaran'), $imageName);


        $total_pembayaran = $durasi * $harga;

        $transaksiAdd = [
            'durasi_sewa' => $durasi,
            'nama_pemegang_kartu' => $request->nama_pemegang_kartu,
            'nomor_kartu' => $request->nomor_kartu,
            'bukti_pembayaran' => $imageName,
            'total_bayar' => $total_pembayaran,
            'id_customer' => $id_customer,
            'id_sewa' => $id_sewa,
            'id_mobil' => $id_mobil,
        ];

        // dd($transaksiAdd);

        $transaksi = Transaksi::create($transaksiAdd);
        // dd($transaksi);
        return view('Customer.KatalogMobil.strukTransaksi',compact('transaksi'))->with('success','Pembayaran Berhasil!!');
    }
}
