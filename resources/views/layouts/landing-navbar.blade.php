<nav class="bar bar--sm bg--dark pos-fixed" id="menu5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 hidden-xs hidden-sm">
                <div class="bar__module">
                    <a href="{{ asset('template') }}/index.html">
                        <img class="logo logo-dark" alt="logo" src="{{ asset('assets') }}/img/logo_paser_long.png" />
                        <img class="logo logo-light" alt="logo" src="{{ asset('assets') }}/img/logo_paser_long.png" />
                    </a>
                </div>
                <!--end module-->
            </div>
            <div class="col-lg-9 text-right text-left-xs">
                <div class="bar__module">
                    <ul class="menu-horizontal text-left">
                        <li class="dropdown">
                            <a href="/" class="@yield("active_beranda")"><span>Beranda</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="/profil-desa" class="@yield("active_profil")"><span>Profil Desa</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="/statistik-desa" class="@yield("active_statistik")"><span>Statistik Desa</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="/apb-desa" class="@yield("active_apb")"><span>APBDesa</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="/layanan-desa" class="@yield("active_layanan")"><span>Layanan Desa</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="/kabar-desa" class="@yield("active_kabar")"><span>Kabar Desa</span></a>
                        </li>
                    </ul>
                </div>
                <!--end module-->
                <div class="bar__module">
                    <a class="btn btn--sm btn--primary type--uppercase" href="/login">
                        <span class="btn__text">
                          Login
                        </span>
                    </a>
                </div>
                <!--end module-->
            </div>
            <!--end columns-->
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</nav>