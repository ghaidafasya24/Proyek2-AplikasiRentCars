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
            <h1 class="text-center">DETAIL MOBIL</h1>
            <hr>

            <!-- content  -->
            <div class="w-25 ms-5 mb-2 text-center">
                <a href="{{ route('Katalog.Views') }}" class="btn btn-secondary ms-5">Kembali</a>   
            </div>
            <div class="row w-100 d-flex justify-content-center align-items-center" style="padding-left: 10em;">
                <div class="card mb-3 col-ms-4" style="max-width: 1000px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/mobil/' . $mobil->gambar) }}" class="img-fluid rounded-start"
                                alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $mobil->merek_mobil }}</h5>

                                <h6 class="card-text"> Harga Sewa Perhari :</h6>
                                <p> Rp. {{ number_format($mobil->harga, 0, ',', '.') }}</p>

                                <h6 class="card-text"> Tahun :</h6>
                                <p> {{ $mobil->tahun }} </p>

                                <h6 class="card-text"> Warna :</h6>
                                <p> {{ $mobil->warna }} </p>

                                <h6 class="card-text"> Kapasitas Penumpang :</h6>
                                <p> {{ $mobil->kapasitas_penumpang }} </p>


                                <a href="{{ route('booking') }}" class="btn btn-primary">Booking</a>
                            </div>
                        </div>
                    </div>
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
