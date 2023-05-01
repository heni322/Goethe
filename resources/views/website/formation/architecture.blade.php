@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation Architecture
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 fs-6 col-md-12 w-50">
                    Cette formation requiert un esprit créatif doublé d’un intérêt marqué pour la technique. La création de
                    projets urbains ou de territoire en constitue l’activité centrale, et se complète par l’acquisition de
                    bases scientifiques solides. Des modules de culture générale, communication, économie et gestion sont
                    intégrés dans la formation.
                    <br />
                    Fortement ancrée dans le monde professionnel, elle favorise une ouverture sur les autres filières afin
                    de mieux collaborer entre les différents métiers.
                    <br />
                    À l’issue d’une formation en architecture, les étudiants sont aptes à concevoir et réaliser des espaces
                    intérieurs confortables, fonctionnels, harmonieux, tout en jonglant avec la luminosité, les volumes, le
                    mobilier et les matériaux. Ils savent aussi s’adapter aux contraintes budgétaires et techniques.
                    Les principaux traits de caractère requis sont l’écoute, la sensibilité, la créativité, la rigueur et la
                    technicité.
                    Voici dans le détail, trois types de formations accessibles :
                    La formation Concepteur en Architecture intérieure, qui repense l’agencement des espaces (cloisons et
                    aménagements à modifier pour améliorer l’accessibilité des lieux).
                    La formation Décorateur d’intérieur, qui redécore les espaces, les pièces en faisant preuve de
                    créativité et d’originalité tout en restant fidèle à la personnalité de ses clients.

                </div>
                <div class="col-lg-8 col-md-12 w-50">
                    <img src="{{ asset('goethe/architecture/Architecture.gif') }}" class="w-75" alt="">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 ml-5 w-50">
                    <img src="{{ asset('goethe/architecture/Architecture2.gif') }}" class="w-75" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
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
                </div>
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
