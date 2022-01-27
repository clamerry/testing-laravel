@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 style="font-family: Saira Extra Condensed">Welcome back, {{ auth()->user()->name }}</h3>
    </div>

@endsection
