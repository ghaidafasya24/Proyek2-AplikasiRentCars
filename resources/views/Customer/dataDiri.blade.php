<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <h1 class="text-center">Formulir Data Pribadi</h1>
            <hr>

            <!-- content  -->
            <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 10em;">
                <div class="card mb-3 col-ms-4" style="max-width: 1000px;">
                    <br>
                    <form class="row g-3" action="{{ route('add.data.diri') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                    

                        <h4>Data Diri</h4>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" required
                                placeholder="Masukkan nama lengkap" name="nama_customer">
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp" class="form-label">No Telp</label>
                            <input type="text" class="form-control" id="no_telp" required
                                placeholder="Masukkan nomor telepon" name="no_telp">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required
                                placeholder="Masukkan email" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="ktp" class="form-label">Upload KTP</label>
                            <input type="file" class="form-control" id="formFile" name="ktp">
                        </div>
                        <div class="col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                        </div>
                        <hr>
                        <h4>Data Darurat</h4>

                        <div class="col-md-6">
                            <label for="nama_rekan" class="form-label">Nama Rekan Terdekat</label>
                            <input type="text" class="form-control" id="nama_rekan" required
                                placeholder="Masukkan nama lengkap" name="nama_orang_terdekat">
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp_darurat" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telp_darurat" required
                                placeholder="Masukkan nomor telepon" name="no_telp_darurat">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required
                                placeholder="Masukkan email" name="email_darurat">
                            <br>
                            <a href="" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>

                        <hr>

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
