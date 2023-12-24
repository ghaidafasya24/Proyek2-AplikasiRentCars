<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function datapengembalian()
    {
        $pengembalians = Pengembalian::all();
        return view('Admin.DataPengembalian.datapengembalian', compact('pengembalians'));
    }

    public function tambahpengembalianView()
    {
        return view('Admin.DataPengembalian.tambahpengembalian');
    }


    public function tambahpengembalianPost(Request $request)
    {
        $request->validate([
            'id_customer' => 'required|numeric',
            'id_mobil' => 'required|numeric',
            'id_transaksi' => 'required|numeric',
            'tanggal_pengembalian' => 'required|string',
            'waktu_pengembalian' => 'required'
        ]);

        $addPengembalian = [
            'id_customer' => $request->id_customer,
            'id_mobil' => $request->id_mobil,
            'id_transaksi' => $request->id_transaksi,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'waktu_pengembalian' => $request->waktu_pengembalian,
        ];

        Pengembalian::create($addPengembalian);

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
