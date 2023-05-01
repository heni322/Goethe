@extends('layoutsJob.main')
@section('job')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit job</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('jobsCrud.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        {{-- @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif --}}
        {{ $jobs->id }}
        <form action="{{ route('jobsCrud.update', $jobs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Name:</strong>
                        <input type="text" name="name" value="{{ $jobs->name }}" class="form-control"
                            placeholder="Company name">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Job Position:</strong>
                        <input type="position" name="position" value="{{ $jobs->position }}" class="form-control"
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
                        <span>
                            @php
                                $formattedValue = number_format(floatval($jobs->salary), 2, '.', ',');
                            @endphp
                        </span>
                        <input type="number" name="salary" value="{{ $formattedValue }}" class="form-control"
                            placeholder="salaire for job">
                        @error('salary')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date Line:</strong>
                        <input type="date" name="dateLine" value="{{ $jobs->dateLine }}" class="form-control"
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
@endsection
