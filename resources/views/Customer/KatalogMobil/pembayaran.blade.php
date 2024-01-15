@extends('Customer.Layout.layoutCustomer')
@section('title', 'Customer')
@section('content')

    <!-- content  -->
    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800">Transaksi Pembayaran</h1>
        <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 2em;">
            <h6 class="">Silahkan transfer pada rekening berikut : 234237349 a.n Mutiara Azzahra</h6>
            <br><hr><br><br>
            
            {{-- <div class="card mb-3 col-ms-4" style="max-width: 1000px;"> --}}
            <form class="row g-3" action="{{ route('transaksi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_mobil" value="{{ $mobil->id_mobil }}">
                <input type="hidden" name="harga" value="{{ $mobil->harga }}">
                <input type="hidden" name="durasi" value="{{ $durasi }}">
                <input type="hidden" name="id_customer" value="{{ $sewa->id_customer }}">
                <input type="hidden" name="id_sewa" value="{{ $sewa->id_sewa }}">
                <div class="col-md-6">
                    <label for="merek_mobil" class="form-label">Mobil Yang Ingin Disewa</label>
                    <input type="text" class="form-control" id="merek_mobil" disabled name="merek_mobil"
                        value="{{ $mobil->merek_mobil }}">
                </div>
                <div class="col-md-6">
                    <label for="no_telp" class="form-label">Durasi Sewa</label>
                    <input type="text" class="form-control" id="no_telp" disabled name="no_telp"
                        value="{{ $durasi }} Hari (Dihitung perhari)">
                </div>
                <div class="col-md-6">
                    <label for="atas_nama" class="form-label">Atas Nama</label>
                    <input type="text" class="form-control" id="atas_nama"
                        placeholder="Masukkan atas nama pada nomor rekening" name="nama_pemegang_kartu">
                </div>

                <div class="col-md-6">
                    <label for="total_bayar" class="form-label">Total Bayar</label>
                    <input type="text" class="form-control" id="total_bayar" disabled name="total_bayar" value="Rp. {{ number_format($total_pembayaran, 2, ',', '.') }}">
                </div>
                <div class="col-md-6">
                    <label for="nomor_kartu" class="form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="nomor_kartu" placeholder="Masukkan nomor kartu rekening" name="nomor_kartu">
                    
                </div>
                <div class="col-md-6">
                    <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="formFile" name="bukti_pembayaran">
                </div>
                <div class="col-md-6">
                    <br>
                    <button type="submit" class="btn btn-primary">Bayar <i class="fa-solid fa-money-check-dollar"></i></button>
                </div>

            </form>

        </div>
    </div>
    </div>


@endsection
