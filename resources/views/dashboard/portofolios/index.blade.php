@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Portofolio</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/portofolios/create" class="btn btn-primary mb-3">Add New Portofolio</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portofolios as $porto)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $porto->title }}</td>
                        <td>{{ $porto->category->name }}</td>
                        <td>
                            <a href="/dashboard/portofolios/{{ $porto->slug }}" class="badge bg-primary"><span
                                    data-feather="eye"></a>
                            <a href="/dashboard/portofolios/{{ $porto->slug }}/edit" class="badge bg-success"><span data-feather="edit-3"></a>
                            <form action="/dashboard/portofolios/{{ $porto->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></button>
                            </form>
                            
                        </td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

@endsection
