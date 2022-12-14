<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="icon" href="{{ asset('images/cropped-logo-feegow-nova-marca-32x32.png') }} " sizes="32x32" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Feegow</title>
    </head>
    <body class="h-screen">

        <div id="app">

            @include('layouts.headers.index')

            @include('scheduling.components.alerts.create-success')
            @include('scheduling.components.alerts.create-failed')

            <main>
                <div class="relative items-top justify-center dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <div class="mt-20 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg  mb-16">
                            <div class="col-md-12 border border-color: rgb(229 231 235)">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <div class="ml-4 text-lg leading-7 font-semibold">@yield('title')</div>
                                    </div>
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

            @include('layouts.footers.index')
        </div>
    </body>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>

    <script src="{{ asset('js/modal-scheduling.js' )}}"></script>
    <script src="{{ asset('js/alert-message.js' )}}"></script>
</html>
