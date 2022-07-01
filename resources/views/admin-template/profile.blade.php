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