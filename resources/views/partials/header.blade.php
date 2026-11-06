
<!-- TOP BAR -->
<div class="top-header">
    <div class="container">
        <div class="top-header-left">
            <i class="fa fa-calendar"></i>
            {{ now()->locale('id')->translatedFormat('l, d F Y') }},
            pukul {{ now()->format('H.i') }} WIB
        </div>

        <div class="top-header-right">
            <i class="fa fa-map-marker"></i>
            Toko (Nama Toko), Jl. Cempaka No. 88,
            Patokan, Sukadamai, Kec. Rahayu,
            Kab. Lembah Indah, Jawa Timur 65432
        </div>
    </div>
</div>

<!-- HEADER UTAMA -->
<header class="main-header">
    <div class="container">
        <div class="row header-content">

            <!-- LOGO -->
            <div class="col-md-2 col-sm-3 col-xs-4">
                <a href="{{ url('/') }}" class="logo">
                    <img
                        src="{{ asset('../assets/user/img/umkm.png') }}"
                        alt="Logo UMKM"
                        class="img-responsive">
                </a>
            </div>

            <!-- SEARCH -->
            <div class="col-md-5 col-sm-5 col-xs-8">
                <form action="#" method="GET" class="header-search">
                    <input
                        type="text"
                        name="keyword"
                        placeholder="Cari Produk..."
                        autocomplete="off">

                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <!-- KERANJANG DAN KONTAK -->
            <div class="col-md-5 col-sm-4 col-xs-12 header-action">

                <a href="#" class="header-cart">
                    <span class="cart-icon">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </span>
                    <span>Keranjang</span>
                </a>

                <a href="https://wa.me/6281234567890"
                   target="_blank"
                   class="btn-contact">
                    Hubungi Kami
                </a>

            </div>

        </div>
    </div>
</header>

<!-- NAVIGATION -->
<nav class="main-navigation">
    <div class="container">
        <ul class="nav-menu">

            <li class="active">
                <a href="{{ url('/') }}">Beranda</a>
            </li>

            <li>
                <a href="#">Produk</a>
            </li>

            <li class="dropdown">
                <a href="#">
                    Kategori Produk
                    <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Alat Tulis</a></li>
                    <li><a href="#">Tinta</a></li>
                    <li><a href="#">Komputer</a></li>
                    <li><a href="#">Berkas</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#">
                    Lainnya
                    <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Visi dan Misi</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
