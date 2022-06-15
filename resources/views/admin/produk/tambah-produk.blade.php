@extends('layouts.app')

@section('content')

<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  @if (isset($produk))
  <h3 class="mt-3 mb-3">Edit Produk (Barang)</h3>

  <form action="{{ route('admin.produk.updateProduk') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $produk->id}}">
    <div class="form-group w-50">
        <label for="inputAddress">Nama Produk</label>
        <input type="text" class="form-control" value="{{ $produk->nama_produk }}" name="nama" id="inputAddress" placeholder="Kursi">
        {{-- name="nama" artinya nama form inputannya adalah nama --}}
      </div>
      <div class="form-group d-flex w-100">
        <div>
          <label for="inputAddress">Harga</label>
          <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
              <div class="input-group-text">Rp</div>
              </div>
              <input type="text" class="form-control" value="{{$produk->harga }}"  name="harga" id="inlineFormInputGroupUsername2" placeholder="1300000">
          </div>
        </div>
    </div>

    <label>Gambar</label>
    <label for="gambar" class="h-100 w-100 mb-3">
        <div class="w-50 border rounded d-flex justify-content-center align-items-center" style="cursor: pointer; height: 300px" id="gambar-preview">
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
            </svg>
            <span class="ml-3">Upload</span>
        </div>
    </label>
    <input type="file" name="gambar" id="gambar" accept="image/*" class="d-none">
    
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  @else
      
  <h3 class="mt-3 mb-3">Tambah Produk (Barang)</h3>
  
  <form action="{{ route('admin.produk.simpanProduk') }}" method="POST" enctype="multipart/form-data" id="form-tambah">
      @csrf
      
      <div class="form-group w-50">
          <label for="inputAddress">Nama Produk</label>
          <input type="text" class="form-control" name="nama" id="inputAddress" placeholder="Kursi">
          {{-- name="nama" artinya nama form inputannya adalah nama --}}
        </div>
        <div class="form-group d-flex w-100">
          <div>
            <label for="inputAddress">Harga</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                <div class="input-group-text">Rp</div>
                </div>
                <input type="text" class="form-control" name="harga" id="inlineFormInputGroupUsername2" placeholder="1300000">
            </div>
          </div>
      </div>

      <div>
        <label class="d-block">Gambar</label>
        <label for="gambar" class="h-100 w-50 mb-3">
            <div class="border rounded d-flex justify-content-center align-items-center" style="cursor: pointer; height: 300px" id="gambar-preview">
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                </svg>
                <span class="ml-3">Upload</span>
            </div>
        </label>
        <input type="file" name="gambar" id="gambar" accept="image/*" class="d-none">
      </div>
      
      <button type="submit" class="btn btn-primary">Simpan</button>
  </form>

  @endif

</div>

<script>
  let dropArea = document.querySelector('#gambar');
  let preview  = document.querySelector('#gambar-preview');
  dropArea.addEventListener('change', function(e){
      e.preventDefault();
      preview.innerHTML = '';
      let file = e.target.files[0];
      let url = URL.createObjectURL(file);
      let img = '<img class="w-100" src="'+url+'" style="height: 300px;">';
      preview.innerHTML = img;
  })
</script>
@endsection