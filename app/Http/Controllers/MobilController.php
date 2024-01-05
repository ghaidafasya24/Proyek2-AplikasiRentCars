<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    public function datamobil()
    {
        $mobils = Mobil::all();
        return view('Admin.DataMobil.datamobil', compact('mobils'));
    }

    public function viewCreateMobil()
    {
        return view('Admin.DataMobil.tambahmobil');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek_mobil' => 'required|string|max:255',
            'tahun' => 'required|numeric',
            'warna' => 'required|string|max:255',
            'kapasitas_penumpang' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|string|max:255',
        ]);

        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img/mobil'), $imageName);

        $dataMobil = [
            'merek_mobil' => $request->merek_mobil,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'kapasitas_penumpang' => $request->kapasitas_penumpang,
            'gambar' => $imageName,
            'harga' => $request->harga
        ];

        Mobil::create($dataMobil);

        return redirect()->route('datamobil')->with('success', 'Data Mobil Berhasil Ditambahkan.');
    }

    public function viewEditMobil($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('Admin.DataMobil.editmobil', compact('mobil'));
    }

    public function EditMobil(Request $request, $id)
    {
        $mobil = Mobil::findOrFail($id);

        $request->validate([
            'merek_mobil' => 'required|string|max:255',
            'tahun' => 'required|numeric',
            'warna' => 'required|string|max:255',
            'kapasitas_penumpang' => 'required|numeric',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga' => 'required|string|max:255',
        ]);

        // Mengecek apakah ada file gambar baru diunggah
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama
            if ($mobil->gambar) {
                Storage::delete('assets/img/mobil/' . $mobil->gambar);
            }

            // Mengupload gambar baru
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/mobil'), $imageName);

            // Mengupdate data mobil dengan gambar baru
            $mobil->update([
                'gambar' => $imageName,
            ]);
        }

        // Mengupdate data mobil tanpa gambar jika tidak ada gambar baru diunggah
        $mobil->update([
            'merek_mobil' => $request->merek_mobil,
            'tahun' => $request->tahun,
            'warna' => $request->warna,
            'kapasitas_penumpang' => $request->kapasitas_penumpang,
            'harga' => $request->harga,
        ]);
        return redirect()->route('datamobil')->with('success', 'Data mobil berhasil diperbarui!');
    }

    public function deleteMobil($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('datamobil')->with('success', 'Data Mobil Berhasil Dihapus.');
    }
}
