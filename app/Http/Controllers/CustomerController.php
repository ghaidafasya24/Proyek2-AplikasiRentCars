<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function booking($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('Customer.dataDiri', compact('mobil'));
    }

    public function addDataDiri(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'nama_orang_terdekat' => 'required',
            'email_darurat' => 'required',
            'no_telp_darurat' => 'required',
            'ktp' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat' => 'string'
        ]);

        $image = $request->file('ktp');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img/ktp'), $imageName);

        $customerData = [
            'id_user' => Auth::user()->id_user,
            'ktp' => $imageName,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nama_orang_terdekat' => $request->nama_orang_terdekat,
            'email_darurat' => $request->email_darurat,
            'no_telp_darurat' => $request->no_telp_darurat,
        ];

        // Simpan data ke dalam tabel 'customer'
        Customer::create($customerData);

        return redirect()->route('home')->with('success', 'Data Customer Berhasil Dibuat.');
    }

    public function dataCustomer()
    {
        $customers = Customer::all();
        return view('Admin.DataCustomer.datacustomer', compact('customers'));
    }

    public function profile()
    {
        $user = Auth::user();
        $profile = $user->customer;
        return view('Customer.Profile.profile', compact('profile'));
    }

    public function addProfile(Request $request)
    {
        try {

            $request->validate([
                'email' => 'required',
                'nama_orang_terdekat' => 'required',
                'email_darurat' => 'required',
                'no_telp_darurat' => 'required',
                'ktp' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'alamat' => 'string'
            ]);

            $image = $request->file('ktp');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/ktp'), $imageName);

            $customerData = [
                'id_user' => Auth::user()->id_user,
                'ktp' => $imageName,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'nama_orang_terdekat' => $request->nama_orang_terdekat,
                'email_darurat' => $request->email_darurat,
                'no_telp_darurat' => $request->no_telp_darurat,
            ];

            dd($customerData);
            // Simpan data ke dalam tabel 'customer'
            $test = Customer::create($customerData);
        } catch (\Exception $e) {
            return redirect()->route('profile')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
