@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation Langues
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 fs-6 col-md-12 w-50">
                    Une <strong> formation en langues </strong> aide les étudiants et les chercheurs d’emploi d’acquérir des
                    compétences
                    linguistique d’une
                    langue vivante nécessaires pour étudier ou travailler a l’étranger.
                    <br />
                    Les <strong> formations courtes</strong> en langues permettent aux employés de progresser dans leur
                    emploi et de
                    collaborer
                    avec des
                    personnes de monde entier, sans interrompre leur activité professionnelle, par des cours hors temps de
                    travail. Pour
                    les entrepreneurs, les <strong> formations accélérées en langues </strong>permet de développer les
                    compétences nécessaires
                    pour
                    promouvoir leurs produis et services sur le marché international.
                    <br />
                    Notre centre de langues à Tunis vous propose aussi de formation en ligne certifiée.

                    Tous nos formations vous permettant de valider vos compétences par un <strong>diplôme reconnu par
                        l’État,</strong> vous
                    obteniez donc
                    à la fin de formation un diplôme homologué et vous permet de passer des certification international en
                    langue donnée
                    (TCF, TOEIC, TOEFL).
                    <br />
                    Nous assurons une cours allemand pour tous types de participants, que vous soyez un étudiant qui
                    souhaite
                    enrichir
                    son CV, un travailleur qui souhaite postuler pour un emploi en Allemagne ou qui souhaite découvrir
                    d’autres
                    cultures
                    <br />
                    Nous proposons divers formation en langue allemande selon votre niveau et besoins. Nous mettons des
                    large
                    choix des
                    programmes de cours allemand adapté à tous les types des participants (au débutant ainsi que des cours
                    avancés)
                </div>
                <div class="col-lg-8 col-md-12 w-50">
                    <img src="{{ asset('goethe/langue/langue-deutsh-n.gif') }}" class="w-75" alt="">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 w-50">
                    <img src="{{ asset('goethe/langue/langue.gif') }}" class="w-75" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
                    <div class="bg-white mt-3 mb-5 fs-5" style="color:black">
                        Objectif de la formation :
                    </div>
                    <div class="row gy-2 gx-4 mb-5">
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Prononciation en
                                allemand.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Apprendre le grammaire de langue
                                allemande.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Pouvoir communiquer à l’oral et l’écrit
                                en langue allemande.
                            </p>
                        </div>
                        <div class="col-sm-10">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Consolider les bases linguistiques :
                                structures et grammaticales et expressions types.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Savoir exprimer clairement une idée
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
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
@endsection
