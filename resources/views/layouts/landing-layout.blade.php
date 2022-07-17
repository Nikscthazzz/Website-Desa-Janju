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
        <link href="{{ asset('aos/dist/aos.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
    
        <style>
            .dropdown .active {
                color: #4A90E2 !important;
            }
        </style>

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

            <section class="text-light py-3" style="background-color: #272D39">
                <div class="container">
                    <div class="row">     
                        <div class="col-md-4">
                            <h3 class="text-center text-light" style="font-weight: 700">Hubungi Kami</h3>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><i class="fas fa-map-marker-alt text-primary" style="font-size: 1.7em"></i></td>
                                        <td>Jl. Negara KM.10, RT.003, Kec. Tanah Grogot, Kab. Paser</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-envelope text-primary" style="font-size: 1.7em"></i></td>
                                        <td><a href="mailto:desajanjupaser@gmail.com" target="_blank">desajanjupaser@gmail.com</a></td>
                                    </tr>
                                    <tr>
                                        <td><i class="fas fa-phone text-primary"></i></td>
                                        <td>+62 812-4194-4616</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-center text-light" style="font-weight: 700">Jam Operasional</h3>
                            <ul>
                                <li>Senin - Kamis &nbsp;&nbsp;: 09.00 - 14.00 WITA</li>
                                <li>Jum'at&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 09.00 - 12.00 WITA</li>
                                <li>Sabtu - Minggu : Libur</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7995394497348!2d117.47727871453772!3d0.17580019987174023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a13b88782fc33%3A0x3d1268b99cbdcfe8!2sGuntung%2C%20Kec.%20Bontang%20Utara%2C%20Kota%20Bontang%2C%20Kalimantan%20Timur%2075321!5e0!3m2!1sid!2sid!4v1657797873224!5m2!1sid!2sid" width="200" height="200" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <footer class="footer-7 text-center-xs bg--primary  ">
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
        <script src="{{ asset('aos/dist/aos.js') }}"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="{{ asset('counter/jquery.counterup.min.js') }}"></script>
        <script>
            AOS.init();
        </script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

       
        @yield('script')
    </body>
</html>