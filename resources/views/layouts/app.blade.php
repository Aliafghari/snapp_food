<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="white">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    {{-- <link href="dist/images/logo.svg" rel="shortcut icon"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- BEGIN: CSS Assets-->
    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="/dist/css/app.css" />
    @livewireStyles
    <!-- END: CSS Assets-->
    <script src="{{ mix('/js/app.js') }}" defer></script>

</head>
<!-- END: Head -->

<body class="main">
    {{-- <x-jet-banner/> --}}
    @livewire('livewire-toast')
    @livewire('navigation-menu')

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @stack('modals')
    @livewireScripts
    @livewireChartsScripts
    <!-- BEGIN: JS Assets-->
    {{-- <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script> --}}
    <script src="/dist/js/app.js"></script>
    <!-- END: JS Assets-->
    {{-- " type="text/javascript"></script> --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> --}}
    {{-- <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script> --}}
</body>

</html>
