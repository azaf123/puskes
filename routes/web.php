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
Route::get('/print',[PrintController::class,'index']);
Route::get('/print/generatepdf',[PrintController::class,'generatepdf']);

Route::get('/antrean/{id}', [ReservationController::class, 'antreanToPoli']);
Route::get('/treatment/{id}', [PatientController::class, 'getDataPatient']);
Route::get('/pasien-treatment/{id}', [ReservationController::class, 'treatmentToPasien']);
Route::get('/pasien-reservasi/{id}', [FrontController::class, 'pasienReservasi']);
Route::get('/', [FrontController::class, 'index']);
Route::get('/pendaftaran', [FrontController::class, 'pendaftaran']);
Route::get('/pendaftaran-pasien-baru/create', [FrontController::class, 'pendaftaranPasienBaru']);
Route::post('/pendaftaran-pasien-baru', [FrontController::class, 'storependaftaranPasienBaru']);
Route::get('/reservasi/create', [FrontController::class, 'reservasi']);
Route::get('/reservasi-lama/create', [FrontController::class, 'reservasiLama']);
Route::post('/reservasi', [FrontController::class, 'reservasiStore']);
Route::post('/reservasi-lama', [FrontController::class, 'reservasiStoreLama']);

Route::get('/artikel', [FrontController::class, 'article']);
Route::get('/galery', [FrontController::class, 'galery']);

Route::get('/pendaftaran-pasien-lama/create', [FrontController::class, 'pendaftaranPasienLama']);
Route::post('/pendaftaran-pasien-lama', [FrontController::class, 'storependaftaranPasienLama']);

Route::prefix('master-data')->group(function () {
Route::resource('pasien', PatientController::class);
Route::get('pasienbaru/', [PatientController::class, 'pasienbaru']);
Route::get('pasienbaru/create', [PatientController::class, 'createPasienBaru']);
Route::get('pasienbaru/createReservation', [PatientController::class, 'nextpasienbaru']);
Route::post('pasienbaru/', [PatientController::class, 'storePasienBaru']);
Route::post('pasienbaruReservation/', [PatientController::class, 'storenextpasienbaru']);
Route::delete('pasienbaru/{pasienbaru}', [PatientController::class, 'destroyPasienBaru']);


Route::resource('category', CategoryController::class);

Route::resource('treatment', TreatmentController::class);

Route::resource('antrean', AntreanController::class);

Route::resource('article', ArticleController::class);

Route::resource('doctor', DoctorController::class);
Route::resource('reservation', ReservationController::class);
Route::resource('galery', GaleryController::class);
Route::resource('header', HeaderController::class);
Route::resource('layanan', LayananController::class);

});
