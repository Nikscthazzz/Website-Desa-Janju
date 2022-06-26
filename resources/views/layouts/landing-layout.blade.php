<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Website Resmi Desa Janju Kecamatan Tanah Grogot</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="{{ asset('template') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('template') }}/https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="{{ asset('template') }}/https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo_paser.png') }}">

        <link rel="stylesheet" href="{{ asset('template/fontawesome/css/all.min.css') }}">
        @yield('css')
    </head>
    <body class=" ">
        <a id="start"></a>
        {{-- NAV CONTAINER --}}
        @include("layouts.landing-navbar")
        {{-- END NAV CONTAINER --}}

        {{-- MAIN CONTAINER --}}
        <div class="main-container">

            @yield('content')

            <footer class="footer-7 text-center-xs bg--secondary  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> Desa Janju Kecamatan Tanah Grogot &mdash; All Rights Reserved</span>
                        </div>
                        <div class="col-md-6 text-right text-center-xs">
                            <ul class="social-list list-inline">
                                <li>
                                    <a href="{{ asset('template') }}#">
                                        <i class="socicon socicon-google icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('template') }}#">
                                        <i class="socicon socicon-twitter icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('template') }}#">
                                        <i class="socicon socicon-facebook icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('template') }}#">
                                        <i class="socicon socicon-instagram icon icon--xs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>
        </div>
        {{-- END MAIN CONTAINER --}}
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" style="background-color: #43E762; font-size: 1.2em; text-decoration: none" target="_blank" href="https://wa.me/+6281241944616?text=%20ADAKAH%20LOVINTA" data-scroll-class="1vh:active">
            <i class="socicon socicon-whatsapp" style="font-size: 2em; color: white"></i>
        </a>
        <script src="{{ asset('template') }}/js/jquery-3.1.1.min.js"></script>
        <script src="{{ asset('template') }}/js/flickity.min.js"></script>
        <script src="{{ asset('template') }}/js/easypiechart.min.js"></script>
        <script src="{{ asset('template') }}/js/parallax.js"></script>
        <script src="{{ asset('template') }}/js/typed.min.js"></script>
        <script src="{{ asset('template') }}/js/datepicker.js"></script>
        <script src="{{ asset('template') }}/js/isotope.min.js"></script>
        <script src="{{ asset('template') }}/js/ytplayer.min.js"></script>
        <script src="{{ asset('template') }}/js/lightbox.min.js"></script>
        <script src="{{ asset('template') }}/js/granim.min.js"></script>
        <script src="{{ asset('template') }}/js/jquery.steps.min.js"></script>
        <script src="{{ asset('template') }}/js/countdown.min.js"></script>
        <script src="{{ asset('template') }}/js/twitterfetcher.min.js"></script>
        <script src="{{ asset('template') }}/js/spectragram.min.js"></script>
        <script src="{{ asset('template') }}/js/smooth-scroll.min.js"></script>
        <script src="{{ asset('template') }}/js/scripts.js"></script>
        <script src="{{ asset('template/fontawesome/js/all.min.js') }}"></script>

        @yield('script')
    </body>
</html>