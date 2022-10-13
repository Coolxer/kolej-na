@vite('resources/sass/auth/_layout.scss')

<x-layout>
    <div {{ $attributes->merge(['class' => 'auth']) }}>

        <div class="auth__navbar">
            <x-logo class="auth__logo" withBrandName />
        </div>

        <div class="auth__content">
            {{ $slot }}
        </div>

        <x-copyright />
    </div>

</x-layout>
