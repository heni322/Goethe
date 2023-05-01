@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation Informatique
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 fs-6 col-md-12 w-50">
                    La formation peut commencer par une introduction aux principes de base du développement de sites web, y
                    compris la conception de l'interface utilisateur, le choix d'un hébergeur web et la configuration de
                    domaines et d'adresses électroniques. Les apprenants pourraient également apprendre les bases de la
                    programmation web et des langages tels que HTML, CSS et JavaScript.
                    <br />
                    Ensuite, la formation pourrait se concentrer sur des sujets spécifiques tels que le référencement
                    naturel (SEO), le marketing des réseaux sociaux, la publicité en ligne, l'analyse de données et les
                    tests de site pour améliorer les taux de conversion. Les apprenants pourraient également être formés sur
                    la sécurité informatique pour protéger les données des clients et éviter les attaques malveillantes.
                    <br />
                    La formation peut inclure des travaux pratiques, des projets de groupe, des évaluations de connaissances
                    et des discussions sur les tendances actuelles du marché et les meilleures pratiques en matière de
                    commerce électronique.
                    <br />
                    L'objectif final de cette formation serait de permettre aux apprenants de créer un site web commercial
                    fonctionnel, d'en assurer la gestion quotidienne, de maximiser son potentiel de vente et d'améliorer
                    l'expérience utilisateur pour les clients.
                </div>
                <div class="col-lg-8 col-md-12 w-50">
                    <img src="{{ asset('goethe/informatique/Informatique2.gif') }}" class="w-75" alt="">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 w-50">
                    <img src="{{ asset('goethe/informatique/informatique.gif') }}" class="w-75" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
                    <div class="bg-white mt-3 mb-5 fs-5" style="color:black">
                        Objectif de la formation :
                    </div>
                    <div class="row gy-2 gx-4 mb-5">
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i> Acquérir les compétences nécessaires
                                pour créer, gérer et optimiser un site web commercial efficace et rentable.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Comprendre les principes de base du
                                développement de sites web, les langages de programmation nécessaires, les stratégies de
                                marketing en ligne, les techniques de référencement naturel, l'analyse de données et les
                                tests de site.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Apprendre à assurer la sécurité du site
                                et des données des clients..
                            </p>
                        </div>
                        <div class="col-sm-10">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Créer un site web commercial qui attire
                                et fidélise les clients.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Générer des ventes et contribuer au succès global de l'entreprise.
                            </p>
                        </div>
                        {{-- <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Assurer une présentation professionnelle
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Préparer les tests d’allemand DaF, DSH, WiDaf
                                .
                            </p>
                        </div> --}}
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
