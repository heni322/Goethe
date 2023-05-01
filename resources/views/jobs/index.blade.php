@extends('layoutsJob.main')
@section('title', 'Gohte Académie | All Jobs')
@section('job')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">All Jobs</h2>
                                <div class="ml-auto">
                                    <a href="{{ route('jobsCrud.create') }}" class="btn btn-success"><i
                                            class="fa fa-plus-circle"></i> Add
                                        New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('jobs._filter')
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>position</th>
                                        <th>type</th>
                                        <th>salary</th>
                                        <th>dateLine</th>
                                        <th>image</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($jobs))
                                        @foreach ($jobs as $key => $job)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $job->name }}</td>
                                                <td>{{ $job->position }}</td>
                                                <td>{{ $job->type }}</td>
                                                <td>{{ $job->salary }}</td>
                                                <td>{{ $job->dateLine }}</td>
                                                <td><img src="{{ asset('/storage/' . $job->image) }}" alt=""
                                                        style="width:50px; height:50px" /></td>
                                                <td>
                                                    <form action="{{ route('jobsCrud.destroy', $job->id) }}" method="Post">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('jobsCrud.edit', $job->id) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p> No job found </p>
                                    @endif
                                </tbody>
                            </table>

                            <nav class="mt-4">
                                <ul class="pagination justify-content-center">
                                    {!! $jobs->links() !!}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
