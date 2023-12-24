<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function datasewa (){
        return view('Admin.DataSewa.datasewa');
    }

    public function formSewa (Request $request){
        $request->validate([
            'tanggal_sewa' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
            'lokasi_pengambilan' => 'required|string'
        ]);
        $id_mobil = $request->input('id_mobil');


        $sewa = [
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'waktu_pengembalian' => '14:00',
            'lokasi_pengambilan' => $request->lokasi_pengambilan,
            'id_mobil' => $request->id_mobil,
            'id_customer' => $request->id_customer,
        ];

        $sewa = Sewa::create($sewa);
        return view('Customer.transaksiPembayaran',compact('sewa'));
    }
}
