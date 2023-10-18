<?php

use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view ('home');
});

Route::get('/about', function () {
    return view ('about');
   
});
Route::get  ('/login', function () {
    return view ('login');
   
});
Route::post  ('/login', function () {
    return view ('login');
   
});
Route::get('/registrasi', [MasyarakatController::class, 'buatakun']) ;
Route::get('/registrasipetugas', [PetugasController::class, 'buatakunpetugas']) ;
Route::get('/table', [PengaduanController::class, 'index']) ;
Route::get('/table_masyarakat', [MasyarakatController::class, 'table']) ;
Route::get('/table_petugas', [PetugasController::class, 'table']) ;

      
Route::get('/home', [PengaduanController::class, 'home']) ;

Route::get('/isi_laporan', [PengaduanController::class, 'isi_laporan']) ;

Route::get('/app', function(){
     return view('layouts.app');
});

Route::post('/isi_laporan', [PengaduanController::class, 'proses_tambah_pengaduan']) ;

Route::get('/table_petugas', [PetugasController::class, 'table']) ;
Route::get('/hapus_pengaduan/{id}', [PengaduanController::class, 'hapus']) ;
Route::get('/detail_pengaduan/{id}', [PengaduanController::class, 'detail']) ;
Route::get('/update_pengaduan/{id}  ', [PengaduanController::class, 'update']) ;
Route::post('/update_pengaduan/{id}', [PengaduanController::class, 'proses_update_pengaduan']) ;
Route::post('/registrasipetugas', [MasyarakatController::class, 'buatakunpetugas']) ;
Route::get("/register", [Authcontroller::class, 'register']);
Route::post('/registrasi', [MasyarakatController::class, 'registrasi']) ;
Route::post('/login', [LoginController::class, 'login']) ;
Route::get('/login', [LoginController::class, 'index']) ;
