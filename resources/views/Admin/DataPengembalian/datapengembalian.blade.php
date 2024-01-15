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
                    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <i class="fa-solid fa-plus"></i> Tambah</a>
                    </button>
                    {{-- <a type="button" class="btn btn-success" href="{{ route('tambahpengembalian') }}">
                        <i class="fa-solid fa-plus"></i> Tambah</a>
                    <br><br> --}}
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID PENGEMBALIAN</th>
                                <th>ID CUSTOMER</th>
                                <th>ID MOBIL</th>
                                <th>ID TRANSAKSI</th>
                                <th>TANGGAL PENGEMBALIAN</th>
                                <th>WAKTU PENGEMBALIAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengembalians as $pengembalian)
                                <tr>
                                    <td>{{ $pengembalian->id_pengembalian }}</td>
                                    <td>{{ $pengembalian->sewa->id_customer }}</td>
                                    <td>{{ $pengembalian->sewa->id_mobil }}</td>
                                    <td>{{ $pengembalian->id_transaksi }}</td>
                                    <td>{{ $pengembalian->sewa->tanggal_pengembalian }}</td>
                                    <td>{{ $pengembalian->sewa->waktu_pengembalian }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Pengembalian Mobil</h1>
                </div>
                <form action="{{ route('tambahpengembalian.post') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <select name="pengembalian" id="pengembalian" class="form-control mb-3">
                            @foreach ($transaksis as $transaksi)
                                <option value="{{ $transaksi->id_transaksi }}">ID SEWA : {{ $transaksi->sewa->id_sewa }}
                                    ({{ $transaksi->sewa->customer->user->nama }})
                                </option>
                            @endforeach
                        </select>
                        <select name="jumlah" id="jumlah" class="form-control">
                            <option selected disabled>Pilih Jumlah Kembali Mobil</option>
                            <option value="1">Jumlah Kembali : 1</option>
                            <option value="2">Jumlah Kembali : 2</option>
                            <option value="3">Jumlah Kembali : 3</option>
                            <option value="4">Jumlah Kembali : 4</option>
                            <option value="5">Jumlah Kembali : 5</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
