<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>address ::: user office ::: foodclub</title>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <script src="{{asset('js/app.js')}}" async></script>
        <!-- Styles -->
    </head>
    <body>
    <div class="cbc">
        <div class="main">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        </div>
    </div>


    </body>
</html>
