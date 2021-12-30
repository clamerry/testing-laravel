

@extends('layouts.main')

@section('container')
    <h2 class="md-5">Portofolio Categories</h2>

    <div class="container mt-5">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/portofolio?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/800x800?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-3 fs-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection

