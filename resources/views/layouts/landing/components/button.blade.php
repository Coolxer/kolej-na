@vite('resources/sass/layouts/landing/components/button.scss')

@props(['secondary' => false, 'className' => ''])

<div
    class="button {{ $secondary ? 'button--secondary' : '' }} {{ $className }}">
    {{ $slot }}
</div>
