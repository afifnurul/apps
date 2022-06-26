@extends('layouts.detail')

@section('content')

<div class="container">
    <div class="no-print w-50 mt-4 mx-auto d-flex justify-content-end p-2">
        <a href="" id="cetak"  class="d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
            </svg>
            <span class="ml-2">Cetak Halaman</span>
        </a>
    </div>
    <div class="card w-50 mx-auto" id="card" style="border-color: #c88a72">
        <div class="card-body">
            <img src="{{ asset('img/gatronav1.png') }}" width="35px" height="35px" alt=""> | Tagihan Pembayaran DP
            <div class="mt-4 pt-2">
                <div class="d-flex justify-content-center">
                    <h3>Rp. 1.000.000</h3>
                </div>
                <div class="d-flex mt-3">
                    Metode Pembayaran Bank Transfer
                </div>
                <div class="d-flex">
                    Bank {{ strtoupper($transaksi->metode) }}
                </div>
                <div class="d-flex">
                    No. Rekening
                </div>
                <h2 class="d-flex text-primary">
                    {{ $transaksi->rekening }}
                </h2>
                <div>
                    <h3>Harap selesaikan pembayaran sebelum <span class="text-danger"> {{ $transaksi->expired }}</span></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="w-50 mt-2 mx-auto no-print">
        <a href="{{ route('user.pesanan') }}" role="button" class="btn btn-success">Kembali</a>
    </div>
</div>

<script>
    var cetak = document.querySelector('#cetak');
    var card = document.querySelector('#card');
    cetak.addEventListener('click', function(){
        window.print();
    });
</script>

@endsection