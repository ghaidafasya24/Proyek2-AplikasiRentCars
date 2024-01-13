@extends('Customer.Layout.layoutCustomer')
@section('title', 'Customer')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="card text-center">

                <div class="card-body">
                    <div class="card-header">
                        <h4>Rent-Cars</h4>
                        Jalan Sari Jadi No. 4 | Nomor Telp 081908915320
                    </div>
                    <br>
                    <h5 class="card-title text-left">Struk Pembayaran</h5>
                    <hr>

                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                    <table>
                        <tr>
                            <td class="">Id Transaksi</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->id }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Id Customer</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->id_customer }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Id Mobil</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->id_mobil }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Nama Customer</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->sewa->customer->user->nama}} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Merek Mobil</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->sewa->mobil->merek_mobil }}</td>
                        </tr>
                        <tr>
                            <td class="p-2">Tanggal Sewa</td>
                            <td class="p-2"> : </td>
                            <td> {{date('d-m-Y', strtotime($transaksi->sewa->tanggal_sewa))  }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Tanggal Pengembalian</td>
                            <td class="p-2"> : </td>
                            <td> {{date('d-m-Y', strtotime($transaksi->sewa->tanggal_pengembalian))  }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Durasi Sewa</td>
                            <td class="p-2"> : </td>
                            <td>  {{ $transaksi->durasi_sewa }} hari </td>
                        </tr>
                        <tr>
                            <td class="p-2">Total Bayar :</td>
                            <td class="p-2"> : </td>
                            <td> Rp. {{ number_format($transaksi->total_bayar, 2, ',', '.') }}</td>
                        </tr>
                    </table>
                    <p class="text-center"> - TERIMAKASIH - </p>
                    <hr>
                    {{-- <a href="#" class="btn btn-secondary">Kembali ke halaman utama</a> --}}
                    <a href="#" class="btn btn-success">Download pdf</a>
                </div>
                {{-- <div class="card-footer text-muted">
                    2 days ago
                </div> --}}
            </div>
            <br>
            <!-- content  -->
            {{-- <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 1em;">
                <div class="card mb-3 col-ms-4" style="max-width: 400px;">
                    <h1 class="text-center">Rent-Cars</h1>
                    <p class="text-center">Jalan Sari Jadi No. 4 | Nomor Telp 081908915320</p>
                    <hr>
                    <h4>Struk Pembayaran</h4>
                    <h6>
                        <br>
                        <table>
                            <tr>
                                <td class="p-2">
                                    id Transaksi
                                </td>
                                <td class="me-2">:</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Id Customer
                                </td>
                                <td class="me-2"> : </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Id Mobil
                                </td>
                                <td class="me-2">:</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Nama Customer
                                </td>
                                <td class="me-2">:</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Merek Mobil
                                </td>
                                <td class="me-2">:</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Tanggal Sewa
                                </td>
                                <td class="me-2">:</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Tanggal Pengembalian
                                </td>
                                <td class="me-2">:</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Durasi Sewa
                                </td>
                                <td class="me-2">:</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Total Bayar
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    Rp.
                                </td>
                            </tr>
                        </table>
                    </h6>
                    <p class="text-center"> - TERIMAKASIH - </p>

                </div>

            </div> --}}
        </main>
    </div>
    <!-- content end  -->

@endsection
