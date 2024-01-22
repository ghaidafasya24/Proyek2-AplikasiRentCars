<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk PDF</title>
</head>

<body>
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
                    <table>
                        <tr>
                            <td class="p-2">Id Customer</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->first()->id_customer }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Id Mobil</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->first()->id_mobil }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Nama Customer</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->first()->nama }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Merek Mobil</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->first()->merek_mobil }}</td>
                        </tr>
                        <tr>
                            <td class="p-2">Tanggal Sewa</td>
                            <td class="p-2"> : </td>
                            <td> {{ date('d-m-Y', strtotime($transaksi->first()->tanggal_sewa)) }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Tanggal Pengembalian</td>
                            <td class="p-2"> : </td>
                            <td> {{ date('d-m-Y', strtotime($transaksi->first()->tanggal_pengembalian)) }} </td>
                        </tr>
                        <tr>
                            <td class="p-2">Durasi Sewa</td>
                            <td class="p-2"> : </td>
                            <td> {{ $transaksi->first()->durasi_sewa }} hari </td>
                        </tr>
                        <tr>
                            <td class="p-2">Total Bayar :</td>
                            <td class="p-2"> : </td>
                            <td> Rp. {{ number_format($transaksi->first()->total_bayar, 2, ',', '.') }}</td>
                        </tr>
                    </table>
                    <p class="text-center"> - TERIMAKASIH - </p>
                    <hr>

                </div>
            </div>
            <br>
        </main>
    </div>
</body>

</html>
