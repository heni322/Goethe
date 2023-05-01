@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation en Comptabilitié
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 fs-6 col-md-12 w-50">
                    Le (la) « Comptable » centralise et enregistre les données commerciales et financières d’une structure
                    pour établir les comptes selon les normes exigées et les obligations légales. Il contrôle, analyse et
                    rend compte de la situation économique de la structure.
                    <br />
                    En PME, le comptable doit être polyvalent : de la gestion des opérations comptables à la préparation du
                    bilan et du compte de résultat. En cabinet d’expertise, il gère plusieurs dossiers.

                    Dans une grande entreprise, le poste est plus spécialisé : comptabilité générale, clients, fournisseurs…
                    Rigueur et méthode sont des qualités indispensables pour ce métier à responsabilité qui comporte 3
                    dimensions : technique (saisie et révision comptables), organisationnelle (respect des délais, suivi
                    administratif) et relationnelle (gestion de la relation client, présentation des comptes).
                    <br />
                    Les opportunités sont riches et variées en termes de métiers ou débouchés : Comptable, Chef Comptable,
                    Gestionnaire comptable, Comptable unique.

                </div>
                <div class="col-lg-8 col-md-12 w-50">
                    <img src="{{ asset('goethe/gestion/compatbilte.jpg') }}" style="width: 90%" alt="">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 ml-5 w-50">
                    <img src="{{ asset('goethe/gestion/gestion.jpg') }}" style="width: 90%; height:90%" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
                    <div class="bg-white mt-3 mb-5 fs-5" style="color:black">
                        Compétences de métier :
                    </div>
                    <div class="row gy-2 gx-4 ">
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Réaliser des travaux comptables.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Effectuer les états de rapprochements
                                bancaires.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Appliquer le régime fiscal en fonction de
                                la législation.
                            </p>
                        </div>
                        <div class="col-sm-10">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Etablir et comptabiliser la paie (de la
                                collection des données aux déclarations sociales).
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Calculer et enregistrer les amortissements et provisions.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Procéder à l’arrêté des comptes
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Etablir le bilan et compte de résultats
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Calculer le résultat fiscal et l’impôt sur les sociétés
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Etablir le diagnostic financier de l’entreprise
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Réaliser le prévisionnel et élaborer des outils de gestion
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
