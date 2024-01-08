<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../assets/css/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>

    <div id="layoutSidenav_content">
        <main>
            <br>

            <!-- content  -->
            <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 1em;">
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
                                    {{ $transaksi->id }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Id Customer
                                </td>
                                <td class="me-2"> : </td>
                                <td>
                                    {{ $transaksi->id_customer }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Id Mobil
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    {{ $transaksi->id_mobil }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Nama Customer
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    {{ $transaksi->sewa->customer->nama_customer }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Merek Mobil
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    {{ $transaksi->sewa->mobil->merek_mobil }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Tanggal Sewa
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    {{date('d-m-Y', strtotime($transaksi->sewa->tanggal_sewa))  }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Tanggal Pengembalian
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    {{date('d-m-Y', strtotime($transaksi->sewa->tanggal_pengembalian))  }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Durasi Sewa
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    {{ $transaksi->durasi_sewa }}
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2">
                                    Total Bayar
                                </td>
                                <td class="me-2">:</td>
                                <td>
                                    Rp. {{ number_format($transaksi->total_bayar, 0, ',', '.') }}
                                </td>
                            </tr>
                        </table>
                    </h6>
                    <p class="text-center"> - TERIMAKASIH - </p>

                </div>

            </div>
        </main>
    </div>
    <!-- content end  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
