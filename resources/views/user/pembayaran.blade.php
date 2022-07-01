@extends('layouts.detail')

@section('content')

<div class="container">
    <div class="card w-50 mt-4 mx-auto" style="border-color: #c88a72">
        <div class="card-body">
            <a href="{{ route('home')}}"><img src="{{ asset('img/gatronav1.png') }}" width="35px" height="35px" alt=""></a> | Pembayaran
        </div>
    </div>
    <div class="card w-50 mt-3 mx-auto" style="border-color: #c88a72">
        <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="color: #704c3e" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg> Alamat Lokasi Acara
            <p class="ml-4"> {{ $pesanan->nama }} {{ ($pesanan->usernya->no_hp1 != null) ? $pesanan->usernya->no_hp1 : '' }} <br> {{ $pesanan->lokasi}} <br> {{ $pesanan->alamat_acara }} </p>
            <p class="ml-4"> </p>
        </div>
    </div>
    <div class="card w-50 mt-4 mx-auto" style="border-color: #c88a72">
        <div class="card-body">
            Paket Disewa <hr>
            <div class="d-flex">
                <div class="mr-auto p-2"></div>
                <div class="p-2 "></div>
                <div class="pr-5 mr-5" style="color: rgb(175, 174, 174)">Jumlah</div>
                <div class="p-2" style="color: rgb(175, 174, 174)">Total</div>
            </div>
            <div class="d-flex">
                <div class="mr-auto p-2">{{ $pesanan->paketnya->nama }}</div>
                <div class="p-2"></div>
                <div class="p-2 mr-5">1</div>
                <div class="p-2">Rp{{ number_format($pesanan->paketnya->harga, 0, '', '.') }}</div>
            </div>
            <div class="mr-auto p-2" style="color: rgb(139, 139, 139)">Catatan</div>
        </div>
    </div>
    <div class="card w-50 mt-4 mx-auto" style="border-color: #c88a72">
        <div class="card-body">
            <div>
                <div class="mr-auto">Metode Pembayaran</div>
                <div class="mt-2 d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bank" id="bni" value="bni">
                        <label class="form-check-label" for="bni">
                          BNI
                        </label>
                    </div>
                    <div class="form-check mx-3">
                        <input class="form-check-input" type="radio" name="bank" id="bri" value="bri">
                        <label class="form-check-label" for="bri">
                          BRI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bank" id="bca" value="bca">
                        <label class="form-check-label" for="bca">
                          BCA
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 ml-auto">
            Total : Rp{{ number_format($pesanan->paketnya->harga, 0, '', '.') }} <br>
            DP : Rp1.000.000 <br>
            @php
                $sisa = $pesanan->paketnya->harga - 1000000;
            @endphp
            Sisa(COD) : Rp{{ number_format($sisa, 0, '', '.') }}
        </div>
        <div class="p-3 ml-auto">
            <form action="{{ route('tagihan') }}" method="post">
                @csrf
                <input type="hidden" name="id_pesanan" value="{{ $pesanan->id }}">
                <input type="hidden" name="metode" id="metode">
                <button type="submit" class="btn btn-primary mr-auto">Bayar</button>
            </form>
        </div>
    </div>
</div>

<script>
    var bank = $('input[name=bank]');
    bank.on('change', function(){
        var val = $('input[name=bank]:checked').val();
        document.querySelector('#metode').value = val;
    })
</script>

@endsection