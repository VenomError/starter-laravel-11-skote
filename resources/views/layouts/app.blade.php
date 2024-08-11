<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-metadata.meta />
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
    <x-metadata.styles>
        @stack('styles')
    </x-metadata.styles>
</head>

<body>

    {{ $slot }}
    @livewireScripts
    <x-metadata.scripts>
        @stack('scripts')
    </x-metadata.scripts>
</body>

</html>