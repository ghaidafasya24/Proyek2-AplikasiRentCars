@extends('Admin.Layout.layoutAdmin')
@section('title', 'Data Pengembalian')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pengembalian</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengembalian</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a type="button" class="btn btn-success" href="{{ route('tambahpengembalian') }}">
                        <i class="fa-solid fa-plus"></i> Tambah</a>
                    <br><br>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID PENGEMBALIAN</th>
                                <th>ID CUSTOMER</th>
                                <th>ID MOBIL</th>
                                <th>ID TRANSAKSI</th>
                                <th>TANGGAL PENGEMBALIAN</th>
                                <th>WAKTU PENGEMBALIAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengembalians as $pengembalian)
                                <tr>
                                    <td>{{ $pengembalian->id_pengembalian }}</td>
                                    <td>{{ $pengembalian->id_customer }}</td>
                                    <td>{{ $pengembalian->id_mobil }}</td>
                                    <td>{{ $pengembalian->id_transaksi }}</td>
                                    <td>{{ $pengembalian->tanggal_pengembalian }}</td>
                                    <td>{{ $pengembalian->waktu_pengembalian }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('editpengembalian', $pengembalian->id_pengembalian) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('deletepengembalian', $pengembalian->id_pengembalian) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <!-- Tombol Delete -->
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin mau hapus?')"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
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
