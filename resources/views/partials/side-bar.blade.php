<div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-modern main-content-boxed">
    <nav id="sidebar">
        <div class="sidebar-content">
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="{{ asset('img/gatronav1.png') }}" alt="">
                </div>
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="{{ route('admin.home') }}">
                        <img class="img-avatar" src="{{ asset('img/gatronav1.png') }}" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="{{ route('admin.home') }}">Gatro Dekorasi</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a href="{{ route('admin.home') }}" class="{{ Request::is('admin') ? 'active' : '' }}"><i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('admin.profile') }}" class="{{ Request::is('admin/profile') ? 'active' : '' }}"><i class="fa fa-user-circle"></i><span class="sidebar-mini-hide">Profile</span></a>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-handbag"></i><span class="sidebar-mini-hide">Produk</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Kategori</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="si si-basket"></i><span class="sidebar-mini-hide">Pesananan</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-exchange"></i><span class="sidebar-mini-hide">Pengembalian</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i><span class="sidebar-mini-hide">Galeri</span></a>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Laporan</span></a>
                        <ul>
                            <li>
                                <a href="be_forms_elements_bootstrap.html">Transaksi Penyewaan</a>
                            </li>
                            <li>
                                <a href="be_forms_elements_material.html">Transaksi Pengembalian</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                    <li>
                        <a href="#"><i class="si si-logout"></i><span class="sidebar-mini-hide">Logout</span></a>
                    </li>                    
                </ul>
            </div>
        </div>
    </nav>
</div>