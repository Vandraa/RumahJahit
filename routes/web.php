<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     echo 'Hello World';
// });
Route::get('/', [LoginController::class, 'index'])->name('login');

Route::middleware(['guest'])->group(function(){
    Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register_proses', [LoginController::class, 'register_proses'])->name('register_proses');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/landing', [HomeController::class, 'landing'])->name('landing');
    Route::get('/pesan', [HomeController::class, 'pesan'])->name('pesan');
    Route::get('/kemeja', [HomeController::class, 'kemeja'])->name('kemeja');
    Route::get('/celana', [HomeController::class, 'celana'])->name('celana');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/transaksi/{id}', [HomeController::class, 'transaksi'])->name('transaksi');
    Route::post('/transaksistore',[HomeController::class,'transaksistore'])->name('transaksi.store');

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('userAkses:admin');

    Route::get('/user', [HomeController::class, 'index'])->name('index')->middleware('userAkses:admin');
    Route::get('/assets', [HomeController::class, 'assets'])->name('assets')->middleware('userAkses:admin');
    Route::get('/create', [HomeController::class, 'create'])->name('user.create')->middleware('userAkses:admin');
    Route::post('/store', [HomeController::class, 'store'])->name('user.store')->middleware('userAkses:admin');
    
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit')->middleware('userAkses:admin');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update')->middleware('userAkses:admin');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete')->middleware('userAkses:admin');

    Route::get('/produk/index', [ProdukController::class, 'index'])->name('produk.index')->middleware('userAkses:admin');
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit')->middleware('userAkses:admin');
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create')->middleware('userAkses:admin');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store')->middleware('userAkses:admin');
    Route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update')->middleware('userAkses:admin');
    Route::delete('/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk.delete')->middleware('userAkses:admin');

    Route::get('/datatransaksi', [ProdukController::class, 'datatransaksi'])->name('transaksidatatransaksi')->middleware('userAkses:admin');
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/home', function(){
    return redirect('/landing');
});
