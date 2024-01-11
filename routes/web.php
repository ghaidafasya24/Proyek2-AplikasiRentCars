<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\datamobilController;
use App\Http\Controllers\datapengembalianController;
use App\Http\Controllers\datasewaController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\LoginController as ControllersLoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\riwayattransaksiController;
use App\Http\Controllers\RiwayatTransaksiController as ControllersRiwayatTransaksiController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
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

Route::get('/', function () {
    return view('welcome');
});




// Login 
Route::middleware('guest')->group(function () {
    // Landing page => Login
    Route::get('/SignIn', [LoginController::class, 'signin'])->name('Signin');
    Route::post('/login', [LoginController::class, 'login'])->name('Login');


    // ROLE ADMIN
    Route::get('/DashboardAdmin', [DashboardAdminController::class, 'view'])->name('dashboard');
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

    
    // MENAMPILKAN HALAMAN REGISTER
    Route::get('/Register', [RegisterController::class, 'view'])->name('register');

    // ROLE CUSTOMER
    Route::get('/Katalogmobil', [KatalogController::class, 'tampil'])->name('katalogmobil');
    Route::get('/BookingMobil', [SewaController::class, 'bookingTampil'])->name('bookingmobil');
    Route::get('/TransaksiPembayaran', [TransaksiController::class, 'pembayaranTampil'])->name('formpembayaran');
    Route::get('/Struk', [TransaksiController::class, 'struk'])->name('struktransaksi');
    Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
    Route::get('/ProfileCustomer', [CustomerController::class, 'profile'])->name('profile');


});


// Customer 
// Route::get('/step1',[customerController::class,'step1'])->name('step1');
