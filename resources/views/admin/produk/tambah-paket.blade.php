@extends('layouts.app')

@section('content')

<div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  @if (isset($paket))
  <h3 class="mt-3 px-5 mb-3">Edit Paket</h3>
  
  <form action="{{ route('admin.produk.updatePaket') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{$paket->id}}">
      {{-- induk form mau dibagi 2 --}}
      <div class="d-flex w-100 px-5 mb-5">
        {{-- bagian kiri --}}
        <div class="w-100">
          <div class="form-group w-100">
            <label for="inputAddress">Nama Paket</label>
            <input type="text" class="form-control" value="{{ $paket->nama}} " name="nama" id="inputAddress" placeholder="Paket Gold">
          </div>
          <div class="form-group d-flex w-100">
            <div>
              <label for="inputAddress">Harga</label>
              <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                  <div class="input-group-text">Rp</div>
                  </div>
                  <input type="text" class="form-control" value="{{ $paket->harga }}" name="harga" id="inlineFormInputGroupUsername2" placeholder="1300000">
              </div>
            </div>
            <div class="ml-4">
              <label for="inputTamu">Jumlah Tamu</label>
              <input type="text" class="form-control" value="{{ $paket->jml_tamu }}" name="jml_tamu" id="inputTamu" placeholder="100">
            </div>
          </div>
          <div class="form-group w-100">
            <label for="inputState">Kategori</label>
            <select id="inputState" class="form-control" name="kategori">
              <option disabled>--Pilih Kategori--</option>
              @if (isset($kategoris))
                  
                @foreach ($kategoris as $kategori)

                @if ($paket->id_kategori == $kategori->id)
                <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                @else
                <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endif

                @endforeach

              @endif
            </select>
          </div>

          <div class="form-group w-100">
            <label for="inputAddress">Detail</label>
            @foreach ($produks as $produk)
            <div class="input-group d-flex align-items-center mb-2">
                <div>
                  <input type="radio" aria-label="Radio button for following text input"> {{ $produk->nama_produk }}
                </div>
                <div class="ml-3">
                  <input type="text" class="form-control" id="inputTamu"  placeholder="100">
                </div>
            </div>
            @endforeach
            
          </div>
        </div>
        {{-- baigan kanan --}}
        <div class="ml-5 w-100">
          {{-- upload foto --}}
          <label>Gambar</label>
          <label for="gambar" class="h-100 w-100 mb-3">
              <div class="w-100 border rounded d-flex justify-content-center align-items-center" style="cursor: pointer; height: 300px" id="gambar-preview">
                @if ($paket->gambar)
                  <img class="w-100" src="{{ asset('public/paket/'.$paket->gambar.'') }}" style="height: 300px;">
                @else  
                  <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                      <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                  </svg>
                <span class="ml-3">Upload</span>
                @endif
              </div>
          </label>
          <input type="file" name="gambar" id="gambar" accept="image/*" class="d-none">
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary ml-5">Simpan</button>
  </form>
  @else
      
  <h3 class="mt-3 px-5 mb-3">Tambah Paket</h3>
  
  <form action="{{ route('admin.produk.simpanPaket') }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{-- induk form mau dibagi 2 --}}
      <div class="d-flex w-100 px-5 mb-5">
        {{-- bagian kiri --}}
        <div class="w-100">
          <div class="form-group w-100">
            <label for="inputAddress">Nama Paket</label>
            <input type="text" class="form-control" name="nama" id="inputAddress" placeholder="Paket Gold">
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
            <div class="ml-4">
              <label for="inputTamu">Jumlah Tamu</label>
              <input type="text" class="form-control" name="jml_tamu" id="inputTamu" placeholder="100">
            </div>
          </div>
          <div class="form-group w-100">
            <label for="inputState">Kategori</label>
            <select id="inputState" class="form-control" name="kategori">
              <option disabled selected>--Pilih Kategori--</option>
              @if (isset($kategoris))
                  
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach

              @endif
            </select>
          </div>
          <textarea name="detail" id="detail" cols="80" rows="10" class="d-none"></textarea>
          <input type="hidden" id="jml" value="{{ count($produks) }}">
          <div class="form-group w-100">
            <label for="inputAddress">Detail</label>
            <?php $i = 1; ?>
            @foreach ($produks as $produk)
            <div class="input-group d-flex align-items-center mb-2">
                <div>
                  <input type="checkbox" id="check-{{ $i }}" value="{{ $produk->nama_produk }}" aria-label="Radio button for following text input"> {{ $produk->nama_produk }}
                </div> 
                <div class="ml-3">
                  <input type="text" class="form-control" id="input-{{ $i }}" placeholder="100">
                </div>
            </div>
            <?php $i++; ?>
            @endforeach
          </div>
        </div>
        {{-- bagian kanan --}}
        <div class="ml-5 w-100">
          {{-- upload foto --}}
          {{-- <div>
            <label class="d-block">Gambar</label>
            <label for="gambar" class="h-100 w-100 mb-3">
                <div class="border rounded d-flex justify-content-center align-items-center" style="cursor: pointer; height: 300px" id="gambar-preview">
                    <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                        <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                    </svg>
                    <span class="ml-3">Upload</span>
                </div>
            </label>
            <input type="file" name="gambar" id="gambar" accept="image/*" class="d-none">
          </div> --}}


          {{-- Upload slide img --}}
          {{-- upload foto --}}
          <div>
            <label class="d-block">Gambar Slide</label>
            <label for="gambar" class="h-100 w-100 mb-3">
              <input type="file" name="gambar_paket[]" id="gambar_paket" accept="image/*" multiple>
            </label>            
          </div>
        </div>

       

      </div>
      
      <button type="submit" id="simpan" class="btn btn-primary ml-5">Simpan</button>
  </form>
  @endif
</div>

<script>
  var jml = document.querySelector('#jml').value;
  function main(id){
      var checkbox = document.querySelector('#check-' + id);
      var input = document.querySelector('#input-' + id);
      var btn = document.querySelector('#simpan');
      var textarea = document.querySelector('#detail');
      btn.addEventListener('click', function(){
          if(checkbox.checked){
              var val = input.value;
              textarea.value += checkbox.value + " " + val + "<br>";
          }
      });
  }
  for(var i = 1; i <= jml; i++){
      main(i);
      console.log(i);
  }
</script>

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
      preview.appendChild(img);
  });
</script>
@endsection