@extends('Admin.Layout.layoutAdmin')
@section('title', 'Tambah Mobil')
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
                <h6 class="m-0 font-weight-bold text-primary">Tambah Mobil</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('tambahmobil.post') }}" method="POST" enctype="multipart/form-data">
                    <div class="table-responsive">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Merek Mobil</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Masukkan merek mobil" name="merek_mobil">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Tahun</label>
                            <input type="number" class="form-control" id="exampleFormControlInput2"
                                placeholder="Masukkan tahun mobil" name="tahun">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Warna</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3"
                                placeholder="Masukkan warna mobil" name="warna">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kapasitas Penumpang</label>
                            <select class="form-control" name="kapasitas_penumpang" aria-label="Default select example">
                                <option selected>Jumlah Kapasitas Penumpang</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Mobil</label>
                            <input class="form-control" type="file" id="formFile" name="gambar">
                        </div>
                        <hr>

                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3"
                                placeholder="Masukkan harga sewa" name="harga">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Stok</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3"
                                placeholder="Masukkan stok ketersediaan" name="stok">
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a type="button" class="btn btn-secondary" href="{{ route('datamobil') }}"> Kembali </a>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
