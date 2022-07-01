@extends('layouts.template')

@section('content')
    
<main id="main-container">
    <div class="content">

        <div class="mt-4">
            <h3>Profil Admin</h3>
            <div class="mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Admin</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Profil Admin</li>
                    </ol>
                </nav>
            </div>
        </div>
        <br>
        @if (isset($profil))
        <div class="center">
            <td>
                <label for="gambar-6" id="label-6">
                  <div class="img-thumbnail d-flex justify-content-center align-items-center" style="width: 160px; height: 120px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                    </svg>
                  </div>
                </label>
                <input type="file" accept="image/*"  name="gambar-6" id="gambar-6" class="d-none"/>
              </td>
        </div><br>
        
        <form action="{{ route('admin.editProfile', ['id' => $profil->id ]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <input type="hidden" name="id" value="{{$profil->id}}">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" value="{{$profil->email}}" class="form-control" id="inputEmail4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Alamat</label>
                    <input type="text" class="form-control" value="{{$profil->alamat}}" id="inputAddress" placeholder="">
                </div>
            <div class="form-group">
                <label for="inputAddress2">Kota</label>
                <input type="text" class="form-control" value="{{$profil->kota}}" id="inputAddress2" placeholder="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">No HP 1</label>
                    <input type="text" class="form-control" value="{{$profil->no_hp1}}" id="inputCity">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">No HP 2</label>
                    <input type="text" class="form-control" value="{{$profil->no_hp2}}" id="inputZip">
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        @endif

    </div>
</main>

@endsection