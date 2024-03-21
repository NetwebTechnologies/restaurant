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
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('vendor/nwt-restaurant/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">

<!-- bootstrap TimePicker -->
<link rel="stylesheet" href="{{ asset('vendor/nwt-restaurant/libs/timepicker/bootstrap-timepicker.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/nwt-restaurant/icons/glyphicons/glyphicon.css') }}">
{{-- <!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Include Bootstrap Datepicker CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet"> --}}

<style>
    span.asterick {
        color: red !important;
    }
</style>

@stack(config('restaurant.style'))

