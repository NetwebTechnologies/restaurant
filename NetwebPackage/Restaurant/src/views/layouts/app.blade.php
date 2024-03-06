<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Scripts -->
    <title>@yield('title') | Restaurant Module</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .routes-links ul {
            gap: 10px;
        }
        .routes-links ul li>a {
            color: black;
            text-decoration: none;
            padding: 1px 6px
        }
        .routes-links ul li {
            color: black;
            text-decoration: none;
            padding: 1px;
            border-bottom: 2px solid transparent;
            border-image: linear-gradient(45deg, #1b00ff, #2affef);
            border-image-slice: 1;
        }
        .routes-links ul li:hover {
            background: linear-gradient(45deg, #1b00ff, #2affef);
            text-decoration: none;
            border-radius: 5px;
        }
        .routes-links ul li:hover>a {
            color: white;
        }

        td.action-td {
            display: flex;
            gap: 8px;
        }
        td.action-td .action-btn {
            padding: 1px 8px;
            height: 25px;
        }
        td.status-column .status {
            padding: 2px 8px;
            border-radius: 5px;
            color: white;
            box-shadow: 3px 3px 0px 1px #d1d1d1;
            cursor: pointer;
        }
        input[type=submit] {
            padding: 1px 10px 2px;
        }

        .add-record-btn button {
            float: right;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>


                <div class="routes-links" id="routesLinks">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li><a href="{{ url('/restaurant_types') }}" >Restaurant Type </a></li>
                        {{-- <li><a href="" >Restaurant Category</a></li> --}}
                        <li><a href="{{ url('/restaurant-name') }}" >Restaurant Name</a></li>
                        {{-- <li><a href="" >Restaurant Test</a></li>
                        <li><a href="" >Restaurant List</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row" style="position: relative;">
                    @yield('content')
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/nwt-restaurant/js/main.js') }}"></script>
    @stack('script')

</body>
</html>
