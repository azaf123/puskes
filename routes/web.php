<?php

use Illuminate\Support\Facades\Route;
// controller
use App\Http\Controllers\PatientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\AntreanController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// frontend index
Route::get('/', [FrontController::class, 'index']);
// page
Route::get('/artikel', [FrontController::class, 'article']);
Route::get('/galery', [FrontController::class, 'galery']);
Route::get('/profil', [FrontController::class, 'profil']);
// frontend  proses
// pendaftaran pilih
Route::get('/pendaftaran', [FrontController::class, 'pendaftaran']);

// pendaftaran baru
Route::get('/pendaftaran-pasien-baru/create', [FrontController::class, 'pendaftaranPasienBaru']);
Route::post('/pendaftaran-pasien-baru', [FrontController::class, 'storependaftaranPasienBaru']);
// pendaftaran lama
Route::get('/pendaftaran-pasien-lama/create', [FrontController::class, 'pendaftaranPasienLama']);
Route::post('/pendaftaran-pasien-lama', [FrontController::class, 'storependaftaranPasienLama']);
// pendaftaran reservasi baru
Route::get('/reservasi/create', [FrontController::class, 'reservasi']);
Route::post('/reservasi', [FrontController::class, 'reservasiStore']);
// pendaftaran reservasi lama
Route::get('/reservasi-lama/create', [FrontController::class, 'reservasiLama']);
Route::post('/reservasi-lama', [FrontController::class, 'reservasiStoreLama']);
// json otomatis
Route::get('/antrean/{id}', [ReservationController::class, 'antreanToPoli']);
// Route::get('/treatment/{id}', [PatientController::class, 'getDataPatient']);
Route::get('/pasien-treatment/{id}', [ReservationController::class, 'treatmentToPasien']);
Route::get('/pasien-reservasi/{id}', [FrontController::class, 'pasienReservasi']);



// admin
Route::prefix('master-data')->group(function () {
// pasien lama
Route::resource('patient', PatientController::class);
// pasien baru
Route::get('pasienbaru/', [PatientController::class, 'pasienbaru']);
Route::get('pasienbaru/create', [PatientController::class, 'createPasienBaru']);
Route::post('pasienbaru/', [PatientController::class, 'storePasienBaru']);

// category
Route::resource('category', CategoryController::class);
// antrean
Route::resource('antrean', AntreanController::class);
// article
Route::resource('article', ArticleController::class);
// doctor
Route::resource('doctor', DoctorController::class);
// reservation
// reservation lama
Route::resource('reservation', ReservationController::class);
// reservation baru
Route::get('/reservation-baru/create' , [ReservationController::class, 'reservationBaru']);
Route::post('/reservation-baru' , [ReservationController::class, 'storeBaru']);
// galeriy
Route::resource('galery', GaleryController::class);
// header
Route::resource('header', HeaderController::class);
// layanan
Route::resource('layanan', LayananController::class);


// laporan
Route::get('report/', [ReportController::class, 'index']);
Route::get('cetakpertanggal/{tglawal}/{tglakhir}', [ReportController::class, 'cetakPertanggal']);
Route::get('print-identitas', [PrintController::class, 'print']);
});

