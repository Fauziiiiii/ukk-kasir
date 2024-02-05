<?php

// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\OutletController;
// use App\Http\Controllers\PaketController;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// Route::get('/dashboard', [DashboardController::class, 'index']);

// //route outlet
// Route::get('outlet', [OutletController::class, 'index']);
// Route::get('/outlet/create', [OutletController::class,'create'])->name('outlet.create');
// Route::post('/outlet', [OutletController::class,'store'])->name('outlet.store');

// //Route Paket
// Route::get('/paket', [PaketController::class, 'index']);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;


// Route::middleware(["guest"])->group(function () {
//     Route::get("/", [AuthController::class, "index"])->name("login");
//     Route::post("/", [AuthController::class, "login"])->name("auth.login");
// });

// Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Route::middleware(['AksesRole:admin'])->group(function () {
        Route::get('/outlet', [OutletController::class, 'index'])->name('outlet.index');
        Route::get('/outlet/create', [OutletController::class, 'create']);
        Route::post('/outlet/create', [OutletController::class, 'store']);
        Route::get('/outlet/{id}/edit', [OutletController::class, 'edit']);
        Route::put('/outlet/{id}', [OutletController::class, 'update']);
        Route::delete('/outlet/{id}', [OutletController::class, 'destroy']);

        Route::get('/paket', [PaketController::class, 'index'])->name('paket');
        Route::get('/paket/create', [PaketController::class, 'create']);
        Route::post('/paket/create', [PaketController::class, 'store']);
        Route::get('/paket/{id}/edit', [PaketController::class, 'edit']);
        Route::put('/paket/{id}', [PaketController::class, 'update']);
        Route::delete('/paket/{id}', [PaketController::class, 'destroy']);

        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::get('/user/create', [UserController::class, 'create']);
        Route::post('/user/create', [UserController::class, 'store']);
        Route::get('/user/{id}/edit', [UserController::class, 'edit']);
        Route::put('/user/{id}', [UserController::class, 'update']);
        Route::delete('/user/{id}', [UserController::class, 'destroy']);

        Route::get('/user2', [User2Controller::class, 'index'])->name('user2');
        Route::get('/user2/create', [User2Controller::class, 'create']);
        Route::post('/user2/create', [User2Controller::class, 'store']);
        Route::get('/user2/{id}/edit', [User2Controller::class, 'edit']);
        Route::put('/user2/{id}', [User2Controller::class, 'update']);
        Route::delete('/user2/{id}', [User2Controller::class, 'destroy']);

        Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
        Route::get('/pelanggan/create', [PelangganController::class, 'create']);
        Route::post('/pelanggan/create', [PelangganController::class, 'store']);
        Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit']);
        Route::put('/pelanggan/{id}', [PelangganController::class, 'update']);
        Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy']);

        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk', [ProdukController::class, 'store']);
        Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
        Route::put('/produk/{id}', [ProdukController::class, 'update']);
        Route::delete('/produk/{id}', [ProdukController::class, 'destroy']);

        Route::get('/member', [MemberController::class, 'index'])->name('member');
        Route::get('/member/create', [MemberController::class, 'create']);
        Route::post('/member', [MemberController::class, 'store']);
        Route::get('/member/{id}/edit', [MemberController::class, 'edit']);
        Route::put('/member/{id}', [MemberController::class, 'update']);
        Route::delete('/member/{id}', [MemberController::class, 'destroy']);

        Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
        Route::get('/transaksi/create', [TransaksiController::class, 'create']);
        Route::post('/transaksi', [TransaksiController::class, 'store']);
        Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit']);
        Route::put('/transaksi/{id}', [TransaksiController::class, 'update']);
        Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy']);

        Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
        Route::post('/kasir', [KasirController::class, 'store'])->name('simpan.kasir');
    // });

    Route::get('/logout', [AuthController::class, 'logout']);

    //Outlet Controller

    //End Outlet Controller

// });


