<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function datamobil (){
        return view('Admin.DataMobil.datamobil');
    }

    public function createMobil (){
        return view('Admin.DataMobil.tambahmobil');     
    }
   
    public function store(Request $request){
        // Mobil::create([
        //     'merek_mobil' => $request->merek_mobil
        //     'tahun' => $request->tahun
        //     'warna' => $request->warna
        //     'kapasitas_penumpang' => $request->kapasitas_penumpang
        //     'gambar' => $request->gambar
        // ]);

        // return redirect('')->with('success','Data Berhasil Ditambahkan');
    }
    
    public function editMobil (){
        return view('Admin.DataMobil.editmobil');     
    }
}
