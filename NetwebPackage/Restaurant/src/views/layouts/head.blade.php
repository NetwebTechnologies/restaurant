<title>@yield(config('restaurant.title')) | Restaurant Module</title>

<!-- Bootstrap Links -->
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="{{ asset('vendor/nwt-restaurant/libs/bootstrap/bootstrap.min.css') }}">

<!-- jQuery library -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="{{ asset('vendor/nwt-restaurant/libs/jquery.min.js') }}"></script>

<!-- DataTables CSS -->
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/nwt-restaurant/libs/datatables/datatable.min.css') }}">

<!-- DataTables JS -->
{{-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
<script src="{{ asset('vendor/nwt-restaurant/libs/datatables/datatable.min.js') }}"></script>

<!-- Custom style -->
<link rel="stylesheet" href="{{ asset('vendor/nwt-restaurant/css/style.css') }}">

@stack(config('restaurant.style'))

