@extends('Customer.Layout.layoutCustomer')
@section('title', 'Customer')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Katalog Mobil</h1>
            
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>

              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Pajero Sport</h5>
                  <table>
                    <tr>
                        <td class="p-2">
                            Harga Sewa Perhari 
                        </td>
                        <td class="me-2">:</td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            Tahun
                        </td>
                        <td class="me-2"> : </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            Warna
                        </td>
                        <td class="me-2"> : </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            Kapasitas Penumpang
                        </td>
                        <td class="me-2"> : </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            Stok Mobil
                        </td>
                        <td class="me-2"> : </td>
                        <td>
                        </td>
                    </tr>

                </table>
                <br>
                <button type="button" class="btn btn-primary" onclick="return window.location.href = '{{ route('bookingmobil') }}'">Booking</button>
                {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
            </div>
        </div>
            </div>
          </div>
        <!-- Content Row -->
        <div class="row">

           
    

          
    </div>
@endsection
