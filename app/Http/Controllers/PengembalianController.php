<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pengembalian;
use App\Models\Sewa;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function datapengembalian()
    {
        $transaksis = Transaksi::with('sewa')->get();
        $sewas = Sewa::all();
        $pengembalians = Pengembalian::with('transaksi','sewa')->get();

        return view('Admin.DataPengembalian.datapengembalian', compact('transaksis', 'sewas','pengembalians'));
    }


    public function tambahpengembalianView()
    {
        return view('Admin.DataPengembalian.tambahpengembalian');
    }


    public function tambahpengembalianPost(Request $request)
{
    $request->validate([
        'pengembalian' => 'required',
        'jumlah' => 'required|numeric|min:1', // Sesuaikan aturan validasi sesuai kebutuhan
    ]);

    // Ambil data terkait pengembalian dan transaksi
    $pengembalian = Pengembalian::findOrFail($request->pengembalian);
    $transaksi = Transaksi::where('id_transaksi', $pengembalian->id_transaksi)->first();

    $mobil = Mobil::findOrFail($transaksi->id_mobil);

    // Tambahkan jumlah ke stok mobil
    $mobil->stok += $request->jumlah;
    $mobil->save();

    // Simpan data pengembalian
    $addPengembalian = [
        'id_transaksi' => $request->pengembalian,
        'jumlah' => $request->jumlah,
    ];

    Pengembalian::create($addPengembalian);

    // Redirect dengan pesan sukses
    return redirect()->route('datapengembalian')->with('success', 'Pengembalian berhasil');
}

    public function editPengembalianView($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('Admin.DataPengembalian.editpengembalian', compact('pengembalian'));
    }

    public function editPengembalian(Request $request, $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);

        $request->validate([
            'id_customer' => 'required|numeric',
            'id_mobil' => 'required|numeric',
            'id_transaksi' => 'required|numeric',
            'tanggal_pengembalian' => 'required|string',
            'waktu_pengembalian' => 'required'
        ]);

        $pengembalian->update([
            'id_customer' => $request->id_customer,
            'id_mobil' => $request->id_mobil,
            'id_transaksi' => $request->id_transaksi,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'waktu_pengembalian' => $request->waktu_pengembalian
        ]);

        return redirect()->route('datapengembalian')->with('success', 'Pengembalian berhasil di ubah');
    }

    public function deletepengembalian($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();
        return redirect()->route('datapengembalian')->with('success', 'Pengembalian Berhasil Dihapus.');
    }

    public function formPengembalian()
    {
        return view('Customer.formPengembalian');
    }
}
