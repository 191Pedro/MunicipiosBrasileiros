<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Municípios Brasileiros</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-bg-primary dark:bg-bg-primary-dark text-text dark:text-text-dark font-codecpro min-h-dvh grid grid-cols-[auto_1fr]">
        @include('components.header')
        @include('components.sidebar')

        {{-- @yield('content', 'nenhum conteúdo renderizado') --}}

        {{-- @stack('scripts') --}}
    </body>
</html>
