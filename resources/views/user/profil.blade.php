@extends('layouts.detail')

@section('content')

<div class="w-100 row">
    @include('navigation.sidebar-user')
    <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 pr-5">
        <div class="pr-5 ww-100">
            <div class="container pr-5 w-100">
              <h3 class="mb-3">Profil</h3>
              <form action="{{ route('user.profil.simpan') }}" method="POST">
                @csrf
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group mb-3">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" value="{{ $profil->name }}" class="form-control" id="nama">
                    </div>
                    <div class="form-group mb-3">
                      <label for="email">Email</label>
                      <input type="email" name="email" value="{{ $profil->email }}" class="form-control" id="email">
                    </div>
                    <div class="form-row mb-3">
                      <div class="form-group col-md-6">
                        <label for="no_hp1">No Hp 1</label>
                        <input type="text" name="no_hp1" value="{{ $profil->no_hp1 }}" class="form-control" id="no_hp1">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="no_hp2">No Hp 2</label>
                        <input type="text" name="no_hp2" value="{{ $profil->no_hp2 }}" class="form-control" id="no_hp2">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group mb-3">
                      <label for="kota">Kota</label>
                      <input type="text" name="kota" value="{{ $profil->kota }}" class="form-control" id="kota">
                    </div>
                    <div class="form-group mb-3">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" class="form-control" id="alamat" rows="5">{{ $profil->alamat }}</textarea>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
              </form>
                {{-- <form class="w-100">
                  <h5 class="mb-3">Profil</h5>
                    <div class="form-row">
                      <div class="form-group w-100">
                        <label for="nama">Nama</label>
                        <input type="text" value="{{ $profil->name }}" class="form-control" id="nama">
                      </div>
                      <div class="form-group w-100">
                        <label for="inputEmail4">Email</label>
                        <input type="email" value="{{ $profil->email }}" class="form-control" id="inputEmail4">
                      </div>
                      <div class="form-group w-100">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" value="{{ $profil->alamat }}" class="form-control" id="inputAddress" placeholder="">
                      </div>
                      <div class="form-group w-100">
                        <label for="inputAddress2">Kota</label>
                        <input type="text" value="{{ $profil->kota }}" class="form-control" id="inputAddress2" placeholder="">
                      </div>
                      <div class="form-group w-100">
                        <label for="inputCity">No HP 1</label>
                        <input type="text" value="{{ $profil->no_hp1 }}" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group w-100">
                        <label for="inputZip">No HP 2</label>
                        <input type="text" value="{{ $profil->no_hp2 }}" class="form-control" id="inputZip">
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form> --}}
            </div>
        </div>
    </div>
</div>



    
@endsection