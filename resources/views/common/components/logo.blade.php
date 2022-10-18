@vite('resources/sass/common/components/logo.scss')

@props(['scrollTo' => false, 'dark' => false, 'withBrandName' => false])

<a href="{{ $scrollTo ? 'javascript:scroll()' : '/' }}"
    {{ $attributes->merge(['class' => 'logo']) }}>
    @if ($dark)
        <img src="{{ Vite::asset('resources/images/logo_dark.svg') }}"
            alt="">
    @else
        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
    @endif

    @if ($withBrandName)
        <span @class(['logo__name', 'logo__name--dark' => $dark])>Kolej-na</span>
    @endif
</a>
