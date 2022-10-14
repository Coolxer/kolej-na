@vite('resources/sass/common/components/button.scss')

@props(['secondary' => false, 'big' => false, 'small' => false])

<div
    {{ $attributes->class(['button', 'button--secondary' => $secondary, 'button--big' => $big, 'button--small' => $small]) }}>
    {{ $slot }}
</div>
