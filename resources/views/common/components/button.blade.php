@vite('resources/sass/common/components/button.scss')

@props(['secondary' => false, 'big' => false])

<div
    {{ $attributes->class(['button', 'button--secondary' => $secondary, 'button--big' => $big]) }}>
    {{ $slot }}
</div>
