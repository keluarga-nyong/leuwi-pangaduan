<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\TiketController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\PenginapanController;
use App\Http\Controllers\Admin\Pemesanan_penginapanController;
use App\Http\Controllers\Admin\Pemesanan_tiketController;
use App\Http\Controllers\Admin\KontenController;
use App\Http\Controllers\Pegawai\PegawaiController;
use App\Http\Controllers\Pegawai\PresentsController;

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

Route::get('/', function () {
    return view('user.home');
});

Route::view('/home','user.home')->name('home');
Route::view('/price','user.price')->name('price');
Route::get('/event',[KontenController::class,'event'])->name('event');
Route::get('/event/{id}/show',[KontenController::class,'showEvent']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/price','user.price')->name('price');
          Route::get('/event',[KontenController::class,'event'])->name('event');
          Route::get('/event/{id}/show',[KontenController::class,'showEvent']);
          Route::view('/login','user.login')->name('login');
          Route::view('/register','user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','user.home')->name('home');

          Route::get('/booking', [BookingController::class,'index']);
          Route::get('/booking/pesan', [BookingController::class, 'pesan'])->name('booking.pesan');
          Route::post('/booking/konfirmasi', [BookingController::class, 'konfirmasi'])->name('booking.konfirmasi');
  
          Route::view('/tiket','user.tiket.create')->name('tiket');
          Route::get('/tiket/pesan', [TiketController::class, 'pesan'])->name('tiket.pesan');
          Route::post('/tiket/konfirmasi', [TiketController::class, 'konfirmasi'])->name('tiket.konfirmasi');

          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::get('/home',[AdminController::class,'dashboard'])->name('home');
        // Route::post('/check',[UserController::class,'check'])->name('check');
        //Konten
        Route::get('/konten', [KontenController::class,'index']);
        Route::post('/konten/create', [KontenController::class,'create'])->name('konten.create');
        Route::get('/konten/{id}/edit',[KontenController::class,'edit']);
        Route::post('/konten/{id}/update',[KontenController::class,'update']);
        Route::get('/konten/{id}/delete',[KontenController::class,'delete']);
        //pelanggan
        Route::get('/pelanggan', [PelangganController::class,'index']);
        //penginapan
        Route::get('/penginapan', [PenginapanController::class,'index']);
        Route::POST('/penginapan/create',[PenginapanController::class,'create'])->name('penginapan.create');
        Route::get('/penginapan/{id}/edit',[PenginapanController::class,'edit']);
        Route::post('/penginapan/{id}/update',[PenginapanController::class,'update']);
        Route::get('/penginapan/{id}/delete',[PenginapanController::class,'delete']);
        //pegawai
        Route::get('/pegawai', [AdminController::class,'index']);
        Route::post('/pegawai/create', [AdminController::class,'create'])->name('pegawai.create');
        Route::get('/pegawai/{id}/edit',[AdminController::class,'edit']);
        Route::post('/pegawai/{id}/update',[AdminController::class,'update']);
        Route::get('/pegawai/{id}/delete',[AdminController::class,'delete']);
        //kehadiran
        Route::get('/kehadiran', [PresentsController::class,'index'])->name('kehadiran.index');
        Route::get('/kehadiran/cari', [PresentsController::class,'search'])->name('kehadiran.search');
        Route::get('/kehadiran/{user}/cari', [PresentsController::class,'cari'])->name('kehadiran.cari');
        Route::get('/kehadiran/excel-users', [PresentsController::class,'excelUsers'])->name('kehadiran.excel-users');
        Route::get('/kehadiran/{user}/excel-user', [PresentsController::class,'excelUser'])->name('kehadiran.excel-user');
        //pemesanan penginapan
        Route::get('/pemesanan_penginapan', [Pemesanan_penginapanController::class,'index']);
        Route::get('/pemesanan_penginapan/{id}/edit',[Pemesanan_penginapanController::class,'edit']);
        Route::post('/pemesanan_penginapan/{id}/update',[Pemesanan_penginapanController::class,'update']);
        //pemesanan tiket
        Route::get('/psntiket', [Pemesanan_tiketController::class,'index']);
        Route::get('/psntiket/{id}/edit',[Pemesanan_tiketController::class,'edit']);
        Route::post('/psntiket/{id}/update',[Pemesanan_tiketController::class,'update']);

        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

Route::prefix('pegawai')->name('pegawai.')->group(function(){

       Route::middleware(['guest:pegawai','PreventBackHistory'])->group(function(){
           Route::view('/login','pegawai.login')->name('login');
           Route::post('/check',[PegawaiController::class,'check'])->name('check');
        });

       Route::middleware(['auth:pegawai','PreventBackHistory'])->group(function(){
            Route::get('/home', [PegawaiController::class,'index'])->name('home');
            
            Route::get('/kehadiran', [PresentsController::class,'index'])->name('kehadiran.index');
            Route::get('/daftar-hadir/cari', [PresentsController::class,'cariDaftarHadir'])->name('daftar-hadir.cari');
            Route::patch('/absen/{kehadiran}', [PresentsController::class,'checkOut'])->name('kehadiran.check-out');
            Route::post('/absen', [PresentsController::class,'checkIn'])->name('kehadiran.check-in');
            
            Route::post('logout',[PegawaiController::class,'logout'])->name('logout');
       });

});
