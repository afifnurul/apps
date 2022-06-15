@extends('layouts.app')

@section('content')

<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    
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

@endsection