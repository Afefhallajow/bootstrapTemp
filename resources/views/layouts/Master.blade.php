<!doctype html>
<html dir="{{app()->getLocale()=='ar' ? 'rtl':'ltr'}}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @if(app()->getLocale() =='ar')
        <link rel="stylesheet" href="{{asset('assests/css/sidbar.css')}}">
        <link rel="stylesheet" href="{{asset('assests/css/header.css')}}">
    @else

        <link rel="stylesheet" href="{{asset('assests/ltrcss/header.css')}}">
        <link rel="stylesheet" href="{{asset('assests/ltrcss/sidbar.css')}}">
    @endif
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
   body{
       width: 100%;
       height: 100%;
       background-color: #f8fafc;
   }
   :fullscreen, ::backdrop {
       background-color: rgba(255,255,255,0);
   }

</style>
    <!-- Scripts -->
</head>
<body>
    @include('layouts.header')
    @include('layouts.main-sidbar')

    <main class="py-4">
        @yield('content')
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


    <script>
        /* Get the element you want displayed in fullscreen mode (a video in this example): */
        var elem = document.getElementById("fullscreen");

        /* When the openFullscreen() function is executed, open the video in fullscreen.
        Note that we must include prefixes for different browsers, as they don't support the requestFullscreen method yet */
        function openFullscreen() {
            var elem = document.body;

            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }
    </script>

</body>
</html>
