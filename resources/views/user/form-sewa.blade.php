@extends('layouts.detail')

@section('content')

    <div class="container">
        <div class="mt-3 w-100">
            @if (isset($sewa))
            <form action="{{ route('user.simpanSewa') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <h4 class="text-center" style="color: #ab7661; font-family: 'Times New Roman', Times, serif">Formulir Penyewaan</h4><br>
                    <label for="exampleFormControlInput1" style="font-family: 'Times New Roman', Times, serif">Nama</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="nama" id="exampleFormControlInput1" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" style="font-family: 'Times New Roman', Times, serif">Lokasi Acara</label>
                        <select class="form-control" name="lokasi" id="exampleFormControlSelect1">
                            <option selected disabled>pilih lokasi</option>
                            <option value="Gedung">Gedung</option>
                            <option value="Rumah">Rumah</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="" style="font-family: 'Times New Roman', Times, serif">Tanggal Acara</label>
                    <input type="date" class="form-control" id="tgl_acara" name="tgl_acara" placeholder="dd/mm/yy">
                </div>
                <div class="form-group">
                    <label for="" style="font-family: 'Times New Roman', Times, serif">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" placeholder="dd/mm/yy">
                </div>
                <div class="form-group">
                    <label for="" style="font-family: 'Times New Roman', Times, serif">Nama Paket</label>
                    <select class="custom-select" disabled name="nama_paket" id="inputGroupSelect02">
                        <option value="{{ $sewa->id }}" selected>{{ $sewa->nama }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="font-family: 'Times New Roman', Times, serif">Catatan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="catatan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn" style="background-color: #c88a72; color:white">Kirim</button>
            </form>
            @endif
        </div>
    </div>

<script>
    $(function(){
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        $('#tgl_acara').attr('min', maxDate);
        $('#tgl_acara').on('change', function(){
            const acara =  $('#tgl_acara').val();
            $('#tgl_kembali').attr('min', acara);
            var acaraDay = new Date(acara);
            var monthAcara = acaraDay.getMonth() + 1;
            var dayAcara = acaraDay.getDate();
            var yearAcara = acaraDay.getFullYear();
            if(monthAcara < 10)
                monthAcara = '0' + monthAcara.toString();
            if(dayAcara < 10)
                dayAcara = '0' + dayAcara.toString();
            
            var maxDateKembali = yearAcara + '-' + monthAcara + '-' + (dayAcara + 3);
            $('#tgl_kembali').attr('max', maxDateKembali);
        })
    });
</script>

@endsection
