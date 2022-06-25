@extends('layouts.detail')

@section('content')

<div class="w-100 row">
    @include('navigation.sidebar-user')
    <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 pr-5">
        <div class="pr-5 ww-100">
            <div class="container pr-5 w-100">
    
                <form class="w-100">
                  <h5 class="mb-3">Profil</h5>
                    <div class="d-flex w-100">
                      <div class="w-50">
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
                      <div class="w-50 ml-5 mt-3">
                        <img width="400px" height="400px" src="https://images.unsplash.com/photo-1655147308139-ec9dd2381a45?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                      </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
</div>



    
@endsection