@extends('dashboard.layouts.main')

@section('container')
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
                <img src="{{ url('img/ren.jpg') }}" alt="" width="120" class="img-thumbnail rounded-circle"
                    style="border: 0px;">
                <div class="card-body" style="padding:1rem 3rem">
                    <label for="fakultas" class="form-label">Fakultas Teknik</label>
                    <label for="jurusan" class="form-label">S1-Teknik Komputer</label>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="namalengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" style="width: 50%; height:20%">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat email</label>
                            <input type="email" class="form-control" id="email" style="width: 50%; height:20%">
                        </div>
                        <div class="mb-3">
                            <label for="kontak" class="form-label">Kontak</label>
                            <input type="text" class="form-control" id="kontak" style="width: 50%; height:20%">
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 2px">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
