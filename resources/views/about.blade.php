@extends('layouts.main')

<!-- Data ditampilkan dari array routing halaman about di web.php -->
@section('container')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

@endsection
