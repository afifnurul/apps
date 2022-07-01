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
                <div class="col-6 col-xl-3">
                    <a class="block block-link-shadow text-right" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-bag fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="1500">1500</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-shadow text-right" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000" data-to="780" class="js-count-to-enabled">780</span></div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-shadow text-right" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="15">15</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-shadow text-right" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-users fa-3x text-body-bg-dark"></i>
                            </div>
                            <div class="font-size-h3 font-w600 js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="4252">4252</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                        </div>
                    </a>
                </div>
                <!-- END Row #1 -->
            </div>
            <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <!-- Row #2 -->
                <div class="col-md-6">
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">
                                Sales <small>This week</small>
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="pull-all"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <canvas class="js-chartjs-dashboard-lines chartjs-render-monitor" style="display: block; height: 229px; width: 458px;" width="916" height="458"></canvas>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <div class="col-6 col-sm-4 text-center text-sm-left">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                    <div class="font-size-h4 font-w600">720</div>
                                    <div class="font-w600 text-success">
                                        <i class="fa fa-caret-up"></i> +16%
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 text-center text-sm-left">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                    <div class="font-size-h4 font-w600">160</div>
                                    <div class="font-w600 text-danger">
                                        <i class="fa fa-caret-down"></i> -3%
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 text-center text-sm-left">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                                    <div class="font-size-h4 font-w600">24.3</div>
                                    <div class="font-w600 text-success">
                                        <i class="fa fa-caret-up"></i> +9%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">
                                Earnings <small>This week</small>
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="pull-all"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                <canvas class="js-chartjs-dashboard-lines2 chartjs-render-monitor" width="916" height="458" style="display: block; height: 229px; width: 458px;"></canvas>
                            </div>
                        </div>
                        <div class="block-content bg-white">
                            <div class="row items-push">
                                <div class="col-6 col-sm-4 text-center text-sm-left">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                    <div class="font-size-h4 font-w600">$ 6,540</div>
                                    <div class="font-w600 text-success">
                                        <i class="fa fa-caret-up"></i> +4%
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 text-center text-sm-left">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                    <div class="font-size-h4 font-w600">$ 1,525</div>
                                    <div class="font-w600 text-danger">
                                        <i class="fa fa-caret-down"></i> -7%
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 text-center text-sm-left">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                                    <div class="font-size-h4 font-w600">$ 9,352</div>
                                    <div class="font-w600 text-success">
                                        <i class="fa fa-caret-up"></i> +35%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Row #2 -->
            </div>
            <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <!-- Row #3 -->
                <div class="col-md-4">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center">
                                <div class="mb-20">
                                    <i class="fa fa-envelope-open fa-4x text-primary"></i>
                                </div>
                                <div class="font-size-h4 font-w600">9.25k Subscribers</div>
                                <div class="text-muted">Your main list is growing!</div>
                                <div class="pt-20">
                                    <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                        <i class="fa fa-cog mr-5"></i> Manage list
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center">
                                <div class="mb-20">
                                    <i class="fa fa-twitter fa-4x text-info"></i>
                                </div>
                                <div class="font-size-h4 font-w600">+36 followers</div>
                                <div class="text-muted">You are doing great!</div>
                                <div class="pt-20">
                                    <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                                        <i class="fa fa-users mr-5"></i> Check them out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center">
                                <div class="mb-20">
                                    <i class="fa fa-check fa-4x text-success"></i>
                                </div>
                                <div class="font-size-h4 font-w600">Business Plan</div>
                                <div class="text-muted">This is your current active plan</div>
                                <div class="pt-20">
                                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                        <i class="fa fa-arrow-up mr-5"></i> Upgrade to VIP
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Row #3 -->
            </div>
            <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <!-- Row #4 -->
                <div class="col-md-6">
                    <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <i class="si si-briefcase fa-2x text-body-bg-dark"></i>
                            <div class="row py-20">
                                <div class="col-6 text-right border-r">
                                    <div class="js-appear-enabled animated fadeInLeft" data-toggle="appear" data-class="animated fadeInLeft">
                                        <div class="font-size-h3 font-w600">16</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
                                        <div class="font-size-h3 font-w600">2</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                        <div class="block-content block-content-full">
                            <div class="text-right">
                                <i class="si si-users fa-2x text-body-bg-dark"></i>
                            </div>
                            <div class="row py-20">
                                <div class="col-6 text-right border-r">
                                    <div class="js-appear-enabled animated fadeInLeft" data-toggle="appear" data-class="animated fadeInLeft">
                                        <div class="font-size-h3 font-w600 text-info">63250</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Accounts</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
                                        <div class="font-size-h3 font-w600 text-success">97%</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Row #4 -->
            </div>
            <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
                <!-- Row #5 -->
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-link-shadow text-center" href="be_pages_generic_inbox.html">
                        <div class="block-content ribbon ribbon-bookmark ribbon-success ribbon-left">
                            <div class="ribbon-box">15</div>
                            <p class="mt-5">
                                <i class="si si-envelope-letter fa-3x"></i>
                            </p>
                            <p class="font-w600">Inbox</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-link-shadow text-center" href="be_pages_generic_profile.html">
                        <div class="block-content">
                            <p class="mt-5">
                                <i class="si si-user fa-3x"></i>
                            </p>
                            <p class="font-w600">Profile</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-link-shadow text-center" href="be_pages_forum_categories.html">
                        <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
                            <div class="ribbon-box">3</div>
                            <p class="mt-5">
                                <i class="si si-bubbles fa-3x"></i>
                            </p>
                            <p class="font-w600">Forum</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-link-shadow text-center" href="be_pages_generic_search.html">
                        <div class="block-content">
                            <p class="mt-5">
                                <i class="si si-magnifier fa-3x"></i>
                            </p>
                            <p class="font-w600">Search</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-link-shadow text-center" href="be_comp_charts.html">
                        <div class="block-content">
                            <p class="mt-5">
                                <i class="si si-bar-chart fa-3x"></i>
                            </p>
                            <p class="font-w600">Live Stats</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <a class="block block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="mt-5">
                                <i class="si si-settings fa-3x"></i>
                            </p>
                            <p class="font-w600">Settings</p>
                        </div>
                    </a>
                </div>
                <!-- END Row #5 -->
            </div>
        </div>
    </div>
</main>
    
@endsection