{{-- Plantilla --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Components, Tailwind, Livewire together</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Tailwind --}}
        <!-- Styles -->
        @vite('public/css/app.css')

        {{-- Estilos de Livewire --}}
        @livewireStyles
    </head>
    <body>
        @yield('contenido')

        {{-- Scripts de Livewire --}}
        @livewireScripts
    </body>
</html>
