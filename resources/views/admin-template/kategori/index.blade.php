@extends('layouts.template')

@section('content')

<main id="main-container">
    <div class="content">        
        <div class="mt-4">
            <h3>Kategori</h3>
            <div class="mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                    </ol>
                </nav>
            </div>
        </div>
    
        <div class="w-full d-flex flex-row-reverse mr-5">
            <div class="mr-2">
                <a class="btn btn-info" href="{{ route('admin.kategori.tambah') }}" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg align-middle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>  
                    <span class="ml-2 align-middle">Tambah Kategori</span>
                </a>
            </div>
        </div>
        {{-- table paket --}}
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;    
                ?>
                @if (isset($kategoris))
                    @foreach ($kategoris as $kategori)
                        
                        <tr>
                        <th scope="row">{{$no}}</th>
                        <td>{{ $kategori->nama }}</td>
                        </tr>
    
                    <?php $no++; ?>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</main>

@endsection