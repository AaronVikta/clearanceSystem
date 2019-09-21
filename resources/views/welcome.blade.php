<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'UNN Clearance Portal') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: green;
                font-family: 'Nunito', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color: green;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 300;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">

            <div class="row">
              <div class="col-md-12 mb-5">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
              </div>
              <div class="col-md-12 mb-5 mt-3">
                <div class="content">
                    <div class="title">
                        UNN Clearance Portal
                    </div>

                    <div class="links mb-5">
                        <a href="/home">Profile</a>
                        <a href="/startclearance">Status</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4">
                <h3 class="text-center mb-4">Mission Statement</h3>
                <p class="pl-4 pr-4">
                  To place the University of Nigeria in the forefront of Research and Development,
                  Innovation and Knowledge Transfer and Human Resource Development in the global
                  acdemic terrain, while promoting the core values which will ensure the restoration
                  of the dignity of man.
                </p>
              </div>
              <div class="col-md-4">
                <h3 class="mb-4 text-center">Vision Statement</h3>
                <p class="pl-4 pr-4">
                  To create a functional, globally competitive and research focused University of Nigeria
                  which is not just an ivory tower, but responsive to needs of society while delivering
                  world class Education and Knowledge
                </p>
              </div>
              <div class="col-md-4">
                <h3 class="mb-4 text-center">Motto</h3>
                <p class="text-center">To Restore the Dignity of Man</p>
              </div>
            </div>
        </div>
    </body>
</html>
