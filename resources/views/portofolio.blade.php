@extends('layouts.main')

@section('container')
    <h1 class="mb-4 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <form action="/portofolio" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


    @if ($portofolio->count())

        <div class="container">
            <div class="row">
                @foreach ($portofolio as $porto)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="position-absolute px-3 py2" style="background-color:rgba(0, 0, 0, 0.5)">
                                <a href="/portofolio?category={{ $porto->category->slug }}"
                                    class="text-white text-decoration-none">{{ $porto->category->name }}</a>
                            </div>
                            @if ($porto->image)
                                <img src="{{ asset('storage/' . $porto->image) }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/800x400?{{ $porto->category->name }}"
                                    class="img-fluid">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $porto->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By: <a href="/portofolio?author={{ $porto->author->username }}"
                                            class="text-decoration-none">{{ $porto->author->name }}</a>
                                        {{ $porto->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $porto->excerpt }}</p>
                                <a href="/portofolio/{{ $porto->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $portofolio->links() }}
    </div>

@endsection
