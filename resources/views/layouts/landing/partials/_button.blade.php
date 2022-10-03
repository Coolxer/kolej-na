@vite('resources/sass/layouts/landing/_button.scss')

@props(['secondary' => false, 'className' => ''])

<div
    class="button {{ $secondary ? 'button--secondary' : '' }} {{ $className }}">
    {{ $slot }}
</div>
