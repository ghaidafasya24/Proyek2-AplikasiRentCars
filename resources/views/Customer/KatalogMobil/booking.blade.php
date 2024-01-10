@extends('Customer.Layout.layoutCustomer')
@section('title', 'Customer')
@section('content')

<!-- content  -->
<div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 5em;">
    {{-- <div class="card mb-3 col-ms-4" style="max-width: 1000px;"> --}}
        <br>
        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_mobil" value="">
            <input type="hidden" name="harga" value="">
            <input type="hidden" name="id_customer" value="">
            <div class="col-md-6">
                <label for="nama_customer" class="form-label">Nama Customer</label>
                <input type="text" class="form-control" id="nama_customer" disabled name="nama_customer"
                    value="">
            </div>
            <div class="col-md-6">
                <label for="no_telp" class="form-label">No Telepon</label>
                <input type="text" class="form-control" id="no_telp" disabled name="no_telp" value="">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" disabled name="email" value="">
            </div>
            <div class="col-md-6">
                <label for="nama_customer" class="form-label">Alamat Customer</label>
                <input type="text" class="form-control" id="nama_customer" disabled name="nama_customer"
                    value="">
            </div>
            <br><hr><hr>
            <div class="col-md-6">
                <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
                <input type="date" class="form-control" id="tanggal_sewa" required placeholder="dd/mm/yyyy"
                    name="tanggal_sewa">
            </div>
            <div class="col-md-6">
                <label for="waktu_sewa" class="form-label">Waktu Sewa</label>
                <input type="time" class="form-control" id="waktu_sewa" required placeholder="Masukkan lokasi sewa"
                name="waktu_sewa">
            </div>
            <div class="col-md-6">
                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                <input type="date" class="form-control" id="tanggal_pengembalian" required placeholder="dd/mm/yyyy"
                name="tanggal_pengembalian">
            </div>
            <div class="col-md-6">
                <label for="waktu_pengembalian" class="form-label">Waktu Pengembalian</label>
                <input type="time" class="form-control" id="waktu_pengembalian" required
                placeholder="Masukkan lokasi pengambilan" name="waktu_pengembalian">
            </div>
            <div class="col-md-6">
                <label for="lokasi_pengambilan" class="form-label">Lokasi Pengambilan</label>
                <input type="text" class="form-control" id="lokasi_pengambilan" required
                    placeholder="Masukkan lokasi pengambilan" name="lokasi_pengambilan">
                    <br>
                    <button type="" class="btn btn-secondary" onclick="return window.location.href = '{{ route('katalogmobil') }}'">Kembali</button>
                        <button type="submit" class="btn btn-primary">Next</button>
                        <br><br>
            </div>
        </form>
    </div>

</div>

@endsection
