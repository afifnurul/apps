<?php

use App\Http\Controllers\Admin\AdminGaleriController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminLaporanController;
use App\Http\Controllers\Admin\AdminPengembalianController;
use App\Http\Controllers\Admin\AdminPesananController;
use App\Http\Controllers\Admin\AdminProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\User\PesanController;
use App\Http\Controllers\User\ProfilUserController;
use Illuminate\Http\Request;
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

Route::get('/cetak-kwitansi', function(){
    return view('user.cetak-kwitansi');
});

Route::get('/pembayaran', function(){
    return view('user.pembayaran');
});

Route::get('detail/{id}', [HomeController::class, 'detail'])->name('detail');

// Route laravel ui untuk handle authentikasi user
Auth::routes();

// route untuk user yang sudah login
Route::group(['middleware' => ['auth']], function(){
    Route::prefix('profil')->group(function(){
        Route::get('/', [ProfilUserController::class, 'index'])->name('user.profil');
        Route::post('/simpan', [ProfilUserController::class, 'simpan'])->name('user.profil.simpan');
    });
    Route::prefix('pesanan')->group(function(){
        Route::get('/', [PesanController::class, 'index'])->name('user.pesanan');
    });
    Route::get('/pesan-sekarang/{id}', [TransaksiController::class, 'index'])->name('pesan-sekarang');
    Route::post('/pesan-sekarang', [TransaksiController::class, 'simpanSewa'])->name('user.simpanSewa');
    Route::post('/tambah-produk', [AdminProdukController::class, 'storeProduk'])
            ->name('admin.produk.simpanProduk');
    Route::get('/{id}/metode-pembayaran', [PesanController::class, 'metodePembayaran'])->name('pilih.pembayaran');
    Route::prefix('tagihan')->group(function(){
        Route::get('/', [TransaksiController::class, 'tagihan'])->name('user.tagihan');
        Route::post('/', [TransaksiController::class, 'bayar'])->name('tagihan');

    });
});

// Route views admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/', [AdminHomeController::class, 'index'])
        ->name('admin.home');
    Route::prefix('pesanan')->group(function(){
        Route::get('/', [AdminPesananController::class, 'index'])->name('admin.pesanan');
        Route::get('/respons/{id}', [AdminPesananController::class, 'detail'])->name('admin.pesanan.respons');
        Route::get('/{id}/terima', [AdminPesananController::class, 'terima'])->name('admin.pesanan.terima');
        Route::get('/{id}/tolak', [AdminPesananController::class, 'tolak'])->name('admin.pesanan.tolak');
    });
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
            
    });
        
    //Routes views pengembalian
    Route::group(['prefix' => 'pengembalian'], function(){
        Route::get('/', [AdminPengembalianController::class, 'index'])->name('admin.pengembalian');
        Route::get('/form-pengembalian/{id}', [AdminPengembalianController::class, 'pengembalian'])->name('admin.pengembalian.form');
        Route::post('/simpan', [AdminPengembalianController::class, 'simpanPengembalian'])->name('admin.pengembalian.form.simpan');
    });
    
    //Routes views laporan
    Route::group(['prefix' => 'laporan'], function(){
        Route::get('penyewaan', [AdminLaporanController::class, 'penyewaan'])->name('admin.laporan.penyewaan');
        Route::get('cetak-penyewaan', [AdminLaporanController::class, 'cetakPenyewaan'])->name('admin.laporan.penyewaan.cetak');
        Route::get('pengembalian', [AdminLaporanController::class, 'pengembalian'])->name('admin.laporan.pengembalian');
        Route::get('cetak-pengembalian', [AdminLaporanController::class, 'cetakPengembalian'])->name('admin.laporan.pengembalian.cetak');
    });

    Route::post('/filter-sewa', [AdminLaporanController::class, 'filterSewa'])->name('filter.sewa');
    Route::post('/filter-kembali', [AdminLaporanController::class, 'filterKembali'])->name('filter.kembali');
});
