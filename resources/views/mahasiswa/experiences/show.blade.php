@extends('lte.app')

@section('page_content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $experiences->title }}</h2>
                <a href="/mahasiswa/experiences" class="btn btn-primary"><span data-feather="arrow-left"></span> Back</a>

                {{-- <a href="" class="btn btn-success"><span data-feather="edit-3"></span> Edit</a> --}}

                {{-- <form action="/dashboard/portofolios/{{ $porto->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2">Delete</button>
            </form> --}}

                {{-- @if ($porto->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $porto->image) }}" class="img-fluid mt-3">
                </div>
                @else
                    <img src="https://source.unsplash.com/800x400?{{ $porto->category->name }}" class="img-fluid mt-3">

                @endif --}}


                {{-- Data yang memiliki tag html ditampilkan --}}
                <article class="my-3 fs-6">
                    {!! $experiences->description !!}
                </article>

            </div>
        </div>
    </div>

@endsection
