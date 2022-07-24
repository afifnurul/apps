@extends('layouts.app')

@section('content')

{{-- template bagian kanan halaman --}}
<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="container">
    <div class="d-flex justify-content-between mt-4">
      <h3>Laporan Pengembalian</h3>
      <a href="" onclick="cetak()" class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
          <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
          <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
        </svg>
        <span class="ml-2">Cetak</span>
      </a>
    </div>
    <div class="mt-3">
        <table class="table">
            <thead>
              <tr>
                <th class="align-middle">No</th>
                <th class="align-middle">Nama Customer</th>
                <th class="align-middle">Nama Paket</th>
                <th class="align-middle">Harga Paket</th>
                <th class="align-middle">Tanggal Kembali</th>
                <th class="align-middle">Lokasi Acara</th>
                <th class="align-middle">Denda</th>
                <th class="align-middle">Biaya Denda</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach ($pengembalian as $item)
              <tr>
                <td>{{ $no }}</td>
                <td>{{ $item->pesanannya->usernya->name }}</td>
                <td>{{ $item->pesanannya->paketnya->nama }}</td>
                <td>Rp{{ number_format($item->pesanannya->paketnya->harga, 0, '', '.') }}</td>
                <td>{{ date("d/m/Y", strtotime($item->pesanannya->tgl_acara)) }}</td>
                <td>{{ $item->pesanannya->alamat_acara }}</td>
                <td>{{ ($item->denda != null) ? 'Iya' : 'Tidak' }}</td>
                <td>
                    @if ($item->denda != null)
                    Rp{{ number_format($item->denda, 0, '', '.') }}
                    @endif
                </td>
              </tr>      
              @php
                  $no++;
              @endphp          
              @endforeach
            </tbody>
        </table>      
    </div>
  </div>
</div>

<script>
  function cetak(){
    window.open("{{ route('admin.laporan.pengembalian.cetak') }}");
  }
</script>

@endsection