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
                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" required
                            placeholder="Masukkan nama lengkap" value="{{ Auth::user()->nama }}">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="no_telp" class="form-label">No Telp</label>
                        <input type="text" class="form-control" id="no_telp" required
                            placeholder="Masukkan nomor telepon"value="{{ Auth::user()->no_telp }}">
                    </div>

                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" class="form-control" id="username" required placeholder="Masukkan username"
                            value="{{ Auth::user()->username }}">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required placeholder="Masukkan password"
                            name="pas   ord" value="*******" disabled>
                    </div>

                </div>
                <form class="row g-3" action="{{ route('add.data.diri') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required placeholder="Masukkan email"
                            name="email" value="{{ $profile->email ?? '' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="nama_orang_terdekat" class="form-label">Nama Orang Terdekat</label>
                        <input type="text" class="form-control" id="nama_orang_terdekat" required
                            placeholder="Masukkan nama orang terdekat" name="nama_orang_terdekat"
                            value="{{ $profile->nama_orang_terdekat ?? '' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="email_darurat" class="form-label">Email Darurat</label>
                        <input type="text" class="form-control" id="email_darurat" required
                            placeholder="Masukkan Email Darurat" name="email_darurat"
                            value="{{ $profile->email_darurat ?? '' }}">
                    </div>
                    <div class="col-md-6">
                        <label for="no_telp_darurat" class="form-label">No Telpon Darurat</label>
                        <input type="number" class="form-control" id="no_telp_darurat" required
                            placeholder="Masukkan Nomor Telpon Darurat" name="no_telp_darurat"
                            value="{{ $profile->no_telp_darurat ?? '' }}">
                    </div>
                    @if ($profile && $profile->ktp)
                        <div class="col-md-6 mt-3">
                            <label for="ktp" class="form-label">KTP</label>
                            <img src="{{ asset('assets/img/ktp/' . $profile->ktp) }}" alt="" width="100">
                        </div>
                    @else
                        <div class="col-md-6">
                            <label for="ktp" class="form-label">Upload KTP</label>
                            <input type="file" class="form-control" id="formFile" name="ktp">
                        </div>
                    @endif

                    <div class="col-md-6">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ $profile->alamat ?? '' }}</textarea>
                    </div>
                    <div class="col-md-6 mt-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>

    </div>












@endsection
