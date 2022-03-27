@extends('lte.app')

@section('page_content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">New Mahasiswa</h1>
    </div>

    <div class="col-md-8">
        <form method="post" action="/admin/mhs" class="mb-4" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control @error('nama_mhs') is-invalid @enderror" id="nama_mhs"
                    name="nama_mhs" required value="{{ old('nama_mhs') }}">
                @error('nama_mhs')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                    name="nim" required value="{{ old('nim') }}">
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label">Fakultas</label>
                @error('fakultas')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="fakultas" type="text" class="form-control" name="fakultas" value="{{ old('fakultas') }}">
                {{-- <trix-editor input="fakultas"></trix-editor> --}}

            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                @error('prodi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="prodi" type="text" class="form-control" name="prodi" value="{{ old('prodi') }}">
                {{-- <trix-editor input="prodi"></trix-editor> --}}
            </div>
            <button type="submit" class="btn btn-primary">Add Mahasiswa</button>
        </form>
    </div>
@endsection
