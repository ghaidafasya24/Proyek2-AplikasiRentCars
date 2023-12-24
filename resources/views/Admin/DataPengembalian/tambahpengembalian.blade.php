@extends('Admin.Layout.layoutAdmin')
@section('title', 'Tambah Pengembalian')
@section('content')

    <div class="container-fluid">

       
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Pengembalian</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('tambahpengembalian.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="table-responsive">
                        <div class="mb-3">
                            <label for="id_customer" class="form-label">Id Customer</label>
                            <input type="number" class="form-control" id="id_customer" placeholder="Masukkan id customer" name="id_customer">
                        </div>
                        <div class="mb-3">
                            <label for="id_mobil" class="form-label">Id Mobil</label>
                            <input type="number" class="form-control" id="id_mobil" placeholder="Masukkan id mobil" name="id_mobil">
                        </div>
                        <div class="mb-3">
                            <label for="id_transaksi" class="form-label">Id Transaksi</label>
                            <input type="number" class="form-control" id="id_transaksi" placeholder="Masukkan id transaksi" name="id_transaksi">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" placeholder="dd/mm/yyyy" name="tanggal_pengembalian" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu_pengembalian" class="form-label">Waktu Pengembalian</label>
                            <input type="time" class="form-control" id="waktu_pengembalian" placeholder="Masukkan waktu pengembalian mobil" name="waktu_pengembalian" required>
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
