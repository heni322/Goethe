<div class="tab-content">

    <div id="tab-1" class="tab-pane fade show p-0 active">
        @foreach ($jobs as $job)
            <div class="job-item p-4 mb-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('/storage/' . $job->image) }}"
                            alt="" style="width: 80px; height: 80px" />
                        <div class="text-start ps-4">
                            <h5 class="mb-3">{{ $job->name }}</h5>
                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                {{ $job->position }}</span>
                            <span class="text-truncate me-3"><i class="fa fa-clock text-primary me-2"></i>
                                {{ $job->type }}</span>
                            <span class="text-truncate me-0"><i class="fa fa-money-bill-alt text-primary me-2"></i>
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
                                            <h5 class="modal-title" id="exampleModalCenterTitle-{{ $job->id }}">
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
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" placeholder="Your Name" />
                                                            <label for="name">Nom et Prenom</label>
                                                            @error('name')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-">
                                                        <div class="form-floating">
                                                            <input type="email" name="email" class="form-control"
                                                                id="email" placeholder="Your Email" />

                                                            <label for="email">Email</label>
                                                            @error('email')
                                                                <div class="alert alert-danger mt-1 mb-1">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-">
                                                        <div class="form-floating">
                                                            <input type="text" name="phone" class="form-control"
                                                                id="phone" placeholder="Numéro de télèphone" />

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
                                                        <input type="file" class="custom-file-input" name="path"
                                                            id="inputGroupFile02" />

                                                        @error('path')
                                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
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
        <button id="load-more-btn" class="btn btn-primary py-3 px-5" data-offset="2" wire:click="loadJobs">More</button>
    </div>

</div>
