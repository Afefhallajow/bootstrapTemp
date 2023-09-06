<!DOCTYPE html>
<html  dir="{{app()->getLocale()=='ar' ? 'rtl':'ltr'}}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('title')



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if(app()->getLocale() =='ar')
        <link rel="stylesheet" href="{{asset('flexassests/css/sidbar.css')}}">
        <link rel="stylesheet" href="{{asset('flexassests/css/header.css')}}">
        <link rel="stylesheet" href="{{asset('flexassests/css/content.css')}}">

    @else

        <link rel="stylesheet" href="{{asset('flexassests/ltrcss/header.css')}}">

        <link rel="stylesheet" href="{{asset('flexassests/ltrcss/sidbar.css')}}">
        <link rel="stylesheet" href="{{asset('flexassests/ltrcss/content.css')}}">

    @endif

    <style>

    </style>

    @yield('css')

</head>
<body  style="background-color: #f8f8f8" class="">
@include('flexlayouts.flexheader')
@include('flexlayouts.flexsidbar')

<main class="py-4 content">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
