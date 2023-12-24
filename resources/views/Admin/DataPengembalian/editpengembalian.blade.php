@extends('Admin.Layout.layoutAdmin')
@section('title', 'Tambah Pengembalian')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Data Mobil</h1> --}}
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Pengembalian</h6>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="table-responsive">
                        @csrf
                        <div class="mb-3">
                            <label for="id_customer" class="form-label">Id Customer</label>
                            <input type="number" class="form-control" id="id_customer" name="id_customer">
                        </div>
                        <div class="mb-3">
                            <label for="id_mobil" class="form-label">Id Mobil</label>
                            <input type="number" class="form-control" id="id_mobil" name="id_mobil">
                        </div>
                        <div class="mb-3">
                            <label for="id_transaksi" class="form-label">Id Transaksi</label>
                            <input type="number" class="form-control" id="id_transaksi" name="id_transaksi">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu_pengembalian" class="form-label">Waktu Pengembalian</label>
                            <input type="time" class="form-control" id="waktu_pengembalian" name="waktu_pengembalian" required>
                        </div>

                    </div>

                    <button class="btn btn-success" type="submit">Submit</button>
                    <a type="button" class="btn btn-secondary" href="{{ route('datapengembalian') }}"> Kembali </a>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
