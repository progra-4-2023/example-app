

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>  {{-- nos sirve para imprimir el contenido.--}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
         

        <div class="sidebar">
        @section('sidebar') {{-- nos sirve definir una sección con un contenido predeterminado --}}
            @include('my-layout.my-tiny-menu', ['status' => 'failed']) {{-- datos adicionales --}}
        @show
            </div>
            <div class="content">
        @section('content') {{-- nos sirve definir una sección con un contenido predeterminado --}}
            Este es el content
        @show
            </div>
            </body>
            </html>