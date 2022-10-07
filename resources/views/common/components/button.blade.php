@vite('resources/sass/common/components/button.scss')

@props(['secondary' => false])

<div {{ $attributes->class(['button', 'button--secondary' => $secondary]) }}>
    {{ $slot }}
</div>
