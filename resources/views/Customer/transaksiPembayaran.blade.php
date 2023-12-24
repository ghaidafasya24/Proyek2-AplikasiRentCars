<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Pembayaran</title>
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
            <hr>
            <h1 class="text-center">Formulir Penyewaan</h1>
            <hr>

            <!-- content  -->
            <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 10em;">
                <div class="card mb-3 col-ms-4" style="max-width: 1000px;">

                    <br>
                    <form class="row g-3" action="{{ route('transaksi') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h4>Pembayaran</h4>
                        <h6>Silahkan transfer pada rekening berikut : 294xxxxx</h6>
                        <div class="col-md-6">
                            <label for="nama_pemegang_kartu" class="form-label">Nama </label>
                            <input type="text" class="form-control" id="nama_pemegang_kartu"
                                placeholder="Masukkan nama pemegang kartu" name="nama_pemegang_kartu">
                        </div>
                        <div class="col-md-6">
                            <label for="no_rek" class="form-label">Nomor Rekening</label>
                            <input type="text" class="form-control" id="no_rek"
                                placeholder="Masukkan nomor rekening" name="no_rek">
                        </div>
                        <div class="col-md-6">
                            <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="formFile" name="bukti">

                            <br>
                            <a href="" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Booking Now</button>
                            <br><br>
                        </div>
                    </form>
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
