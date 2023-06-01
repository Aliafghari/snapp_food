<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Restaurant Application">
    <meta name="keywords" content="Snapp, SnappFood, Food, Restaurant, Pizza, Sandwich, Kebab">
    <meta name="author" content="LEFT4CODE">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main overflow-hidden">

    <!-- BEGIN: Content -->
    <div class="content overflow-y-auto">
        <div class="grid grid-cols-12 gap-6">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 w-full sm:flex justify-center">
                    @auth
                        @role('seller')
                            <div class="flex items-center mt-5">
                                <a href="{{ url('/dashboard') }}"
                                    class="btn btn-outline-danger text-indigo-400 font-bold px-2 py-1 h-10 ml-auto text-lg ml-2">GO
                                    TO THE PAGE</a>
                                <span class="btn btn-outline-dark text-indigo-400 font-bold px-2 py-1 h-10 ml-auto text-lg">Hello :
                                    {{ auth()->user()->name }}</span>
                            </div>
                        @endrole


                        @role('superadmin')
                            <div class="flex items-center mt-5">
                                <a href="{{ url('/Admin') }}"
                                    class="btn btn-outline-danger text-indigo-400 font-bold px-2 py-1 h-10 ml-auto text-lg ml-2">Let's
                                    Go!</a>
                                <span
                                    class="btn btn-outline-dark text-indigo-400 font-bold px-2 py-1 h-10 ml-auto text-lg">Hello
                                    {{ auth()->user()->name }}</span>
                            </div>
                        @endrole
                    @else
                        <div class="flex items-center mt-5">
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-primary text-indigo-400 font-bold px-2 py-1 h-10 ml-auto text-lg ml-2">login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-outline-danger text-indigo-400 font-bold px-2 py-1 h-10 ml-auto text-lg ml-2">register</a>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif
            <div class="col-span-12 xxl:col-span-12">
                <div class="grid grid-cols-1 gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->


    <!-- BEGIN: JS Assets-->


    <!-- END: JS Assets-->
</body>

</html>
