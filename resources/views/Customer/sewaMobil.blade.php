<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Sewa</title>
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
                    <form class="row g-3" action="{{ route('formsewa') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_mobil" value="{{ $mobil->id_mobil }}">
                        <input type="hidden" name="harga" value="{{ $mobil->harga }}">
                        <input type="hidden" name="id_customer" value="{{ $customer->id_customer }}">
                        <div class="col-md-6">
                            <label for="nama_customer" class="form-label">Nama Customer</label>
                            <input type="text" class="form-control" id="nama_customer" disabled
                                 name="nama_customer" value="{{ $customer->nama_customer }}">
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp" class="form-label">No Telpon</label>
                            <input type="text" class="form-control" id="no_telp" disabled
                                 name="no_telp" value="{{ $customer->no_telp }}">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_sewa" class="form-label">Tanggal Pengambilan</label>
                            <input type="date" class="form-control" id="tanggal_sewa" required
                                placeholder="dd/mm/yyyy" name="tanggal_sewa">
                        </div>
                        <div class="col-md-6">
                            <label for="lokasi_pengambilan" class="form-label">Lokasi Pengambilan</label>
                            <input type="text" class="form-control" id="lokasi_pengambilan" required
                                placeholder="Masukkan lokasi pengambilan" name="lokasi_pengambilan">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" required
                                placeholder="dd/mm/yyyy" name="tanggal_pengembalian">
                                <br>
                                <a href="" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Pay</button>
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
