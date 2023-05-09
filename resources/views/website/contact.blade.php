@extends('layouts.main')
@php
    $activePage = 'contact'; // replace with the name of the current page
@endphp
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Contact
                </h6>
            </div>
            <div class="row g-4 mt-5">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-2">
                        N'hésitez pas à <br />
                        nous contacter
                    </h1>
                    <h5>
                        Vous pouvrez nous contacter en remplissant <br />le formulaires
                    </h5>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary mt-4">Bureau</h5>
                            <p class="mb-0">
                                Rue 15 octobre Souk Lahad, Complexe<br />
                                Dorra bloc D, 3ème étage, Sousse, Tunisie
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">23 307 441 / 73 235 204</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                            style="width: 50px; height: 50px">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">info@foursatouk-ila-allemagne.com <span
                                    class="text-primary">/</span>goetheacademie@gmail.com </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form id="myForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" />
                                    <label for="name">Nom et prénom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Your Email" />
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Numéro de télèphone" />
                                    <label for="subject">Numéro de télèphone</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="Subject" />
                                    <label for="subject">Subjet</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                    Envoyer Message
                                </button>
                            </div>
                        </div>
                    </form>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("mpA6BXjzuN-hAXaRj");
        })();
        document
            .getElementById("myForm")
            .addEventListener("submit", function(event) {
                event.preventDefault();
                console.log(event);
                const serviceID = "service_gthctr6";
                const templateID = "template_3vdr8sd";
                // send the email here
                emailjs.sendForm(serviceID, templateID, this).then(
                    (response) => {
                        if (response.status) {
                            window.location.reload();
                        }
                    },
                    (error) => {
                        console.log("FAILED...", error);
                    }
                );
            });
    </script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Contact End -->
@endsection
