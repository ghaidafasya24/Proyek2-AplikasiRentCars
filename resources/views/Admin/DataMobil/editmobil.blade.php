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
                <h6 class="m-0 font-weight-bold text-primary">Edit Mobil</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Merek Mobil</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Warna</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kapasitas Penumpang</label>
                        <select class="form-control" name="" aria-label="Default select example">
                            <option selected>Jumlah Kapasitas Penumpang</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select> 
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Mobil</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <hr>


                </div>
                <a type="button" class="btn btn-success" href=""> Submit </a>
                <a type="button" class="btn btn-secondary" href="{{ route('datamobil') }}"> Kembali </a>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
