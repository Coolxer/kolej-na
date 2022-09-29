@vite('resources/sass/layouts/landing/_section.scss')

{{-- full width container (provides full background color on big devices) --}}
<section id="advantages" @class(['section', 'section--dark' => $attributes->dark])>
    {{-- container limited to 1280px (max-width) --}}
    <div class="section__container">
        {{--  main box including informations (header and text) --}}
        <div class="section__informations">
            <h2 class="section__header">{{ $attributes->ititle }}</h2>
            <article class="section__article">
                @foreach ($attributes->sentences as $sentence)
                    <p class="section__paragraph">
                        {{ $sentence }}
                    </p>
                @endforeach
            </article>
        </div>

        {{--  section image wrapper --}}
        <div @class([
            'section__image',
            'section__image--left' => $attributes->imageOnLeftSide,
            'section__image--right' => !$atributes->imageOnLeftSide,
        ])>

            {{ $image }}
        </div>
    </div>
</section>
