@extends('layouts.app')

@section('content')

    <div class="container mb-3">

        <div class="mt-5"></div>
        {{-- card menu kategori --}}
        <div class="mt-2 w-100">
            <div class="w-100 mx-auto">
                <section id="kategori">
                    <div class="row w-100">
                        <div class="w-100">
                            <div class="w-100 d-flex justify-content-center" id="headingOne">
                                <ul class="nav">
                                    <li class="nav-item rounded-circle">
                                        <button id="btn-wed" onclick="menuWed()" type="button" class="btn btn-outline-dark btn-kat" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">Wedding</button>
                                    </li>
                                    <li class="nav-item mx-2">
                                        <button id="btn-eng" onclick="menuEng()" type="button" class="btn btn-outline-dark btn-kategori" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">Engagement</button>
                                    </li>
                                    <li class="nav-item">
                                        <button id="btn-lain" onclick="menuLain()" type="button" class="btn btn-outline-dark btn-kategori" style="padding-top: 0.5rem; padding-bottom: 0.5rem;">Lain-lain</button>
                                    </li>
                                </ul>
                            </div>
    
                            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
    
                                    <section id="wedding">
                                        <!-- Menu Wedding -->                                       
                                        <div class="album">
                                            <div class="container px-5">
                                                <div class="row mt-2 px-5 ml-1">
                                                    @foreach ($pakets as $paket)
    
                                                        @if ($paket->kategorinya->nama == 'Wedding')
                                                        <div class="col-md-4">

                                                            <a href="{{ route('detail', ['id' => $paket->id]) }}" style="text-decoration: none">
                                                                <div class="row mb-4">
                                                                    <div class="col-3" style="">
                                                                        <div class="card animate__animated animate__bounceInLeft" style="width: 17rem; height:18rem; box-shadow: 8px black">
                                                                            @if (isset($paket->banner->img))
                                                                                <img class="" src="{{ asset('paket/detail/'.$paket->banner->img.'')}}" height="170px" alt="">
                                                                            @endif
                                                                            <div class="ml-2 mt-2 mb-3 text-dark " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                                                            {{ $paket->nama }} <br> by. Gatro Dekorasi
                                                                            </div>
                                                                            
                                                                            <div class="ml-2 mt-3 mb-1 font-weight-bold">
                                                                                @php
                                                                                $harga = $paket->harga;
                                                                                $harga = number_format($harga, 0, '', '.')
                                                                            @endphp
                                                                            Rp. {{ $harga }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>            
                                                            </a>
                                                        </div>
                                                        @endif
                                                    
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>                                        
                                        <!-- Batas Menu Wedding -->
                                    </section>
    
                                    <section id="engagement">
                                        <!-- Menu Enggagement -->
                                        <div class="album">
                                            <div class="container px-5">
                                                <div class="row mt-2 px-5 ml-1">
                                                    @foreach ($pakets as $paket)
        
                                                        @if ($paket->kategorinya->nama == 'Engagement')
                                                        <div class="col-md-4">
                                                            <a href="{{ route('detail', ['id' => $paket->id]) }}" style="text-decoration: none">
                                                                <div class="col mb-4">
                                                                    <div class="shadow-lg">
                                                                        <div class="card animate__animated animate__bounceInLeft" style="width: 17rem; height:18rem; box-shadow: 8px black">
                                                                            @if (isset($paket->banner->img))
                                                                                <img class="" src="{{ asset('paket/detail/'.$paket->banner->img.'')}}" height="170px" alt="">
                                                                            @endif
                                                                            <div class="ml-2 mt-2 mb-3 text-dark" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                                                            {{ $paket->nama }} <br> by. Gatro Dekorasi
                                                                            </div>
                                                                            
                                                                            <div class="ml-2 mt-3 mb-1 font-weight-bold">
                                                                            @php
                                                                                $harga = $paket->harga;
                                                                                $harga = number_format($harga, 0, '', '.')
                                                                            @endphp
                                                                            Rp. {{ $harga }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>            
                                                            </a>            
                                                        </div>
                                                        @endif
                                                    
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Batas Menu Enggagement -->
                                    </section>
    
                                    <section id="lain-lain">
                                        <!-- Menu Lain-lain -->
                                        <div class="album">
                                            <div class="container px-5">
                                                <div class="row mt-2 px-5 ml-1">
                                                    @foreach ($produks as $produk)
                                                    <div class="col-md-4">
    
                                                        <a href="{{ route('detail', ['id' => $produk->id]) }}" style="text-decoration: none">
                                                            <div class="col mb-4">
                                                                <div class="shadow-lg">
                                                                    <div class="card animate__animated animate__bounceInLeft" style="width: 17rem; height:18rem; box-shadow: 8px black">
                                                                        <img class="" src="{{ asset('public/produk/'.$produk->gambar.'')}}" height="170px" alt="">
                                                                        <img class="card-img rounded" src="{{ $paket->gambar }}" height="150px" alt="">
                                                                        <div class="ml-2 mt-2 mb-3 text-dark" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                                                            {{ $produk->nama_produk }} <br> by. Gatro Dekorasi
                                                                        </div>
                                                                        
                                                                        <div class="ml-2 mt-3 mb-1 font-weight-bold">
                                                                            @php
                                                                                $harga = $produk->harga;
                                                                                $harga = number_format($harga, 0, '', '.')
                                                                            @endphp
                                                                            Rp. {{ $harga }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>            
                                                            </a>         
                                                    
                                                    </div>                                                        
                                                    
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Batas Menu Lain-lain -->
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="mt-3"></div> 

        <!-- About -->
        <section id="about">
            <div class="row justify">
                <div class="col-md-5 float-center p-2">
                    <img src="{{ asset('img/about-us.png')}}" width="510" height="370" alt="">
                </div>
                <div class="col mt-5 offset-md-1">
                    <h4 class="text-center" style="color: #ab7661; font-family: 'Times New Roman', Times, serif">About Us</h4>
                    <p class="text-justify" style="font-family: 'Times New Roman', Times, serif; font-size:14pt;">Gatro dekorasi adalah sebuah jasa penyewaan dekorasi pernikahan yang berada di Desa Geritan, Kota Pati, Kabuapaten Pati, Jawa Tengah. Gatro dekorasi tidak hanya menyewakan dekorasi tetapi juga menyewakan sound system dan perlengkapan pernikahan lainnya. Terdapat banyak pilihan paket dekorasi yang dapat dipilih sesuai keinginan calon pengantin. Pemesan juga bisa menyewa beberapa item diluar paket. Untuk acara lain seperti tunangan, acara tujuh bulanan dan lain sebagainya juga dapat menggunakan Gatro dekorasi sebagai jasa penyewaannya. </p>
                
                </div>
            </div>
            {{-- <div class="col-md-4 mt-3 offset-md-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.1483052435538!2d111.05982571459192!3d-6.751761295119321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70d2e44cbad305%3A0x6ab5a1edd660fa05!2sGatro%20Rental%20Kamera!5e0!3m2!1sid!2sid!4v1654145443527!5m2!1sid!2sid" width="620" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> --}}
        </section>

        {{-- deskripsi website --}}
        <div class="justify-content-center">
            <div class="md-6 mt-2">
                <div class="d-flex justify-content-center flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" style="color: #c88a72" class="bi bi-award" viewBox="0 0 16 16">
                        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                    </svg><div class="p-2" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> Best Service</div>
                    <div class="mx-4"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" style="color: #c88a72" fill="currentColor" class="bi bi-person-heart" viewBox="0 0 16 16">
                        <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
                    </svg><div class="p-2" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Try to Understand</div>
                    <div class="mx-4"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" style="color: #c88a72" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                    </svg><div class="p-2" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Friendly</div>
                </div>
                <div class="mt-5"></div>
                <div class="d-flex justify-content-center flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" style="color: #c88a72" class="bi bi-alarm" viewBox="0 0 16 16">
                        <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                        <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                    </svg><div class="p-2" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">One Day Service</div>
                    <div class="mx-4"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chat" style="color: #c88a72" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                    </svg><div class="p-2" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Good Communication</div>
                    
                </div>
            </div>
        </div>

        <div class="mt-5"></div>
        <div></div>
        <div class="mt-5"></div>

        {{-- slideshow --}}
        <div class="col-md-10 mx-auto">
            <div class="main-carousel">
                <!-- Slider main container -->
                <div class="swiper w-100">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        {{-- Ambil gambar di folder public/galeri --> HomeController --}}
                        @foreach ($carousels as $carousel)  
                            <div class="carousel-cell swiper-slide">
                                <img src="{{asset('public/galeri/'.$carousel->gambar.'')}}"  width="270px" height="280px" alt="">
                        
                            </div>                            
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>          
        </div>

        <div class="mt-4"></div> 

        <!-- Gallery -->
        {{-- <section id="gallery">
            <div class="mt-5 d-flex justify-content-center">
            <h4>Gallery</h4>
            </div>
                
            <div class="container">
            <div class="row-cust">
                <div class="column-cust">
                    <img src="img/pw2.2.jpg" alt="">
                    <div class="mt-1"></div>
                    <img src="img/pw1.1.jpg" alt="">
                </div>
                <div class="column-cust">
                    <img src="img/pw1.2.jpg" alt="">
                    <div class="mt-1"></div>
                    <img src="img/pw3.2.jpg" alt="">
                </div>
                <div class="column-cust">
                    <img src="img/pw3.1.jpg" alt="">
                    <div class="mt-1"></div>
                    <img src="img/pw4.1.jpg" alt="">
                </div>
            </div>       
            </div>
    
        </section> --}}

        {{-- contact --}}
        <section id="contact">
            <div class="row justify">
                <div class="col-md-6 ml-4 float-center p-4">
                    <h4 class="text-center" style="color: #ab7661; font-family: 'Times New Roman', Times, serif">Contact Us</h4>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName" style="font-family: 'Times New Roman', Times, serif">Nama</label>
                            <input type="text" style="border-color: #ab7661" class="form-control" id="exampleInputNama" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="font-family: 'Times New Roman', Times, serif">Email</label>
                            <input type="email" style="border-color: #ab7661" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" style="font-family: 'Times New Roman', Times, serif">Catatan</label>
                            <textarea class="form-control" style="border-color: #ab7661" id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                        <button type="submit" style="border-color: #ab7661; font-family: 'Times New Roman', Times, serif" class="btn btn-outline-dark">Submit</button>
                    </form>

                </div>
                <div class="col mt-3 offset-md-1">
                    <img src="{{ asset('img/vektor-msg.jpg')}}" width="410" height="370" alt="">
                </div>
            </div>
        </section>

        <div class="mt-5">
            <div class="bg-white" style="height: 100px"></div>
        </div>

        
    </div>
    
    <script>
        let wedding = document.querySelector('#wedding');
        let engagement = document.querySelector('#engagement');
        let lain = document.querySelector('#lain-lain');
        let btnWed = document.querySelector('#btn-wed');
        let btnEng = document.querySelector('#btn-eng');
        let btnLain = document.querySelector('#btn-lain');
        engagement.classList.add('d-none');
        lain.classList.add('d-none');
        
        // klik menu wedding
        function menuWed() {
            wedding.classList.remove('d-none');
            engagement.classList.add('d-none');
            lain.classList.add('d-none');
            btnWed.classList.add('btn-kat');
            btnWed.classList.remove('btn-outline-dark', 'btn-kategori');
            btnLain.classList.remove('btn-kat');
            btnLain.classList.add('btn-outline-dark');
            btnEng.classList.remove('btn-kat');
            btnEng.classList.add('btn-outline-dark');
        }
        
        function menuEng() {
            wedding.classList.add('d-none');
            engagement.classList.remove('d-none');
            lain.classList.add('d-none');
            btnWed.classList.remove('btn-kat');
            btnWed.classList.add('btn-outline-dark', 'btn-kategori');
            btnLain.classList.remove('btn-kat');
            btnLain.classList.add('btn-outline-dark');
            btnEng.classList.remove('btn-outline-dark');
            btnEng.classList.add('btn-kat');
        }

        function menuLain() {
            wedding.classList.add('d-none');
            engagement.classList.add('d-none');
            lain.classList.remove('d-none');
            btnWed.classList.remove('btn-kat');
            btnWed.classList.add('btn-outline-dark', 'btn-kategori');
            btnLain.classList.remove('btn-outline-dark');
            btnLain.classList.add('btn-kat');
            btnEng.classList.remove('btn-kat');
            btnEng.classList.add('btn-outline-dark');
        }

    </script>
@endsection