@extends('Customer.Layout.layoutCustomer')
@section('title', 'Customer')
@section('content')

<!-- content  -->
<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Transaksi Pembayaran</h1>
    <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 2em;">
        {{-- <div class="card mb-3 col-ms-4" style="max-width: 1000px;"> --}}
            <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_mobil" value="">
                <input type="hidden" name="harga" value="">
                <input type="hidden" name="id_customer" value="">
                <div class="col-md-6">
                    <label for="merek_mobil" class="form-label">Mobil Yang Ingin Disewa</label>
                    <input type="text" class="form-control" id="merek_mobil" disabled name="merek_mobil"
                    value="">
                </div>
                <div class="col-md-6">
                    <label for="no_telp" class="form-label">Durasi Sewa</label>
                    <input type="text" class="form-control" id="no_telp" disabled name="no_telp" value="">
                </div>
                <div class="col-md-6">
                    <label for="nama_customer" class="form-label">Atas Nama</label>
                    <input type="text" class="form-control" id="nama_customer" placeholder="Masukkan atas nama pada nomor rekening">
                </div>
                
                <div class="col-md-6">
                    <label for="total_bayar" class="form-label">Total Bayar</label>
                    <input type="text" class="form-control" id="total_bayar" disabled name="total_bayar"
                    value=""> 
                </div>
                <div class="col-md-6">
                    <label for="nomor_kartu" class="form-label">Nomor Rekening</label>
                    <input type="text" class="form-control" id="nomor_kartu" placeholder="Masukkan nomor kartu rekening">
                    <br>
                        <button type="" class="btn btn-secondary" onclick="return window.location.href = '{{ route('bookingmobil') }}'">Kembali</button>
                            <button type="submit" class="btn btn-primary">Next</button>
                </div>
                <div class="col-md-6">
                    <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="formFile" name="bukti_pembayaran">
                </div>
                
                
             
                {{-- </div> --}}
            </form>
            
        </div>
    </div>
    </div>


@endsection