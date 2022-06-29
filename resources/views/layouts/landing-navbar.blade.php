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
                              {{-- <span class="dropdown__trigger">Home</span> --}}
                              <a href="/"><span>Beranda</span></a>
                              {{-- <div class="dropdown__container">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-12 dropdown__content dropdown__content--lg">
                                              <div class="pos-absolute col-lg-5 imagebg hidden-sm hidden-xs" data-overlay="4">
                                                  <div class="background-image-holder">
                                                      <img alt="background" src="{{ asset('template') }}/img/dropdown-1.jpg" />
                                                  </div>
                                                  <div class="container pos-vertical-center pl-5">
                                                      <div class="row">
                                                          <div class="col-lg-8">
                                                              <img alt="Logo" src="{{ asset('template') }}/img/logo-light.png" class="image--xxs" />
                                                              <span class="h2 color--white">Beautiful, modular sites in moments.</span>
                                                              <a href="{{ asset('template') }}#"/ class="btn btn--primary type--uppercase">
                                                                  <span class="label">$18 USD.</span>
                                                                  <span class="btn__text">
                                                                      Purchase Stack Now
                                                                  </span>
                                                              </a>
                                                          </div>
                                                      </div>
                                                      <!--end of row-->
                                                  </div>
                                              </div>
                                              <div class="row justify-content-end">
                                                  <div class="col-lg-6">
                                                      <div class="row">
                                                          <div class="col-lg-4">
                                                              <h5>Industries</h5>
                                                              <ul class="menu-vertical">
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-accommodation.html">
                                                                          Accommodation
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-construction.html">
                                                                          Construction
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-coworking.html">
                                                                          Coworking
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-drone-photography.html">
                                                                          Drone Photography
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-education.html">
                                                                          Education
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-event.html">
                                                                          Event
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-fitness.html">
                                                                          Fitness
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-health-insurance.html">
                                                                          Insurance
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-knowledge-base.html">
                                                                          Knowledge Base
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-musician.html">
                                                                          Musician
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-nonprofit.html">
                                                                          Nonprofit
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-political.html">
                                                                          Political
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-restaurant.html">
                                                                          Restaurant
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-recruitment.html">
                                                                          Recruitment
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-tourism.html">
                                                                          Tourism
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-wedding.html">
                                                                          Wedding
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <div class="col-lg-4">
                                                              <h5>Landing Pages</h5>
                                                              <ul class="menu-vertical">
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-1.html">
                                                                          Landing 1
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-2.html">
                                                                          Landing 2
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-3.html">
                                                                          Landing 3
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-4.html">
                                                                          Landing 4
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-5.html">
                                                                          Landing 5
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-6.html">
                                                                          Landing 6
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-7.html">
                                                                          Landing 7
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-8.html">
                                                                          Landing 8
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-9.html">
                                                                          Landing 9
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-landing-10.html">
                                                                          Landing 10
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-software-1.html">
                                                                          Software 1
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-software-2.html">
                                                                          Software 2
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-software-3.html">
                                                                          Software 3
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-crypto.html">
                                                                          Crypto
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <div class="col-lg-4">
                                                              <h5>Portfolios</h5>
                                                              <ul class="menu-vertical">
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-agency-1.html">
                                                                          Agency
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-agency-2.html">
                                                                          Agency 2
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-personal-1.html">
                                                                          Personal 1
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-photography.html">
                                                                          Photography
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-photography-2.html">
                                                                          Photography 2
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-studio-1.html">
                                                                          Studio 1
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-studio-2.html">
                                                                          Studio 2
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-portfolio-video.html">
                                                                          Video
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                                              <h5>Coming Soon</h5>
                                                              <ul class="menu-vertical">
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-coming-soon-1.html">
                                                                          Coming Soon 1
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-coming-soon-2.html">
                                                                          Coming Soon 2
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/home-coming-soon-3.html">
                                                                          Coming Soon 3
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                      <!--end of row-->
                                                  </div>
                                                  <!--end of col-->
                                              </div>
                                              <!--end of row-->
                                          </div>
                                          <!--end dropdown content-->
                                      </div>
                                  </div>
                              </div> --}}
                              <!--end dropdown container-->
                          </li>
                          {{-- <li class="dropdown">
                              <span class="dropdown__trigger">Pages</span>
                              <div class="dropdown__container">
                                  <div class="container">
                                      <div class="row">
                                          <div class="dropdown__content col-lg-2 col-md-4">
                                              <ul class="menu-vertical">
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">About</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-about-company.html">
                                                                                  About Company
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-about-team.html">
                                                                                  About Team
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-about-me.html">
                                                                                  About Me
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-about-history.html">
                                                                                  About History
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Careers</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-careers.html">
                                                                                  Careers Listing
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-careers-single.html">
                                                                                  Career Single
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Contact</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-contact-map-1.html">
                                                                                  Contact Map 1
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-contact-map-2.html">
                                                                                  Contact Map 2
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-contact-map-3.html">
                                                                                  Contact Map 3
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-contact-map-4.html">
                                                                                  Contact Map 4
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-contact-planner-1.html">
                                                                                  Contact Planner 1
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-contact-planner-2.html">
                                                                                  Contact Planner 2
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Pricing</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-pricing-1.html">
                                                                                  Pricing Plans 1
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-pricing-2.html">
                                                                                  Pricing Plans 2
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-pricing-3.html">
                                                                                  Pricing Plans 3
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Services</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-services-1.html">
                                                                                  Services 1
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-services-2.html">
                                                                                  Services 2
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-services-3.html">
                                                                                  Services 3
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown separate">
                                                      <span class="dropdown__trigger">Accounts</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-accounts-profile.html">
                                                                                  Public Profile
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-accounts-settings.html">
                                                                                  Account Settings
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-accounts-login-1.html">
                                                                                  Login Simple
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-accounts-login-2.html">
                                                                                  Login Social
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-accounts-create-1.html">
                                                                                  Create Simple
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-accounts-create-2.html">
                                                                                  Create Social
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-accounts-recover.html">
                                                                                  Recover Account
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Utilities</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-utility-conversation.html">
                                                                                  Conversation
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/404.html">
                                                                                  Error 404
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/500.html">
                                                                                  Error 500
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-utility-maintnence.html">
                                                                                  Maintnence Mode
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-utility-onboarding.html">
                                                                                  Onboarding
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-utility-search-results-list.html">
                                                                                  Search Results List
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/page-utility-search-results.html">
                                                                                  Search Results Boxes
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                              </ul>
                                          </div>
                                          <!--end dropdown content-->
                                      </div>
                                      <!--end row-->
                                  </div>
                              </div>
                              <!--end dropdown container-->
                          </li>
                          <li class="dropdown">
                              <span class="dropdown__trigger">Blog</span>
                              <div class="dropdown__container">
                                  <div class="container">
                                      <div class="row">
                                          <div class="dropdown__content col-lg-2 col-md-4">
                                              <ul class="menu-vertical">
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Articles</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-articles-list.html">
                                                                                  Simple List
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-articles-list-minimal.html">
                                                                                  Minimal List
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-articles-magazine.html">
                                                                                  Magazine
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-articles-cards.html">
                                                                                  Cards
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-articles-cards-sidebar.html">
                                                                                  Cards Sidebar
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Post Single</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-post-single.html">
                                                                                  Standard Post
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-post-audio-single.html">
                                                                                  Audio Post
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-post-image-single.html">
                                                                                  Image Post
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/blog-post-video-single.html">
                                                                                  Video Post
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                              </ul>
                                          </div>
                                          <!--end dropdown content-->
                                      </div>
                                      <!--end row-->
                                  </div>
                              </div>
                              <!--end dropdown container-->
                          </li>
                          <li class="dropdown">
                              <span class="dropdown__trigger">Shop</span>
                              <div class="dropdown__container">
                                  <div class="container">
                                      <div class="row">
                                          <div class="dropdown__content col-lg-2 col-md-4">
                                              <ul class="menu-vertical">
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Shop Standard</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-2col.html">
                                                                                  2 Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-3col.html">
                                                                                  3 Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-4col.html">
                                                                                  4 Columns
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Shop Tiles</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-2col-tiles.html">
                                                                                  2 Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-3col-tiles.html">
                                                                                  3 Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-4col-tiles.html">
                                                                                  4 Columns
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Product Singles</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-product-1.html">
                                                                                  Product Simple
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/shop-product-2.html">
                                                                                  Product Detailed
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="separate">
                                                      <a href="{{ asset('template') }}/shop-cart.html">
                                                          Cart Overview
                                                      </a>
                                                  </li>
                                                  <li class="">
                                                      <a href="{{ asset('template') }}/shop-checkout.html">
                                                          Checkout
                                                      </a>
                                                  </li>
                                                  <li class="">
                                                      <a href="{{ asset('template') }}/shop-terms.html">
                                                          Terms
                                                      </a>
                                                  </li>
                                              </ul>
                                          </div>
                                          <!--end dropdown content-->
                                      </div>
                                      <!--end row-->
                                  </div>
                              </div>
                              <!--end dropdown container-->
                          </li>
                          <li class="dropdown">
                              <span class="dropdown__trigger">Portfolio</span>
                              <div class="dropdown__container">
                                  <div class="container">
                                      <div class="row">
                                          <div class="dropdown__content col-lg-2 col-md-4">
                                              <ul class="menu-vertical">
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Titles Outside</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-one-1col.html">
                                                                                  One Column
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-one-2col.html">
                                                                                  Two Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-one-3col.html">
                                                                                  Three Columns
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Titles Inside</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-two-1col.html">
                                                                                  One Column
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-two-2col.html">
                                                                                  Two Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-two-3col.html">
                                                                                  Three Columns
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Titles Hover</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-three-1col.html">
                                                                                  One Column
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-three-2col.html">
                                                                                  Two Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-three-3col.html">
                                                                                  Three Columns
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Fullwidth</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-four-2col.html">
                                                                                  Two Columns
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-four-3col.html">
                                                                                  Three Columns
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown separate">
                                                      <span class="dropdown__trigger">Case Studies</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-case-study-1.html">
                                                                                  Case Study 1
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-case-study-2.html">
                                                                                  Case Study 2
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-case-study-3.html">
                                                                                  Case Study 3
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                                  <li class="dropdown">
                                                      <span class="dropdown__trigger">Single Projects</span>
                                                      <div class="dropdown__container">
                                                          <div class="container">
                                                              <div class="row">
                                                                  <div class="dropdown__content col-lg-2 col-md-4">
                                                                      <ul class="menu-vertical">
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-single-1.html">
                                                                                  Project Single 1
                                                                              </a>
                                                                          </li>
                                                                          <li>
                                                                              <a href="{{ asset('template') }}/portfolio-single-2.html">
                                                                                  Project Single 2
                                                                              </a>
                                                                          </li>
                                                                      </ul>
                                                                  </div>
                                                                  <!--end dropdown content-->
                                                              </div>
                                                              <!--end row-->
                                                          </div>
                                                      </div>
                                                      <!--end dropdown container-->
                                                  </li>
                                              </ul>
                                          </div>
                                          <!--end dropdown content-->
                                      </div>
                                      <!--end row-->
                                  </div>
                              </div>
                              <!--end dropdown container-->
                          </li>
                          <li class="dropdown">
                              <span class="dropdown__trigger">Blocks</span>
                              <div class="dropdown__container">
                                  <div class="container">
                                      <div class="row">
                                          <div class="dropdown__content dropdown__content--lg col-lg-8">
                                              <div class="pos-absolute col-lg-5 imagebg hidden-sm hidden-xs" data-overlay="6">
                                                  <div class="background-image-holder">
                                                      <img alt="background" src="{{ asset('template') }}/img/inner-6.jpg" />
                                                  </div>
                                                  <div class="container pos-vertical-center pl-5">
                                                      <div class="row">
                                                          <div class="col-lg-10">
                                                              <img alt="Logo" src="{{ asset('template') }}/img/logo-light.png" class="image--xxs" />
                                                              <span class="h3 color--white">Over 290 modular interface blocks.</span>
                                                              <a href="{{ asset('template') }}#"/ class="btn btn--primary type--uppercase">
                                                                  <span class="btn__text">
                                                                      Launch Builder
                                                                  </span>
                                                              </a>
                                                          </div>
                                                      </div>
                                                      <!--end of row-->
                                                  </div>
                                              </div>
                                              <div class="row justify-content-end">
                                                  <div class="col-lg-6">
                                                      <div class="row">
                                                          <div class="col-md-6">
                                                              <ul class="menu-vertical">
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-accordions.html">
                                                                          Accordions
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-cta.html">
                                                                          Calls To Action
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-cards.html">
                                                                          Cards
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-covers.html">
                                                                          Covers
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-features-small.html">
                                                                          Features Small
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-features-large.html">
                                                                          Features Large
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-contact.html">
                                                                          Forms Contact
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-signup.html">
                                                                          Forms Signup
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-subscribe.html">
                                                                          Forms Subscribe
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-footers.html">
                                                                          Footers
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-galleries.html">
                                                                          Galleries
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-instagram.html">
                                                                          Instagram
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-maps.html">
                                                                          Maps
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <ul class="menu-vertical">
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-modals.html">
                                                                          Modals
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-navigation.html">
                                                                          Navigation Bars
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-notifications.html">
                                                                          Notifications
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-pricing.html">
                                                                          Pricing
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-processes.html">
                                                                          Processes
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-sliders.html">
                                                                          Sliders
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-twitter.html">
                                                                          Twitter
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-tabs.html">
                                                                          Tabs
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-team.html">
                                                                          Teams
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-testimonials.html">
                                                                          Testimonials
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-text-layouts.html">
                                                                          Text Layouts
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-titles.html">
                                                                          Titles
                                                                      </a>
                                                                  </li>
                                                                  <li>
                                                                      <a href="{{ asset('template') }}/sections-videos.html">
                                                                          Videos
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                                          </div>
                                                      </div>
                                                      <!--end of row-->
                                                  </div>
                                                  <!--end of col-->
                                              </div>
                                              <!--end of row-->
                                          </div>
                                          <!--end dropdown content-->
                                      </div>
                                      <!--end row-->
                                  </div>
                                  <!--end container-->
                              </div>
                              <!--end dropdown container-->
                          </li>
                          <li class="dropdown">
                              <span class="dropdown__trigger">Elements</span>
                              <div class="dropdown__container">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-12 dropdown__content dropdown__content--lg">
                                              <div class="pos-absolute col-lg-5 imagebg hidden-sm hidden-xs" data-overlay="4">
                                                  <div class="background-image-holder">
                                                      <img alt="background" src="{{ asset('template') }}/img/dropdown-2.jpg" />
                                                  </div>
                                                  <div class="container pos-vertical-center pl-5">
                                                      <div class="row">
                                                          <div class="col-lg-8">
                                                              <img alt="Logo" src="{{ asset('template') }}/img/logo-light.png" class="image--xxs" />
                                                              <span class="h3 color--white">Detailed and organised elements</span>
                                                              <a href="{{ asset('template') }}/elements.html" class="btn btn--primary type--uppercase">
                                                                  <span class="btn__text">
                                                                      Explore Elements
                                                                  </span>
                                                              </a>
                                                          </div>
                                                      </div>
                                                      <!--end of row-->
                                                  </div>
                                              </div>
                                              <div class="row justify-content-end">
                                                  <div class="col-lg-2 col-md-4">
                                                      <ul class="menu-vertical">
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-accordions.html">
                                                                  Accordions
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-alerts.html">
                                                                  Alerts
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-boxes.html">
                                                                  Boxes
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-buttons.html">
                                                                  Buttons
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-colors.html">
                                                                  Colors
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-countdown.html">
                                                                  Countdown
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-dropdowns.html">
                                                                  Dropdowns
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-form-elements.html">
                                                                  Form Elements
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-gradient-backgrounds.html">
                                                                  Gradient Backgrounds
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-grid.html">
                                                                  Grid System
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-image-backgrounds.html">
                                                                  Image Backgrounds
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-instagram.html">
                                                                  Instagram
                                                              </a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="col-lg-2 col-md-4">
                                                      <ul class="menu-vertical">
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-lightbox.html">
                                                                  Lightbox
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-maps.html">
                                                                  Maps
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-masonry.html">
                                                                  Masonry
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-modals.html">
                                                                  Modals
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-navigation.html">
                                                                  Navigation Bars
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-navigation-inpage.html">
                                                                  Navigation In-Page
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-navigation-sidebar.html">
                                                                  Navigation Sidebar
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-notifications.html">
                                                                  Notifications
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-parallax.html">
                                                                  Parallax
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-pricing.html">
                                                                  Pricing
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-progress-bars.html">
                                                                  Progress Bars
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-radials.html">
                                                                  Radials
                                                              </a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                                  <div class="col-lg-2 col-md-4">
                                                      <ul class="menu-vertical">
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-scrims-overlays.html">
                                                                  Scrims &amp; Overlays
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-sliders.html">
                                                                  Sliders
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-tables.html">
                                                                  Tables
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-tabs.html">
                                                                  Tabs
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-tooltips.html">
                                                                  Tooltips
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-twitter.html">
                                                                  Twitter Feed
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-typed-text.html">
                                                                  Typed Text
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-typography.html">
                                                                  Typography
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-video-background.html">
                                                                  Video Backgrounds
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-video-inline.html">
                                                                  Video Inline
                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="{{ asset('template') }}/elements-wizards.html">
                                                                  Wizards
                                                              </a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <!--end of row-->
                                          </div>
                                          <!--end dropdown content-->
                                      </div>
                                  </div>
                              </div>
                              <!--end dropdown container-->
                          </li> --}}
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