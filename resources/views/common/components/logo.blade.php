@vite('resources/sass/common/components/logo.scss')

@props(['dark' => false])

<a href="/" {{ $attributes->merge(['class' => 'logo']) }}>
    @if ($dark)
        <img src="{{ Vite::asset('resources/images/logo_dark.svg') }}"
            alt="">
    @else
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
    @endif
</a>
