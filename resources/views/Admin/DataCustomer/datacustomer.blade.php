@extends('Admin.Layout.layoutAdmin')
@section('title', 'Data Customer')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Customer</h1>
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
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->user->nama }}</td>
                                    <td>{{ $customer->user->no_telp }}</td>
                                    <td>
                                        <img src="{{ asset('assets/img/ktp/' . $customer->ktp) }}"
                                            alt="{{ $customer->nama_customer }}" width="50">
                                    </td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->alamat }}</td>
                                    <td>{{ $customer->nama_orang_terdekat }}</td>
                                    <td>{{ $customer->email_darurat }}</td>
                                    <td>{{ $customer->no_telp_darurat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
