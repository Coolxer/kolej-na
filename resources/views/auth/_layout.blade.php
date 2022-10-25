@vite('resources/sass/auth/_layout.scss')

@props(['title', 'image' => null, 'form' => null])

<x-layout :title="$title">
    <div {{ $attributes->merge(['class' => 'auth']) }}>

        <nav class="auth__navbar">
            <x-logo class="auth__logo" withBrandName />
        </nav>

        <div class="auth__content">

            <div class="auth__image">
                {{ $image }}
            </div>

            {{ $form }}

            {{ $slot }}
        </div>

        <x-copyright />
    </div>

</x-layout>
