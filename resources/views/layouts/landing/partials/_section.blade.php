@vite('resources/sass/layouts/landing/_section.scss')

@props(['id', 'dark' => false, 'className' => ''])

{{-- full width container (provides full background color on big devices) --}}
<section id={{ $id }} @class(['section', 'section--dark' => $dark])>
    {{-- container limited to 1280px (max-width) --}}
    <div class="section__container {{ $className }}">
        {{ $slot }}
    </div>
</section>
