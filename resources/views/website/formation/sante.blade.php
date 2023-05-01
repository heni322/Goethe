@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation Paramédical
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 ">
                    <img src="{{ asset('goethe/paramedical/paramédical2cf.gif') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
                    <img src="{{ asset('goethe/paramedical/paramédical3cf.gif') }}" class="w-100" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 fs-6 col-md-12 w-100">
                    C’est peu dire que le secteur de la santé est vaste ! Plus d’un million de personnes y travaillent
                    quotidiennement, occupant des postes très divers.

                    Chirurgien, ostéopathe, mais aussi gestionnaire d’une structure de santé : un vaste choix s’offre à
                    vous, en fonction de votre personnalité et de vos aspirations professionnelles.<br />
                    Ne s’engage pas dans le secteur de la santé qui veut. Il faut une véritable passion, une volonté de fer,
                    presque une vocation pour exercer un métier médical ou paramédical. En atteste la difficulté des études,
                    notamment en fac de médecine réputée pour ne pas être tendre avec les étudiants. Le secteur ne s’arrête
                    pas aux médecins et regroupe une multitude de métiers allant des plus connus (infirmier,
                    kinésithérapeute, sage-femme) aux moins connus (ostéopathe, chiropraticien). Aussi, avant de choisir
                    votre voie, il est important de connaître l’ensemble de ces professions et des formations qui y mènent.
                    C’est en tout cas l’objectif de ce guide des métiers de la santé qui passe le secteur à la loupe. Il
                    répertorie en détail les activités du médical et paramédical, les cursus et diplômes mais aussi les
                    possibilités d’exercice (à l’hôpital, en libéral, dans la recherche ou l’humanitaire). Des témoignages
                    et conseils de professionnels s’ajoutent à la description pour vous aider à décider en toute
                    connaissance de cause de vous orienter ou non dans cette voie.
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 w-50">
                    <img src="{{ asset('goethe/paramedical/paramédicalcf.gif') }}" class="w-75" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
                    <div class="bg-white mt-3 mb-5 fs-5" style="color:black">
                        Objectif de la formation :
                    </div>
                    <div class="row gy-2 gx-4 mb-5">
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Reconnaitre les signes cliniques et les
                                signes d’alerte d’une insuffisance cardiaque.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Aider le patient à agir sur les facteurs
                                de cause.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Connaitre les traitements de
                                l’insuffisance cardiaque.
                            </p>
                        </div>
                        <div class="col-sm-10">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Maitriser le dispositif du programme de
                                retour à domicile après hospitalisation : surveillance clinique et suivi.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Être dans une démarche éducative quant à l’observance thérapeutique et aux règles
                                hygiéno-diététiques notammente
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Rendre le patient autonome et contribuer à son maintien en santé et à améliorer sa qualité
                                de vie en adoptant une posture éducative
                                .
                            </p>
                        </div>
                        {{-- <div class="col-sm-12">
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
@endsection
