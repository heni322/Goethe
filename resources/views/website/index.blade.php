@extends('layouts.main')
@php
    $activePage = 'index';
@endphp
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" style="height: 800px">
                <img class="img-fluid" src="img/lumiere.jpg" alt="" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">
                                    Le bon chemin vers l'Allemagne
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Prenez la direction du succès en Allemagne avec notre
                                    accompagnement sur mesure.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" style="height: 800px">
                <img class="img-fluid" src="img/tourist.jpg" alt="" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">
                                    Une solution clé <br />pour vous
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Notre solution clé en main vous garantit une entrée réussie
                                    sur le marché allemand.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" style="height: 800px">
                <img class="img-fluid" src="img/student.jpg" alt="" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">
                                    Processus de planification de carrière en Allemagne
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Un process clair pour votre carrière en Allemagane. Nous
                                    offrons un accompagnement personnalisé et des conseils
                                    d'experts pour vous aider à définir votre plan de carrière,
                                    à identifier les opportunités professionnelles pertinentes
                                    en Allemagne et à élaborer une stratégie efficace pour vous
                                    permettre d'atteindre vos objectifs.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
                    <div class="col-md-6 mt-4 mt-lg-0 h-100 w-100">
                        <div class="h-banner">
                            <svg class="absolute-centered w-100" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 648 616" style="enable-background: new 0 0 648 616" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #f8f9fa;
                                    }
                                </style>
                                <path class="st0 w-100"
                                    d="M617,425.6C538.8,622,285.4,656.9,91.2,571.9c-141-61.7-71.5-182.7-89.3-353C-18.1,28,123.4-22,295.5,8.1            C486,41.5,692.9,235,617,425.6z">
                                </path>
                                <g>
                                    <defs>
                                        <path id="banner-11"
                                            d="M644.9,316.5c-30.8,189.2-243.1,270.7-426.7,234.3C84.9,524.3,122.2,403.5,75,256.4                C22,91.6,134.9,19.1,289.1,11.4C459.9,2.9,674.8,132.7,644.9,316.5z">
                                        </path>
                                    </defs>
                                    <clipPath id="banner-12">
                                        <use xlink:href="#banner-11" style="overflow: visible"></use>
                                    </clipPath>
                                    <g style="clip-path: url(#banner-12)">
                                        <image style="overflow: visible" width="560" height="560" class="w-100"
                                            xlink:href="img/pexels-sora-shimazaki-5669603.jpg"></image>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">
                        About Us
                    </h6>
                    <h1 class="mb-4">Go Admi</h1>
                    <p class="mb-4 fs-6">
                        Est votre meilleur accompagnant tout au long de votre chemin !
                        Nous offrons une solution unique pour les personnes qui souhaitent
                        poursuivre une carrière professionnelle en Allemagne.
                    </p>
                    <p class="mb-4 fs-6">
                        Nos consultants experts vous guideront, nos coachs de haut niveau
                        vous prépareront et nos agents qualifiés placeront chacun d’entre
                        vous.
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Carrière en
                                Allemagne.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Travailler
                                en Allemagne.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Opportunités en Allemagne.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>Migration
                                facile Allemagne.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 fs-6">
                                <i class="fa fa-arrow-right text-primary me-2"></i>
                                Services facile pour la formation ou le travail en allemangne
                                .
                            </p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-university text-primary mb-4"></i>
                            <h5 class="mb-3">Formation professionnelle en Allemagne</h5>
                            <p>
                                Un système de formation professionnelle qui combine
                                l'apprentissage pratique en entreprise avec des cours
                                théoriques dans des établissements d'enseignement
                                professionnels.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-file-alt text-primary mb-4"></i>
                            <h5 class="mb-3">Contrat de travail en Allemagne</h5>
                            <p>
                                Un accord juridique entre un employeur et un employé qui
                                stipule les termes et les conditions de leur relation de
                                travail. Le contrat de travail doit respecter les lois et les
                                réglementations du travail en vigueur en Allemagne.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <!-- <i class="fa-sharp fa-solid fa-building-columns"></i> -->
                            <i class="fa fa-3x fa-building text-primary mb-4"></i>
                            <h5 class="mb-3">Formation continue pour les entreprises</h5>
                            <p>
                                Un programme de formation destiné à améliorer les compétences
                                et les connaissances des employés d'une entreprise, afin de
                                maintenir leur employabilité et d'augmenter leur productivité.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3 mb-4">
                    Blog
                </h6>
                <!-- <h1 class="mb-5">Nos Formations</h1> -->
            </div>
            <div class="row g-3">
                <!-- <div class="col-lg-7 col-md-6"> -->
                <div class="row g-3">
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/formation.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="secondary fs-3">
                            Suivre des formations permet d'améliorer ses compétences
                        </p>
                        <p class="">
                            Meilleur que la France dans ce domaine, l’Allemagne offre de
                            très nombreuses possibilités d’effectuer des cursus
                            professionnalisants en alternance ou en apprentissage. Cela peut
                            se révéler un moyen utile de financer sa formation. Les cursus
                            de ce type durent habituellement 2 ou 3 ans et donnent lieu à un
                            examen chaque semestre pour vérifier votre niveau
                            d’apprentissage et vos acquis en entreprise. Les alternances
                            concernent les bacs professionnels, les niveaux d’études
                            supérieurs en bac+3 ou bac+5, mais également la fonction
                            publique.
                        </p>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-lg-6 col-md-12">
                        <p class="secondary fs-3">Mettre à jour le CV</p>
                        <p>
                            Actualiser ton CV permet de présenter de manière pertinente et
                            précise ses expériences professionnelles, ses compétences et ses
                            réalisations les plus récentes. En tant que ressortissant
                            étranger, vous devrez également mentionner votre niveau
                            linguistique, ce qui pourra être crucial dans l’obtention d’une
                            place au sein d’une formation en Allemagne.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/cv.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/recrutement.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="secondary fs-3">Le secteur qui recrute</p>
                        <p>
                            Si vous souhaitez à terme trouver un emploi en Allemagne , il
                            est très important de sélectionner les formations porteuses, qui
                            vous permettront de trouver une opportunité professionnelle.
                            Pour cela, renseignez-vous sur le dynamisme du métier ou du
                            secteur que vous visez. Par exemple, les secteurs de l’industrie
                            et de la restauration pourraient être très affectés par la crise
                            économique actuelle. Si cela s’avère exact, cela pourrait mettre
                            en jeu vos ambitions professionnelles. Au contraire, certains
                            secteurs sont fortement aidés par le gouvernement allemand et
                            cela pourra jouer en votre faveur. Des dispositifs ont notamment
                            été mis en place pour aider les ressortissants français.
                        </p>
                    </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Formation
                </h6>
                <h1 class="mb-5">Nos Formations</h1>
            </div>
            <div class="row justify-content-start mt-5 mb-4">
                <div class="col-lg-12">
                    <h2 class="text-bold" style="color: #146c94">
                        FORMATION EN TUNISIE
                    </h2>
                </div>
                <div class="">
                    <p class="fs-5 fw-semibold text-start secondary">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Notre mission est d'aider les professionnels à obtenir la
                        reconnaissance de leur diplôme en Allemagne afin qu'ils puissent
                        poursuivre leur carrière dans leur domaine de spécialité. Nous
                        nous préparons linguistiquement B2 et nous nous occupons du
                        processus d’équivalence des diplômes dans son intégralité.
                    </p>
                    <p class="fs-5 fw-semibold text-start secondary">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        Nous sommes fiers de notre engagement envers nos clients et notre
                        détermination à les aider à réussir leur projet professionnel en
                        Allemagne.
                    </p>
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item wow text-center">
                    <img src="img/nurse.jpg" style="height: 534px" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.4)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h5 class="text-white text-uppercase animated" style="margin-top: 100%">
                                    infirmier
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow text-center">
                    <img src="img/ingenieur.jpg" style="height: 534px" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.4)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h5 class="text-white text-uppercase animated" style="margin-top: 100%">
                                    Ingénieur
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center wow zoomIn">
                    <img src="img/marketing.jpg" style="height: 534px" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.2)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h5 class="text-white text-uppercase animated" style="margin-top: 100%">
                                    Marketing
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow text-center">
                    <img src="img/paramedical.jpg" style="height: 534px" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.2)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h5 class="text-white text-uppercase animated" style="margin-top: 100%">
                                    Paramédical
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow text-center">
                    <img src="img/medecin.jpg" style="height: 534px" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.2)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h5 class="text-white text-uppercase animated" style="margin-top: 100%">
                                    Médecin
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center wow">
                    <img src="img/techniciens.jpg" style="height: 534px" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.2)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h5 class="text-white text-uppercase animated" style="margin-top: 100%">
                                    techniciens
                                </h5>
                            </div>
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
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        var $carousel = $(".owl-carousel");
        $carousel.owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            slideTransition: "linear",
            autoplayTimeout: 10000 /*(ms you want)*/ ,
            loop: true,
            autoplayHoverPause: false,
            center: true,
        });

        setTimeout(() => {
            var carouselData = $carousel.data();
            var carouselOptions = carouselData["owl.carousel"].options;
            carouselOptions.autoplayTimeout = 10000;
            $carousel.trigger("refresh.owl.carousel");
        }, 10000);
    </script>
    <!-- Testimonial End -->
@endsection
