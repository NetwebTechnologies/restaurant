{{-- Bootstrap script --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> --}}
<script src="{{ asset('vendor/nwt-restaurant/libs/bootstrap/bootstrap.min.js') }}" ></script>


{{-- Script --}}
<script src="{{ asset('vendor/nwt-restaurant/js/main.js') }}"></script>

@stack(config('restaurant.script'))
