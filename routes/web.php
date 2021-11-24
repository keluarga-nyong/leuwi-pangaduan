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
use App\Http\Controllers\Doctor\DoctorController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/price','user.price')->name('price');
          Route::view('/event','user.event')->name('event');
          Route::view('/login','user.login')->name('login');
          Route::view('/register','user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','user.home')->name('home');
          Route::view('/price','user.price')->name('price');
          Route::view('/event','user.event')->name('event');
          
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
        //pelanggan
        Route::get('/pelanggan', [PelangganController::class,'index']);
        //penginapan
        Route::get('/penginapan', [PenginapanController::class,'index']);
        Route::POST('/penginapan/create',[PenginapanController::class,'create'])->name('penginapan.create');
        //pegawai
        Route::get('/pegawai', [AdminController::class,'index']);
        Route::post('/pegawai/create', [AdminController::class,'create'])->name('pegawai.create');
        //pemesanan penginapan
        Route::get('/pemesanan_penginapan', 'App\Http\Controllers\Admin\Pemesanan_penginapanController@index');
        //pemesanan tiket
        Route::get('/psntiket', [Pemesanan_tiketController::class,'index']);
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

Route::prefix('doctor')->name('doctor.')->group(function(){

       Route::middleware(['guest:doctor','PreventBackHistory'])->group(function(){
            Route::view('/login','dashboard.doctor.login')->name('login');
            Route::view('/register','dashboard.doctor.register')->name('register');
            Route::post('/create',[DoctorController::class,'create'])->name('create');
            Route::post('/check',[DoctorController::class,'check'])->name('check');
       });

       Route::middleware(['auth:doctor','PreventBackHistory'])->group(function(){
            Route::view('/home','dashboard.doctor.home')->name('home');
            Route::post('logout',[DoctorController::class,'logout'])->name('logout');
       });

});
