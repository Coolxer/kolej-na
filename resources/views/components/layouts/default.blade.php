<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Wirtualna kolejka deficytowych towarów i długotrwałych usług">
    <meta name="author" content="Łukasz Miłoś, Sebastian Miłoś">

    <title>Kolej-na - {{ $title }}</title>

    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="w-screen">
        {{ $slot }}
    </div>
</body>
