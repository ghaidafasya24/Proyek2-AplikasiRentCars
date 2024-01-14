@extends('Admin.Layout.layoutAdmin')

@if (Auth::user()->role == 'admin')
    @section('title', 'Dashboard Admin')
@elseif(Auth::user()->role == 'customer')
    @section('title', 'Customer')
@endif
@section('content')

    @if (Auth::user()->role == 'admin')
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- DATA MOBIL -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Data Mobil</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mobil }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-car"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DATA SEWA -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Data Sewa</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sewa }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- DATA PENGEMBALIAN  --}}
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Data Pengembalian</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pengembalian }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- DATA TRANSAKSI -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Data Transaksi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaksi }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-rotate-left"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DATA TRANAKSI END  -->
        </div>
    @elseif (Auth::user()->role == 'customer')
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Katalog Mobil</h1>

            </div>

            @foreach ($mobils as $mobil)
                <div class="card mb-3" style="max-width: 540px;">
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
                                            @if ($mobil->stok <= 0)
                                                Maaf Mobil Sedang Tidak Tersedia
                                            @else
                                                {{ $mobil->stok }}
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                @if ($mobil->stok <= 0)
                                    <button class='btn btn-secondary disabled'>Tidak Tersedia</button>
                                @else
                                    @if (isset($customerDataExists) && $customerDataExists)
                                        <a href="{{ route('bookingmobil', $mobil->id_mobil) }}"
                                            class="btn btn-primary">Booking</a>
                                    @else
                                        <button class="btn btn-primary" onclick="showNotif()">Booking</button>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif


@endsection

<script>
    function showNotif() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Lengkapi data diri Anda sebelum melakukan pemesanan.',
        });
    }
</script>
