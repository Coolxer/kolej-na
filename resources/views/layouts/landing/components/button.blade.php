@vite('resources/sass/layouts/landing/components/button.scss')

@props(['secondary' => false, 'big' => false, 'className' => ''])

<div
    class="button {{ $secondary ? 'button--secondary' : '' }} {{ $big ? 'button--big' : '' }} {{ $className }}">
    {{ $slot }}
</div>
