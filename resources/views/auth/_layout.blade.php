@vite('resources/sass/auth/_layout.scss')

@props(['image' => null, 'form' => null])

<x-layout>
    <div {{ $attributes->merge(['class' => 'auth']) }}>

        <div class="auth__navbar">
            <x-logo class="auth__logo" withBrandName />
        </div>

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
