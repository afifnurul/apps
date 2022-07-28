<?php

namespace App\Http\Controllers\Api;

use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MidtransNotificationController extends Controller
{
    public function handler(Request $request)
    {
        $json = json_decode($request->getContent());
        $signature = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY_NO_HASH'));

        if($signature != $json->signature_key){
            abort(401);
        }

        $transaksi = Transaksi::find($json->order_id);
        $transaksi->status = $json->transaction_status;
        $pesanan = Pesanan::find($transaksi->id_pesanan);
        $pesanan->status = 'DP Masuk';
        $pesanan->save();
        return $transaksi->save();

    }
}
