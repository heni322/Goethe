@extends('layouts.main')
@php
    $activePage = 'courses'; // replace with the name of the current page
@endphp
@section('content')
    <div class="container-xxl py-5 category">
        <div class="container-fluid">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center fs-4 text-primary px-3 mb-4">
                    Formation Tourisme
                </div>
                <!-- <h1 class="mb-5">Courses Categories</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-4 fs-6 col-md-12 w-50 mt-3">
                    Êtes-vous passionné par le voyage et le tourisme ? Cherchez-vous à acquérir des compétences et des
                    connaissances approfondies pour réussir dans l'industrie du tourisme ? Notre formation en tourisme est
                    conçue pour répondre à vos besoins et vous fournir une expérience de formation pratique et de qualité
                    supérieure. <br> Avec notre équipe d'experts de l'industrie, vous apprendrez les compétences nécessaires
                    pour
                    travailler dans des secteurs tels que l'hôtellerie, le transport, la restauration et bien plus encore.
                    Que vous soyez débutant ou professionnel du tourisme, notre formation vous permettra de développer les
                    compétences dont vous avez besoin pour exceller dans ce domaine en constante évolution. Vous pourrez
                    vous spécialiser dans des domaines tels que le tourisme durable, le tourisme culturel ou encore le
                    tourisme d'aventure. Inscrivez-vous dès maintenant pour découvrir comment vous pouvez faire évoluer
                    votre carrière avec notre formation en tourisme.

                </div>
                <div class="col-lg-6 col-md-12 ml-5 w-50">
                    <img src="{{ asset('goethe/tourisme/tourismec.gif') }}" class="w-75" alt="">
                </div>


            </div>
            <div class="row mt-5">
                <div class="col-lg-8 col-md-12 w-50">
                    <img src="{{ asset('goethe/tourisme/tourisme-2c.gif') }}" class="w-75" alt="">
                </div>
                <div class="col-lg-6 col-md-12 w-50">
                    <div class="bg-white mt-3 mb-5 fs-5" style="color:black">
                        Objectif de la formation :
                    </div>
                    <div class="row gy-2 gx-4 mb-5">
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Comprendre les principes fondamentaux du
                                tourisme et ses différentes composantes (hébergement, restauration, transport, attractions,
                                etc.).
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Maîtriser les normes de qualité et les
                                réglementations en vigueur dans l'industrie du tourisme.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Savoir planifier, organiser et vendre des
                                produits et des services touristiques.
                            </p>
                        </div>
                        <div class="col-sm-10">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Connaître les tendances actuelles du
                                tourisme et les évolutions futures de l'industrie.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Acquérir des compétences en communication et en gestion de projet pour travailler
                                efficacement avec les clients, les équipes et les fournisseurs.
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Développer une expertise dans la planification et la réalisation de projets touristiques
                                innovants et rentables
                                .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Préparer les participants à passer les certifications professionnelles dans l'industrie du
                                tourisme
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
