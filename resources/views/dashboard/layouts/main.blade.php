<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('template/dashboard/css/style.css') }}" rel="stylesheet" />
    <!-- {{-- Trix Editor --}} -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <!-- {{-- Command This to Display Button Attach File --}} -->
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

    </style>

    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

</head>


<body id="page-top">

    @include('dashboard.layouts.sidebar')

    <main class="col-md-9 col-lg-12 px-md-4" style="background-color: whitesmoke;">
        @yield('container')
    </main>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>

    <!-- Core theme JS-->
    <script src="{{ url('template/dashboard/js/script.js') }}"></script>

    {{-- JavaScript for Sidebar --}}
    <script src="{{ url('template/sidebar/js/jquery.min.js') }}"></script>
    <script src="{{ url('template/sidebar/js/popper.js') }}"></script>
    <script src="{{ url('template/sidebar/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('template/sidebar/js/main.js') }}"></script>
</body>

</html>
