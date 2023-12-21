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
                    <a type="button" class="btn btn-success" href="{{ route('tambahmobil') }}"><i
                            class="fa-solid fa-plus"></i> Tambah</a>
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
                            @foreach ($mobils as $mobil)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mobil->merek_mobil }}</td>
                                    <td>{{ $mobil->tahun }}</td>
                                    <td>{{ $mobil->warna }}</td>
                                    <td>{{ $mobil->kapasitas_penumpang }}</td>
                                    <td>
                                        <img src="{{ asset('assets/img/mobil/' . $mobil->gambar) }}"
                                            alt="{{ $mobil->merek_mobil }}" width="50">
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a class="btn btn-warning" href="{{ route('editmobil', $mobil->id_mobil) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a> |
                                        <form action="{{ route('deletemobil', $mobil->id_mobil) }}" method="POST">
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
