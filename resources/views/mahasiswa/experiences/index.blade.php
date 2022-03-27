@extends('lte.app')

@section('page_content')
    @if (auth()->user()->role == 'mahasiswa')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h3 class="text-capitalize">My Experience</h3>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive col-lg-12">
            <a href="/mahasiswa/experiences/create" class="btn btn-success mb-3">Add New Experience</a>

            <div class="table-responsive col-lg-12">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header" style="background-color: darkgray">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Job Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($experiences as $exp)
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>{{ $loop->iteration }}</td>
                                            <td style="display: none" class="exp_id">{{ $exp->id }}</td>
                                            <td style="display: none" class="exp_desc">{{ $exp->description }}</td>
                                            <td>{{ $exp->start_date }}</td>
                                            <td>{{ $exp->end_date }}</td>
                                            <td>{{ $exp->title }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#modal-default{{ $exp->id }}">
                                                    View
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modal-default{{ $exp->id }}">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Description</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>{!! $exp->description !!}</p>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            </td>
                                            <td>
                                                {{-- <a href="/mahasiswa/experiences/{{ $exp->id }}">
                                                <i class="nav-icon fas fa-eye   "></i></a> --}}
                                                <a href="/mahasiswa/experiences/{{ $exp->id }}/edit">
                                                    <i class="nav-icon fas fa-edit"></i></a>
                                                <form action="/mahasiswa/experiences/{{ $exp->id }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="bg-danger border-0"
                                                        onclick="return confirm('Are you sure?')"><i
                                                            class="nav-icon fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        @endif
    @endsection
