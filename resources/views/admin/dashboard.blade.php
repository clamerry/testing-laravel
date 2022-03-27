@extends('lte.app')

@section('page_content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h3 style="font-family: Saira Extra Condensed">Welcome back, {{ auth()->user()->name }}</h3>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- View Profile --}}
    
    <div class="card shadow mb-3" style="width: 100%">
        <div class="row g-0">
            <div class="col-sm-4" style="text-align: center; padding: 1.5%;">
                <div class="card-body" style="padding:1rem 3rem">
                    <label for="fakultas" class="form-label">Ini Dashboard admin</label>
                </div>
            </div>
        </div>
    </div>
@endsection

