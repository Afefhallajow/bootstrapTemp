<!DOCTYPE html>
<html dir="{{app()->getLocale()=='ar' ? "rtl":"ltr"}}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'bootstrap') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- FontIcon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
<!-- style -->
@if(app()->getLocale() =='ar')
    <link rel="stylesheet" href="{{asset('temp/css/rtl.css')}}" />
    @else
    <link rel="stylesheet" href="{{asset('temp/css/ltr.css')}}" />
    @endif


    <style>

    input:focus {
        box-shadow: none !important;
    }

</style>
    <!-- Scripts -->
</head>
<body  >


@include('layouts.mylayouts.header')
@include('layouts.mylayouts.sidbar')

<div class="main-content">
<div  style="" class="container-fluid  ">

   <p class="text-dark">afefefaef</p>
    <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>  <p class="text-dark">afefefaef</p>
    @yield('content')
</div>
</div>
@include('layouts.mylayouts.js')

</body>
