@extends('layouts.app')

@section('content')

{{-- template bagian kanan halaman --}}
<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="pr-5">
    <div class="container pr-5">
      <div class="mt-4">
        <h3>Laporan</h3>
        <div class="mt-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Laporan</li>
              </ol>
          </nav>
        </div>
      </div>
      <div class="mt-3">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Id Customer</th>
                  <th scope="col">Kode Transaksi</th>
                  <th scope="col">Tanggal Acara</th>
                  <th scope="col">Lokasi Acara</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                
              </tbody>
            </table>      
      </div>
    </div>
  </div>

</div>

@endsection