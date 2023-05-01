<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Goethe Académie</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon" /> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.ico') }}" />

    <!-- <link rel="shortcut icon" href="" /> -->
    <style>
        @media only screen and (max-device-width: 915px) {
            .logo {
                width: 70%;
            }
        }

        @media only screen and (max-device-width: 915px) {
            .aboutM {
                margin-left: -150%;
                margin-top: -5%;
            }
        }

        @media only screen and (max-device-width: 915px) {
            .maps {
                width: 100%;
                height: 100%;
            }
        }

        /* #tab-1 #minimized {
            display: none;
        } */

        .background-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{ asset('img/recrutement.jpg') }});
        }
    </style>
    @livewireStyles

</head>

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('website.index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5 logo">
            <img src="{{ asset('img/logo.png') }}" class="m-0 d-inline" style="width: 60px" alt="" />

            <h2 class="m-0">Goethe Académie</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('website.index') }}"
                    class="nav-item nav-link {{ $activePage == 'index' ? 'active' : '' }}">Acceuil</a>
                <a href="{{ route('website.about') }}"
                    class="nav-item nav-link {{ $activePage == 'about' ? 'active' : '' }}">Qui sommes-nous</a>
                <a href="{{ route('website.courses') }}"
                    class="nav-item nav-link {{ $activePage == 'courses' ? 'active' : '' }}">Formations</a>
                <a href="{{ route('website.jobs') }}"
                    class="nav-item nav-link {{ $activePage == 'jobs' ? 'active' : '' }}">Recrutement</a>
                <a href="{{ route('website.contact') }}"
                    class="nav-item nav-link {{ $activePage == 'contact' ? 'active' : '' }}">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">REJOIGNEZ-NOUS<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    @yield('content')
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>Rue 15 octobre Souk
                        Lahad, Complexe<br />
                        Dorra bloc D, 3ème étage, Sousse, Tunisie
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>23 307 441 / 73 235 204
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>info@foursatouk-ila-allemagne.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="text-white mb-3">Horaire</h4>
                    <p>Lundi-Mardi </p>
                    <p>08:30 – 12:30</p>
                    <p class="mb-2">
                        13:00 – 17:00
                    </p>
                    <p class="mb-2">Samedi 08:30 – 14:00</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.360291333773!2d10.628592015115375!3d35.81563498016329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1302756f1215305b%3A0x42c4fc5be0efb3a9!2sAllround%20Job%20%26%20Formation!5e0!3m2!1sen!2stn!4v1680133956613!5m2!1sen!2stn"
                        width="600" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                        class="maps" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->

    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main.js') }}"></script> --}}
    @livewireScripts
</body>

</html>
