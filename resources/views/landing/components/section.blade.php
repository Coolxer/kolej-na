@vite('resources/sass/landing/components/section.scss')

@props(['id', 'title' => '', 'theme' => 'light', 'imageOnRight' => false, 'className' => ''])

{{-- full width container (provides full background color on big devices) --}}
<section id={{ $id }} @class([
    'section {{ $className }}',
    'section--dark' => $theme === 'dark',
    'section--color' => $theme === 'color',
])>
    {{-- container limited to 1280px (max-width) --}}
    <div class="section__container">
        {{-- main section content including header and article / cards / info, etc. --}}
        @if (isset($content) && $content != null)
            <div class="section__content">
                @if (strlen($title) > 0)
                    <h2 class="section__heading">{{ $title }}</h2>
                @endif
                {{ $content }}
            </div>
        @endif

        {{-- possible place for left or right side image --}}
        @if (isset($image) && $image != null)
            <div @class(['section__image', 'section__image--right' => $imageOnRight])>
                {{ $image }}
            </div>
        @endif

        {{-- possible place for aside additional content --}}
        @if (isset($subcontent) && $subcontent != null)
            <div class="section__subcontent">
                {{ $subcontent }}
            </div>
        @endif

    </div>
</section>
