@extends('layouts.app')

@section('content')

{{-- template bagian kanan halaman --}}
<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="pr-5">
    <div class="container pr-5">
      <div class="mt-4">
        <h3>Pesanan</h3>
        <div class="mt-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pesanan</li>
              </ol>
          </nav>
        </div>
      </div>
      <div class="mt-3">
          <table class="table">
              <thead>
                <tr>
                  <td scope="col">No</td>
                  <td scope="col">Nama Paket</td>
                  <td scope="col">Lokasi Acara</td>
                  <td scope="col">Alamat Lokasi</td>
                  <td scope="col">Tanggal Acara</td>
                  <td scope="col">Tanggal Pengembalian</td>
                  <td scope="col">Status</td>
                  <td scope="col">Aksi</td>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @if (isset($pesanan))
                @foreach ($pesanan as $data)  
                <tr>
                    <th scope="row">{{$no}}</th>
                    <td>{{ $data->paketnya->nama}}</td>
                    <td>{{ $data->lokasi }}</td>
                    <td>{{ $data->alamat_acara }}</td>
                    <td>{{ App\Http\Controllers\User\PesanController::tglID($data->tgl_acara) }}</td>
                    <td>{{ App\Http\Controllers\User\PesanController::tglID($data->tgl_kembali) }}</td>
                    <td>
                      @if ($data->status == 'menunggu')
                      <span class="badge badge-warning">{{ $data->status }}</span>                      
                      @elseif ($data->status == 'diterima')
                      <span class="badge badge-success">{{ $data->status }}</span>                      
                      @elseif ($data->status == 'ditolak')
                      <span class="badge badge-danger">{{ $data->status }}</span>    
                      @elseif ($data->status == 'menunggu DP')                  
                      <span class="badge badge-primary">{{ $data->status }}</span>
                      @elseif ($data->status == 'DP Masuk')                  
                      <span class="badge badge-success">{{ $data->status }}</span>
                      @endif
                    </td>
                    @if ($data->status == 'menunggu')
                        <td>
                            <a href="{{ route('admin.pesanan.respons' , ['id' => $data->id]) }}" class="btn btn-primary">Respons</a>
                        </td>
                    @endif
                </tr>
                <?php $no++; ?>
                @endforeach
                @endif
              </tbody>
            </table>
      
      </div>
    </div>
  </div>

</div>

@endsection