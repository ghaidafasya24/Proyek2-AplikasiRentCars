<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function datapengembalian()
    {
        return view('Admin.DataPengembalian.datapengembalian');
    }

    public function formPengembalian()
    {
        return view('Customer.formPengembalian');
    }
}
