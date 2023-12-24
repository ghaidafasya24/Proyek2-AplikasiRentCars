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

    public function transaksi(Request $request)
    {
        $request->validate([
            'nama_pemegang_kartu' => 'required|string',
            'nomor_kartu' => 'required|numeric',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $id_mobil = $request->input('id_mobil');
        $id_sewa = $request->input('id_sewa');
        $id_customer = $request->input('id_customer');

        $image = $request->file('bukti_pembayaran');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img/bukti_pembayaran'), $imageName);

        $tanggal_sewa = $request->input('tanggal_sewa');
        $tanggal_pengembalian = $request->input('tanggal_pengembalian');
        $harga = $request->harga;

        $carbonTanggalPengambilan = Carbon::parse($tanggal_sewa);
        $carbonTanggalPengembalian = Carbon::parse($tanggal_pengembalian);

        $durasi = $carbonTanggalPengambilan->diffInDays($carbonTanggalPengembalian) + 1;

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

        $transaksi = Transaksi::create($transaksiAdd);

        return view('Customer.struk',compact('transaksi'))->with('success','Pembayaran Berhasil!!');
    }
}
