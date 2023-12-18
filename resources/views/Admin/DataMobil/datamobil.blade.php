@extends('Admin.Layout.layoutAdmin')
@section('title', 'Data Mobil')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Mobil</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a type="button" class="btn btn-success" href="{{ route('tambahmobil') }}"><i class="fa-solid fa-plus"></i> Tambah</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID MOBIL</th>
                            <th>MEREK MOBIL</th>
                            <th>TAHUN</th>
                            <th>WARNA</th>
                            <th>KAPASITAS PENUMPANG</th>
                            <th>FOTO</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Toyota Avanza</td>
                            <td>2023</td>
                            <td>Hitam</td>
                            <td>4</td>
                            <td><img src="" alt=""></td>
                            <td>
                                <a type="button" class="btn btn-warning" href="{{ route('editmobil') }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a type="button" class="btn btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection