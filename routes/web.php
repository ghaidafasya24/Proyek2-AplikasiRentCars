<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (){
});
Route::get('/SignIn', [loginController::class, 'signin'])->name('Signin');


// Login 
Route::middleware('auth')->group(function () {
    // Landing page => Login


    // ROLE ADMIN
    // Data Mobil
    Route::get('/DataMobil', [MobilController::class, 'datamobil'])->name('datamobil');
    Route::get('/TambahMobil', [MobilController::class, 'viewCreateMobil'])->name('tambahmobil');
    Route::post('/TambahMobilPost', [MobilController::class, 'store'])->name('tambahmobil.post');
    Route::get('/EditMobil/{id}', [MobilController::class, 'viewEditMobil'])->name('editmobil');
    Route::put('/EditMobilPut/{id}', [MobilController::class, 'EditMobil'])->name('editmobil.put');
    Route::delete('/MobilDestroy/{id}', [MobilController::class, 'deleteMobil'])->name('deletemobil');
    // Data Customer
    Route::get('/DataCustomer', [CustomerController::class, 'dataCustomer'])->name('datacustomer');
    // Data Sewa 
    Route::get('/DataSewa', [SewaController::class, 'datasewa'])->name('datasewa');
    // Data Pengembalian 
    Route::get('/DataPengembalian', [PengembalianController::class, 'datapengembalian'])->name('datapengembalian');
    Route::get('/TambahPengembalian', [PengembalianController::class, 'tambahpengembalianView'])->name('tambahpengembalian');
    Route::post('/TambahPengembalianPost', [PengembalianController::class, 'tambahpengembalianPost'])->name('tambahpengembalian.post');
    Route::get('/EditPengembalian/{id}', [PengembalianController::class, 'editpengembalianView'])->name('editpengembalian');
    Route::put('/EditPengembalianPut/{id}', [PengembalianController::class, 'editpengembalian'])->name('editpengembalian.put');
    Route::delete('/PengembalianDestroy/{id}', [PengembalianController::class, 'deletepengembalian'])->name('deletepengembalian');
    Route::get('/FormPengembalianMobil', [PengembalianController::class, 'formPengembalian'])->name('formPengembalian');

    // Data Riwayat Transaksi 
    Route::get('/RiwayatTransaksi', [TransaksiController::class, 'riwayattransaksi'])->name('riwayattransaksi');

    // ROLE CUSTOMER
    // Katalog mobil => daftar mobil
    Route::get('/KatalogMobil', [KatalogController::class, 'views'])->name('Katalog.Views');
    Route::get('/katalogDetail/{id}', [KatalogController::class, 'detailMobil'])->name('detailMobil');
    Route::get('/dataDiri/{id}', [CustomerController::class, 'booking'])->name('datadiri');
    Route::post('/AddDataDiri', [CustomerController::class, 'addDataDiri'])->name('add.data.diri');
    Route::post('/FormSewa', [SewaController::class, 'formSewa'])->name('formsewa');
    Route::get('/FormPembayaran', [TransaksiController::class, 'transaksiPembayaran'])->name('transaksipembayaran');
    // 
    Route::post('/Transaksi', [TransaksiController::class, 'transaksi'])->name('transaksi');
    // Route::get('/StrukTransaksi', [CustomerController::class, 'struktransaksi'])->name('struktransaksi');


    // ROLE CUSTOMER
    Route::get('/Katalogmobil', [KatalogController::class, 'tampil'])->name('katalogmobil');
    Route::get('/BookingMobil/{id}', [SewaController::class, 'bookingTampil'])->name('bookingmobil');
    Route::get('/TransaksiPembayaran', [TransaksiController::class, 'pembayaranTampil'])->name('formpembayaran');
    Route::get('/Struk', [TransaksiController::class, 'struk'])->name('struktransaksi');
    Route::get('/ProfileCustomer', [CustomerController::class, 'profile'])->name('profile');

    // routes/web.php

    Route::get('/logout', [loginController::class,'logout'])->name('logout');
});


// Customer 
// Route::get('/step1',[customerController::class,'step1'])->name('step1');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
