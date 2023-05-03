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

            {{-- <x-job-listing :jobs="$jobs" /> --}}
            <div class="tab-content">

                <div id="tab-1" class="tab-pane fade show p-0 active">
                    @foreach ($jobs as $job)
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded"
                                        src="{{ asset('/storage/' . $job->image) }}" alt=""
                                        style="width: 80px; height: 80px" />
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">{{ $job->name }}</h5>
                                        <span class="text-truncate me-3"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>
                                            {{ $job->position }}</span>
                                        <span class="text-truncate me-3"><i class="fa fa-clock text-primary me-2"></i>
                                            {{ $job->type }}</span>
                                        <span class="text-truncate me-0"><i
                                                class="fa fa-money-bill-alt text-primary me-2"></i>
                                            {{ $job->salary }} euro</span>
                                    </div>
                                </div>

                                <div
                                    class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        <a class="btn btn-primary" data-target="#exampleModalCenter-{{ $job->id }}"
                                            data-toggle="modal" href="#exampleModalCenter-{{ $job->id }}">Apply Now</a>
                                        <div class="modal fade" id="exampleModalCenter-{{ $job->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle-{{ $job->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="exampleModalCenterTitle-{{ $job->id }}">
                                                            Remplir le formulaire
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('website.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="jobs_id" id="job-{{ $job->id }}"
                                                            value="{{ $job->id }}">
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col-md-">
                                                                    <div class="form-floating">
                                                                        <input type="text" name="name"
                                                                            class="form-control" id="name"
                                                                            placeholder="Your Name" />
                                                                        <label for="name">Nom et Prenom</label>
                                                                        @error('name')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-">
                                                                    <div class="form-floating">
                                                                        <input type="email" name="email"
                                                                            class="form-control" id="email"
                                                                            placeholder="Your Email" />

                                                                        <label for="email">Email</label>
                                                                        @error('email')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-">
                                                                    <div class="form-floating">
                                                                        <input type="text" name="phone"
                                                                            class="form-control" id="phone"
                                                                            placeholder="Numéro de télèphone" />

                                                                        <label for="subject">Numéro de télèphone</label>
                                                                        @error('phone')
                                                                            <div class="alert alert-danger mt-1 mb-1">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">CV</span>
                                                                    </div>
                                                                    <input type="file" class="custom-file-input"
                                                                        name="path" id="inputGroupFile02" />

                                                                    @error('path')
                                                                        <span
                                                                            class="text-red-600 text-sm">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                                Fermer
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Postuler
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-truncate"><i class="fa fa-calender-alt text-primary me-2"></i> Date
                                        Line: {{ $job->dateLine }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-center">
                    <button id="load-more-btn" class="btn btn-primary py-3 px-5" data-offset="2"
                        wire:click="loadJobs">More</button>
                </div>

            </div>



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
