@extends('Admin.Layout.layoutAdmin')
@section('title', 'Edit Mobil')
@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Mobil</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('editmobil.put', $mobil->id_mobil) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Merek Mobil</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan merek mobil" name="merek_mobil" value="{{ $mobil->merek_mobil }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2"
                            placeholder="Masukkan tahun mobil" name="tahun" value="{{ $mobil->tahun }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Warna</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3"
                            placeholder="Masukkan warna mobil" name="warna" value="{{ $mobil->warna }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kapasitas Penumpang</label>
                        <select class="form-control" name="kapasitas_penumpang" aria-label="Default select example">
                            <option selected>Jumlah Kapasitas Penumpang</option>
                            <option value="1" {{ $mobil->kapasitas_penumpang == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $mobil->kapasitas_penumpang == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $mobil->kapasitas_penumpang == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $mobil->kapasitas_penumpang == '4' ? 'selected' : '' }}>4</option>
                            <option value="5" {{ $mobil->kapasitas_penumpang == '5' ? 'selected' : '' }}>5</option>
                            <option value="6" {{ $mobil->kapasitas_penumpang == '6' ? 'selected' : '' }}>6</option>
                            <option value="7" {{ $mobil->kapasitas_penumpang == '7' ? 'selected' : '' }}>7</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Mobil</label>
                        <input class="form-control" type="file" id="formFile" name="gambar">
                        <img src="{{ asset('assets/img/mobil/' . $mobil->gambar) }}" width="50" alt=""
                            height="30" class="mt-2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3"
                            placeholder="Masukkan warna mobil" name="warna" value="{{ $mobil->harga }}">
                    </div>

                    <hr>

                    <button class="btn btn-success" type="submit">Submit</button>
                    <a type="button" class="btn btn-secondary" href="{{ route('datamobil') }}"> Kembali </a>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

@endsection
