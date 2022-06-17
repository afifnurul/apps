<?php

use App\Http\Controllers\Admin\AdminGaleriController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\User\ProfilUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// route user ataupun guest
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', function(){
    return view('home');
});

Route::get('detail/{id}', [HomeController::class, 'detail'])->name('detail');

// Route laravel ui untuk handle authentikasi user
Auth::routes();

// route untuk user yang sudah login
Route::group(['middleware' => ['auth']], function(){
    Route::get('/profil/{id}', [ProfilUserController::class, 'index'])->name('profil');
    Route::get('/pesan-sekarang/{id}', [TransaksiController::class, 'index'])->name('pesan-sekarang');
    Route::post('/pesan-sekarang', [TransaksiController::class, 'simpanSewa'])->name('user.simpanSewa');
    Route::post('/tambah-produk', [AdminProdukController::class, 'storeProduk'])
            ->name('admin.produk.simpanProduk');
});

// Route views admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/', [AdminHomeController::class, 'index'])
        ->name('admin.home');
    Route::get('/profile/{id}', [AdminHomeController::class, 'editProfil'])->name('admin.profile');
    Route::get('/pesanan', function(){
        return view('admin.pesanan');
    })->name('admin.pesanan');
    Route::post('/editProfile', function(){
        return view('admin.profile');
    })->name('admin.editProfile');
    Route::get('/laporan', function(){
        return view('admin.laporan.index');
    })->name('admin.laporan');

    // Route views galeri
    Route::group(['prefix' => 'galeri'], function(){
        Route::get('/', [AdminGaleriController::class, 'index'])
            ->name('admin.galeri');
        Route::get('/tambah', [AdminGaleriController::class, 'tambah'])
            ->name('admin.galeri.tambah');
        Route::post('/tambah', [AdminGaleriController::class, 'store'])
            ->name('admin.galeri.simpan');
        Route::get('/hapus/{id}', [AdminGaleriController::class, 'delete'])
            ->name('admin.galeri.hapus');
    });

    // Route views kategori
    Route::group(['prefix' => 'kategori'], function(){
        Route::get('/', [AdminKategoriController::class, 'index'])
            ->name('admin.kategori');
        Route::get('/tambah', [AdminKategoriController::class, 'tambah'])
            ->name('admin.kategori.tambah');
        Route::post('/tambah', [AdminKategoriController::class, 'store'])
            ->name('admin.kategori.simpan');
    });

    // Route views produk
    Route::group(['prefix' => 'produk'], function(){
        Route::get('/', [AdminProdukController::class, 'index'])
            ->name('admin.produk');
        Route::get('/tambah-produk', [AdminProdukController::class, 'tambahProduk'])
            ->name('admin.produk.tambahProduk');
        Route::get('/tambah-paket', [AdminProdukController::class, 'tambahPaket'])
            ->name('admin.produk.tambahPaket');
        Route::post('/tambah-paket', [AdminProdukController::class, 'storePaket'])
            ->name('admin.produk.simpanPaket');
        Route::post('/tambah-produk', [AdminProdukController::class, 'storeProduk'])
            ->name('admin.produk.simpanProduk');
        Route::get('/lihat/produk/{id}', [AdminProdukController::class, 'viewProduk'])
            ->name('admin.produk.view');
        Route::get('/edit/produk/{id}', [AdminProdukController::class, 'editProduk'])
            ->name('admin.produk.edit');
        Route::post('/update-produk', [AdminProdukController::class, 'updateProduk'])
            ->name('admin.produk.updateProduk');
        Route::get('/hapus/produk/{id}', [AdminProdukController::class, 'deleteProduk'])
            ->name('admin.produk.hapus');

        //Routes views paket 
        Route::get('/lihat/paket/{id}', [AdminProdukController::class, 'viewPaket'])
            ->name('admin.paket.view');
        Route::get('/edit/paket/{id}', [AdminProdukController::class, 'editPaket'])
            ->name('admin.paket.edit');
        Route::post('/update-paket', [AdminProdukController::class, 'updatePaket'])
            ->name('admin.produk.updatePaket');
        Route::get('/hapus/paket/{id}', [AdminProdukController::class, 'deletePaket'])
            ->name('admin.paket.hapus');

        
        //Routes views laporan
        
    });
    
});
