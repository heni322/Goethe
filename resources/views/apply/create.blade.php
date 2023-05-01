@extends('layoutsJob.main')
@section('job')

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Add New Job</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('applyCrud.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>jobs Name:</strong>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="jobs Name">
                                                    @error('name')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Job Position:</strong>
                                                    <input type="position" name="position" class="form-control"
                                                        placeholder="Jobs Position">
                                                    @error('position')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Type de temps pour Travail:</strong>
                                                    <select name="type" class="form-control">
                                                        <option value="Temps plein">Temps plein</option>
                                                        <option value="Temps partiel">Temps partiel</option>
                                                        {{-- <option value="lux">Luxury</option> --}}
                                                    </select>
                                                    @error('type')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Salaire:</strong>
                                                    <input type="number" name="salary" class="form-control"
                                                        placeholder="salaire for job">
                                                    @error('salary')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Date Line:</strong>
                                                    <input type="date" name="dateLine" class="form-control"
                                                        placeholder="salaire for job">
                                                    @error('dateLine')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <label class="form-group">
                                                    <strong>attacher image:</strong>
                                                    <input type="file" name="image" class="form-control" />
                                                    @error('image')
                                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </div>

                                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('title', 'Gohte Académie | Add New Job')
