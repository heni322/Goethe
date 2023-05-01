@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation en mecanique
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 fs-6 col-md-12 w-50 mt-4">
                    Êtes-vous passionné de mécanique ? Cherchez-vous à acquérir des compétences et des connaissances
                    approfondies dans ce domaine en constante évolution ? Notre formation en mécanique est conçue pour
                    répondre à vos besoins et vous fournir une expérience de formation pratique et de qualité supérieure.
                    Avec notre équipe d'experts de l'industrie, vous apprendrez les principes fondamentaux de la mécanique,
                    les normes de sécurité, les technologies émergentes et bien plus encore. <br /> Que vous soyez débutant
                    ou
                    professionnel de la mécanique, notre formation vous permettra de développer les compétences dont vous
                    avez besoin pour exceller dans ce domaine. Vous pourrez vous spécialiser dans des domaines tels que la
                    maintenance automobile, la mécatronique ou la conception de machines. <br> Inscrivez-vous dès maintenant
                    pour
                    découvrir comment vous pouvez faire évoluer votre carrière avec notre formation en mécanique.

                </div>
                <div class="col-lg-6 col-md-12 ml-5 w-50">
                    <img src="{{ asset('goethe/mecanique/image-mecaniquecc.gif') }}" class="w-100" alt="">
                </div>


            </div>
            <div class="row mt-5">
                <div class="col-lg-8 col-md-12 w-50">
                    <img src="{{ asset('goethe/mecanique/mecanique-2cc.gif') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
                    <div class="bg-white mt-3 mb-5 fs-5" style="color:black">
                        Objectif de la formation :
                    </div>
                    <div class="row gy-2 gx-4 mb-5">
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Comprendre les principes fondamentaux de
                                la mécanique et leurs applications pratiques
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Maîtriser les normes de sécurité et les
                                réglementations en vigueur dans le domaine de la mécanique.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Savoir utiliser et entretenir des
                                équipements et des outils mécaniques.
                            </p>
                        </div>
                        <div class="col-sm-10">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Connaître les technologies émergentes et
                                les innovations dans le domaine de la mécanique.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Développer une expertise dans la planification et la réalisation de projets mécaniques.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Acquérir des compétences en communication et en gestion de projet pour travailler
                                efficacement avec les clients, les équipes et les fournisseurs
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
