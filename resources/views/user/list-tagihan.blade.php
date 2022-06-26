@extends('layouts.detail')

@section('content')

<div class="w-100 row">
    @include('navigation.sidebar-user')

    <div id="content" class="p-4 p-md-5">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Sabar ya</h4>
            <p>{{ Session::get('success') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
              <tr>
                <td scope="col">No</td>
                <td scope="col">Nama Paket</td>
                <td scope="col">Metode Pembayaran</td>
                <td scope="col">Total Pembayaran</td>
                <td scope="col">Rekening</td>
                <td scope="col">Kadaluarsa</td>
                <td scope="col">Status</td>
              </tr>
            </thead>
            
            <tbody>
                <?php
                    $no = 1;    
                    ?>
                    @if (isset($transaksi))
                        @foreach ($transaksi as $data)
                            <tr>
                                <th scope="row">{{$no}}</th>
                                <td>{{ $data->pesanannya->paketnya->nama}}</td>
                                <td>Transfer Bank {{ strtoupper($data->metode) }}</td>
                                <td>Rp{{ number_format($data->total, 0, '', '.') }}</td>
                                <td>{{ $data->rekening }}</td>
                                <td>{{ $data->expired }}</td>
                                <td>{{ $data->status }}</td>
                            </tr>
                        <?php $no++; ?>
                        @endforeach
                    @endif
            </tbody>
          </table>
    </div>
</div>
    
@endsection