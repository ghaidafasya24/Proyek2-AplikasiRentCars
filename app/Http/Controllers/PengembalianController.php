<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function datapengembalian()
    {
        return view('Admin.DataPengembalian.datapengembalian');
    }

    public function tambahpengembalianView(){
        return view('Admin.DataPengembalian.tambahpengembalian');
    }

    public function editPengembalianView(){
        return view('Admin.DataPengembalian.editpengembalian');
    }

    public function formPengembalian()
    {
        return view('Customer.formPengembalian');
    }
}
