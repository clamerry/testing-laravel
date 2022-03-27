@extends('lte.app')

@section('page_content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h3 class="text-capitalize">My Portofolio</h3>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/mahasiswa/projects/create" class="btn btn-secondary mb-3">Add New Project</a>

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
                                    <th>Project Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $pro)
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pro->title }}</td>
                                        <td>{{ $pro->description }}</td>
                                        <td>{{ $pro->image }}</td>
                                        <td>
                                            <a href="/dashboard/projects/{{ $pro->id }}" class="badge bg-primary"><span
                                                    data-feather="eye"></a>
                                            <a href="/dashboard/projects/{{ $pro->id }}/edit"
                                                class="badge bg-success"><span data-feather="edit-3"></a>
                                            <form action="/dashboard/projects/{{ $pro->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        data-feather="trash-2"></button>
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
@endsection
