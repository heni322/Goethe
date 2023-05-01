@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation Infographie
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 fs-6 col-md-12 w-50">
                    La formation en design graphique, vise à développer les connaissance, les compétences, les techniques
                    nécessaires pour créer des visuels professionnel pour le web et le print, en utilisant les logiciel de
                    traitement d’images les plus connue au monde entier.


                    <br />
                    La suite Adobe Photoshop et Illustrator. Vous apprendrez lors de cette formation design web, des
                    conceptions de tous supports de communication visuelle (Affiche, flyer, carte de visite, dépliant… )
                    Ainsi que la retouches et traitement des images. Un graphiste doit entre autre maitriser l’utilisation
                    des logiciel de traitement des images et création graphique, Photoshop et Illustrator essentiellement.
                    Dans cette formation infographie vous étudier aussi l’adaptation des maquette sur différent support.
                    <br />
                    La différence entre l’infographie pour photographie, le design pour communication et print, ainsi que
                    l’infographie pour le web (web design). Vous serez également formé à promouvoir votre carrière en tant
                    que freelance ou salarié.
                </div>
                <div class="col-lg-8 col-md-12 w-50">
                    <img src="{{ asset('goethe/infographie/infographie2.gif') }}" class="w-75" alt="">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 ml-5 w-50">
                    <div class="fs-4 mb-4">Pourquoi se fait la formation :</div>
                    Que vous êtes chercher d’emploi, salarié ou self employer, notre formation design graphique vous offrira
                    le plus pour votre carrière par la variété de leurs domaines d’application (Communication, édition,
                    publicité, identité visuelle…).
                    <br />
                    Notre formation accéléré en infographie comporte à la fois des formateurs créatifs et professionnels,
                    reste ouverte à toute personne motivée et passionnée par ce secteur artistique, sans restriction de
                    niveau (bac ou sans bac)
                    <br />
                    Tout au long de votre formation deviner graphiste designer, vous serez accompagné par nos formateurs
                    certifiés et créatives pour garantir la maitrise des logiciels de référence et des techniques de
                    traitement d’image et de communication visuelle.
                    <br />
                    Le programme de notre formation design graphique est segmenté en petites unités afin de faciliter
                    l’apprentissage, il vous permettra de découvrir le technique de métier, mais aussi les astuces acquis a
                    travers des exercices et cas pratiques.
                </div>
                <div class="col-lg-6 col-md-12 ml-5 w-50">
                    <img src="{{ asset('goethe/infographie/infographie.gif') }}" class="w-75" alt="">
                </div>
                {{-- <div class="col-lg-6 col-md-12 w-50">
                    <div class="bg-white mt-3 mb-5 fs-5" style="color:black">
                        Objectif de la formation :
                    </div>
                    <div class="row gy-2 gx-4 mb-5">
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Formation orientée pratique avec l’appui
                                de professeurs et de professionnels, locaux et internationaux.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Équipements de pointe.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Expérience à l’étranger via les
                                programmes d’études proposés par le centre.
                            </p>
                        </div>
                        <div class="col-sm-10">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Développement de compétences propres au
                                métier d’architecte d’intérieur.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Création des espaces qui correspondent aux besoins des clients.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Amélioration de vos compétences en gestion de projet
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Acquérir une culture artistique
                                .
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
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
    <script src="{{ asset('js/main.js') }}"></script>
@endsection()
