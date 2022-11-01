@vite('resources/sass/common/components/button.scss')

@props(['secondary' => false, 'small' => false])

<div
    {{ $attributes->class(['button', 'button--secondary' => $secondary, 'button--small' => $small]) }}>
    {{ $slot }}
</div>
