@extends('layouts.main')
@php
    $activePage = 'jobs';
@endphp
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 background-img">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">
                        Recrutement
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- list jobs start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Nos offres
                </h6>
            </div>

            <x-job-listing :jobs="$jobs" />


        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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
    {{-- <script>
        $(document).ready(function() {
            $(".job-item").slice(0, 4).show();
            $("#loadMore").on("click", function(e) {
                e.preventDefault();
                $(".job-item:hidden").slice(0, 4).slideDown();
                if ($(".job-item:hidden").length == 0) {
                    $("#loadMore").text("No job-item").addClass("nojob-item");
                }
            });

        })
    </script> --}}

    <!-- list jobs end -->
@endsection
