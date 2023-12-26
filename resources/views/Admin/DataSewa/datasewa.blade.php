@extends('Admin.Layout.layoutAdmin')
@section('title', 'Data Sewa')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Sewa</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Sewa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID SEWA</th>
                                <th>ID CUSTOMER</th>
                                <th>ID MOBIL</th>
                                <th>ID TRANSAKSI</th>
                                <th>TANGGAL SEWA</th>
                                <th>TANGGAL PENGEMBALIAN</th>
                                <th>WAKTU SEWA</th>
                                <th>WAKTU PENGAMBILAN</th>
                                <th>LOKASI PENGAMBILAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sewas as $sewa)
                                <tr>
                                    <td>{{ $sewa->id_sewa }}</td>
                                    <td>{{ $sewa->id_customer }}</td>
                                    <td>{{ $sewa->id_mobil }}</td>
                                    <td>{{ $sewa->transaksi->id_transaksi }}</td>
                                    <td>{{ $sewa->tanggal_sewa }}</td>
                                    <td>{{ $sewa->tanggal_pengembalian }}</td>
                                    <td>{{ $sewa->waktu_sewa }}</td>
                                    <td>{{ $sewa->waktu_pengembalian }}</td>
                                    <td>{{ $sewa->lokasi_pengambilan }}</td>
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
