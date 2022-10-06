<!DOCTYPE html>
{{-- <html lang="pl"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Wirtualna kolejka deficytowych towarów i długotrwałych usług">
    <meta name="author" content="Łukasz Miłoś, Sebastian Miłoś">

    <title>Kolej-na ...</title>

    @vite('resources/sass/app.scss')
</head>

<body>
    <div id="app-container">
        {{ $slot }}
    </div>
</body>
