@extends('Customer.Layout.layoutCustomer')
@section('title', 'Customer')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Katalog Mobil</h1>

        </div>

        @foreach ($mobils as $mobil)
            <div class="card mb-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/mobil/' . $mobil->gambar) }}" class="img-fluid rounded-start"
                            alt="...">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mobil->merek_mobil }}</h5>
                            <table>
                                <tr>
                                    <td class="p-2">
                                        Harga Sewa Perhari
                                    </td>
                                    <td class="me-2">:</td>
                                    <td>
                                        Rp. {{ number_format($mobil->harga, 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                        Tahun
                                    </td>
                                    <td class="me-2"> : </td>
                                    <td>
                                        {{ $mobil->tahun }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                        Warna
                                    </td>
                                    <td class="me-2"> : </td>
                                    <td>
                                        {{ $mobil->warna }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                        Kapasitas Penumpang
                                    </td>
                                    <td class="me-2"> : </td>
                                    <td>
                                        {{ $mobil->kapasitas_penumpang }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                        Stok Mobil
                                    </td>
                                    <td class="me-2"> : </td>
                                    <td>
                                        {{ $mobil->stok }}
                                    </td>
                                </tr>

                            </table>
                            <br>
                            <a href="" class="btn btn-primary">Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
