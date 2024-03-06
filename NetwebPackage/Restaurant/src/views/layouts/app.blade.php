<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include(config('restaurant.head'))
</head>
<body>
    <div id="nwt-restaurant-app">
        @include(config('restaurant.navbar'))

        <main class="py-4">
            <div class="container">
                <div class="row" style="position: relative;">
                    @yield(config('restaurant.content'))
                </div>
            </div>
        </main>
    </div>

    <!-- Popup Modal -->
    <div class="common-modal modal fade" id="myModal" tabindex="-1" aria-labelledby="perInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <!-- End Popup Modal -->

    @include(config('restaurant.footer'))

</body>
</html>
