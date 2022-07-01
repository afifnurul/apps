@extends('layouts.template')

@section('content')

<main id="main-container">
    <div class="content">        
        <h3 class="mt-3">Tambah Kategori</h3>
  
        <form action="{{ route('admin.kategori.simpan') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="inputAddress">Nama Kategori</label>
            <input type="text" class="form-control" id="inputAddress" name="kategori" placeholder="Wedding">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</main>

@endsection