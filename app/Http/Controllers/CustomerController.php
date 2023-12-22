<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function booking()
    {
        return view('Customer.dataDiri');
    }

    public function dataCustomer()
    {
        return view('Admin.DataCustomer.datacustomer');
    }
}
