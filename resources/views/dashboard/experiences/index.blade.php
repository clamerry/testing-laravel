@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h3 class="text-capitalize">My Portofolio</h3>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/portofolios/create" class="btn btn-primary mb-3">Add New Experience</a>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Experience</h3>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date and time</th>
                                <th>Description</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($portofolios as $porto)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $porto->title }}</td>
                                    <td>{{ $porto->category->name }}</td>
                                    <td></td>
                                    <td>
                                        <a href="/dashboard/portofolios/{{ $porto->slug }}" class="badge bg-primary"><span
                                                data-feather="eye"></a>
                                        <a href="/dashboard/portofolios/{{ $porto->slug }}/edit"
                                            class="badge bg-success"><span data-feather="edit-3"></a>
                                        <form action="/dashboard/portofolios/{{ $porto->slug }}" method="post"
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
                        </tbody> --}}
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Date and time</th>
                                <th>Description</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
