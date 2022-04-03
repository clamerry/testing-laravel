@extends('lte.app')

@section('page_content')
    <div class="container my-5">
        <h1 class="fs-5 fw-bold my-4 text-center">How to Create Dependent Dropdown in Laravel</h1>
        <div class="row">
            <form action="">
                <div class="mb-3">
                    <label for="fakultas" class="form-label">Pilih Fakultas</label>
                    <select class="form-control" name="fakultas" id="fakultas">
                        <option hidden>Fakultas</option>
                        @foreach ($fakultas as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select class="form-control" name="prodi" id="prodi"></select>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#fakultas').on('change', function() {
                var fakultasID = $(this).val();
                if (fakultasID) {
                    $.ajax({
                        url: {{ '/prodi' }} + fakultasID,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            console.log(fakultasID);
                            // if (data) {
                            //     $('#prodi').empty();
                            //     $('#prodi').append('<option hidden>Choose prodi</option>');
                            //     $.each(data, function(key, prodi) {
                            //         $('select[name="prodi"]').append(
                            //             '<option value="' + key + '">' + prodi.nama + '</option>');
                            //     });
                            // } else {
                            //     $('#prodi').empty();
                            // }
                        }
                    });
                } else {
                    $('#prodi').empty();
                }
            });
        });
    </script>
@endsection
