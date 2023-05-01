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
                                <h2 class="mb-0">All applys</h2>
                                {{-- <div class="ml-auto">
                                    <a href="{{ route('jobsCrud.create') }}" class="btn btn-success"><i
                                            class="fa fa-plus-circle"></i> Add
                                        New</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            @include('jobs._filter')
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>CV</th>
                                        <th>Job Name</th>
                                        {{-- <th>image</th> --}}
                                        {{-- <th width="280px">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if ($count) --}}
                                    @foreach ($applys as $key => $apply)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $apply->name }}</td>
                                            <td>{{ $apply->email }}</td>
                                            <td>{{ $apply->phone }}</td>
                                            <td><a href="{{ $apply->path }}" target="_blank">{{ $apply->path_name }}</a>
                                            </td>
                                            <td>{{ \App\Models\Jobs::find($apply->jobs_id)->name }}</td>
                                            {{-- <td>
                                            <form action="{{ route('applysCrud.destroy', $apply->id) }}" method="Post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            </td>  --}}
                                        </tr>
                                    @endforeach
                                    {{-- @else
                                    <p> No apply found </p>
                                    @endif --}}
                                </tbody>
                            </table>

                            <nav class="mt-4">
                                <ul class="pagination justify-content-center">
                                    {!! $applys->links() !!}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
