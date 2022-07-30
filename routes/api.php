<?php

use App\Http\Controllers\Api\MidtransNotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get bas64 server key
Route::get('/key', function(){
    return base64_encode('Mid-server-iF43JvS-zrgipqizJYnqxF7r');
});

// menangani update status transaksi ketika midtrans kirim konfirmasi

Route::post('/notification', [MidtransNotificationController::class, 'handler']);
