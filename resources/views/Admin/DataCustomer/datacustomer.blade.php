@extends('Admin.Layout.layoutAdmin')
@section('title', 'Data Customer')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Customer</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                                                        For more information about DataTables, please visit the <a target="_blank"
                                                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    
                    <hr>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID CUSTOMER</th>
                                <th>NAMA CUSTOMER</th>
                                <th>NO TELP</th>
                                <th>KTP</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NAMA REKAN TERDEKAT</th>
                                <th>EMAIL DARURAT </th>
                                <th>NO TELP DARURAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($mobils as $mobil) --}}
                                <tr>
                                    <td>1</td>
                                    <td>Ghaida Fasya</td>
                                    <td>081908915320</td>
                                    <td>
                                        {{-- <img src="{{ asset('assets/img/mobil/' . $mobil->gambar) }}"
                                            alt="{{ $mobil->merek_mobil }}" width="50"> --}}
                                    </td>
                                    <td>ghaidafasya5@gmail.com</td>
                                    <td>Bandung Barat</td>
                                    <td>Serli Pariela</td>
                                    <td>serlipariela@gmail.com</td>
                                    <td>0821428489</td>

                                

                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
