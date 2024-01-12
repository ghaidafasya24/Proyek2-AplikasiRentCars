@extends('Customer.Layout.layoutCustomer')
@section('title', 'Customer')
@section('content')

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
            </div>

                <div class="card-body" style="max-width: 1000px;">
                    <br>
                    <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_mobil" value="">
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" required
                                placeholder="Masukkan nama lengkap" name="nama_customer" value="{{ Auth::user()->nama }}">
                        </div>
                        <br>
                        <div class="col-md-6">
                            <label for="no_telp" class="form-label">No Telp</label>
                            <input type="text" class="form-control" id="no_telp" required
                                placeholder="Masukkan nomor telepon" name="no_telp">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required
                                placeholder="Masukkan email" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control" id="username" required
                                placeholder="Masukkan usernam\" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required
                                placeholder="Masukkan password" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="ktp" class="form-label">Upload KTP</label>
                            <input type="file" class="form-control" id="formFile" name="ktp">
                        </div>
                        <div class="col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        {{--                         
                            <br><br><hr>
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama Rekan Terdekat</label>
                                <input type="text" class="form-control" id="nama" required
                                placeholder="Masukkan nama lengkap" name="nama_orang_terdekat">
                            </div>
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Email Rekan Terdekat</label>
                                <input type="text" class="form-control" id="nama" required
                                placeholder="Masukkan rekan terdekat" name="nama_orang_terdekat">
                            </div> --}}
                        </form>
                        <br>
                        <button type="button" class="btn btn-success">Perbarui</button>
                    
                </div>
                <br>

            
        </div>
    </div>

    </div>












@endsection
