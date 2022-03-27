@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Achievement</h1>
    </div>

    <div class="col-md-8">
        <form method="post" action="/dashboard/achievements/{{ $achievements->id }}" class="mb-4"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="date" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required
                    value="{{ old('title', $achievements->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="date" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" required value="{{ old('description', $achievements->description) }}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="image" type="hidden" name="image" value="{{ old('image') }}">
                <trix-editor input="image"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

    {{-- <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/portofolios/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        //Command This to Enable Attach File Feature from Trix Editor
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script> --}}
@endsection
