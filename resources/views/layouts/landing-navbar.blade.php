<div class="nav-container ">
  <div class="bar bar--sm visible-xs">
      <div class="container">
          <div class="row">
              <div class="col-3 col-md-2">
                  <a href="{{ asset('template') }}/index.html">
                      <img class="logo logo-dark" alt="logo" src="{{ asset('assets') }}/img/logo_paser_long.png" />
                      <img class="logo logo-light" alt="logo" src="{{ asset('assets') }}/img/logo_paser_long.png" />
                  </a>
              </div>
              <div class="col-9 col-md-10 text-right">
                  <a href="{{ asset('template') }}#"/ class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                      <i class="icon icon--sm stack-interface stack-menu"></i>
                  </a>
              </div>
          </div>
          <!--end of row-->
      </div>
      <!--end of container-->
  </div>
  <!--end bar-->
  <nav id="menu1" class="bar bar--sm bar-1 hidden-xs bar--absolute bar--transparent">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-2 hidden-xs">
                  <div class="bar__module">
                      <a href="{{ asset('template') }}/index.html">
                          <img class="logo logo-dark" alt="logo" src="{{ asset('assets') }}/img/logo_paser_long.png" />
                          <img class="logo logo-light" alt="logo" src="{{ asset('assets') }}/img/logo_paser_long.png" />
                      </a>
                  </div>
                  <!--end module-->
              </div>
              <div class="col-lg-8 col-md-12 text-right text-left-xs text-left-sm">
                  <div class="bar__module">
                      <ul class="menu-horizontal text-left">
                          <li class="dropdown">
                              <a href="/"><span>Beranda</span></a>
                          </li>
                          <li class="dropdown">
                              <a href="/profil-desa"><span>Profil Desa</span></a>
                          </li>
                          <li class="dropdown">
                              <a href="/statistik-desa"><span>Statistik Desa</span></a>
                          </li>
                          <li class="dropdown">
                              <a href="/apb-desa"><span>APBDesa</span></a>
                          </li>
                          <li class="dropdown">
                              <a href="/layanan-desa"><span>Layanan</span></a>
                          </li>
                          <li class="dropdown">
                              <a href="/kabar-desa"><span>Kabar Desa</span></a>
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
          </div>
          <!--end of row-->
      </div>
      <!--end of container-->
  </nav>
  <!--end bar-->
</div>