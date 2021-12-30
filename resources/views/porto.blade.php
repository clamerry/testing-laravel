{{-- view untuk tiap portofolio --}}

@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $porto->title }}</h2>
                <p>
                    By: <a href="/portofolio?author={{ $porto->author->username }}"
                        class="text-decoration-none">{{ $porto->author->name }}</a>

                </p>
                <div class="position-absolute px-3 py2" style="background-color:rgba(0, 0, 0, 0.5)">
                    <a href="/portofolio?category={{ $porto->category->slug }}"
                        class="text-white text-decoration-none">Category: {{ $porto->category->name }}</a>
                </div>

                @if ($porto->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $porto->image) }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/800x400?{{ $porto->category->name }}" class="img-fluid">
                @endif


                {{-- Data yang memiliki tag html ditampilkan --}}
                <article class="my-3 fs-6">
                    {!! $porto->body !!}
                </article>


                <a href="/portofolio" class="d-block">Back to Portofolio</a>
            </div>
        </div>
    </div>




@endsection
