@vite('resources/sass/layouts/landing/components/logo.scss')

@props(['className' => ''])

<a href="#" class="logo {{ $className }}">
    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
</a>
