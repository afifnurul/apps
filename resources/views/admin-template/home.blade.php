@extends('layouts.template')

@section('content')

<main id="main-container">
    <div class="content">
        <div class="mt-4 p-3">
            <h3>Dashboard</h3>
        </div>
        {{-- bagian isi menu --}}
        {{-- <div class="row mt-3 ml-3">
            <div class="column mx-2">
                <div class="card border-info text-dark mb-3" style="width: 20rem;">
                    <div class="card-body bg-white">
                        <div class="d-flex py-4 px-4">
                            <div class="w-100">     
                                <h5 class="card-title">PESANAN</h5>
                                <h3 class="card-text">23</h3>
                                <a href="">Lihat Detail <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-end w-100 pr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-cart-plus" style="opacity: 20%" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column mx-2">
                <div class="card border-danger text-dark mb-3">
                    <div class="card-body bg-white">
                        <div class="d-flex py-4 px-4">
                            <div class="w-100">
                                <h5 class="card-title">PENGEMBALIAN</h5>
                                <h3 class="card-text">23</h3>
                                <a href="">Lihat Detail <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-end w-100 pr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" style="opacity: 20%" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                                </svg>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="column mx-2">
                <div class="card border-dark text-dark text-justify mb-3">
                    <div class="card-body bg-white">
                        <div class="d-flex py-4 px-4">
                            <div class="w-100">
                                <h5 class="card-title">PRODUK/BARANG</h5>
                                <h3 class="card-text">23</h3>
                                <a href="">Lihat Detail <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-flex align-items-center justify-content-end w-100 pr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" style="opacity: 20%" class="bi bi-box-seam" viewBox="0 0 16 16">
                                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                </svg>
                            </div>
                        </div>                   
                    </div>                
                </div>
            </div>
        </div> --}}
        <div class="content">
            <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-9 col-xl-4">
                    <a class="block block-link-shadow text-right py-4" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-users fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="{{ $kategori }}">{{ $kategori }}</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Kategori</div>
                        </div>
                    </a>
                </div>
                <div class="col-9 col-xl-4">
                    <a class="block block-link-shadow text-right py-4" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-bag fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="{{ $produk }}">{{ $produk }}</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Produk</div>
                        </div>
                    </a>
                </div>
                <div class="col-9 col-xl-4">
                    <a class="block block-link-shadow text-right py-4" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="{{ $paket }}">{{ $paket }}</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Paket</div>
                        </div>
                    </a>
                </div>
                <div class="col-9 col-xl-4">
                    <a class="block block-link-shadow text-right py-4" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-users fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="{{ $penyewaan }}">{{ $penyewaan }}</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Penyewaan</div>
                        </div>
                    </a>
                </div>
                <div class="col-9 col-xl-4">
                    <a class="block block-link-shadow text-right py-4" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000" data-to="780" class="js-count-to-enabled">780</span></div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Pendapatan</div>
                        </div>
                    </a>
                </div>
                <div class="col-9 col-xl-4">
                    <a class="block block-link-shadow text-right py-4" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="15">15</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Pesan Masuk</div>
                        </div>
                    </a>
                </div>
                <!-- END Row #1 -->
            </div>
        </div>
    </div>
</main>
    
@endsection