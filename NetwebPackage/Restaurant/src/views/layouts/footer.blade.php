{{-- Bootstrap script --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> --}}
<script src="{{ asset('vendor/nwt-restaurant/libs/bootstrap/bootstrap.min.js') }}" ></script>


{{-- Script --}}
<script src="{{ asset('vendor/nwt-restaurant/js/main.js') }}"></script>

@stack(config('restaurant.script'))

{{-- <!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- Include Bootstrap Datepicker JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> --}}


<script src="{{ asset('vendor/nwt-restaurant/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/nwt-restaurant/libs/timepicker/bootstrap-timepicker.min.js') }}"></script>
