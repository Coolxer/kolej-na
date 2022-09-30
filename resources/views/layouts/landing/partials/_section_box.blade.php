@vite('resources/sass/layouts/landing/_section_box.scss')

@props(['onDark' => false, 'title', 'sentences', 'textCenter' => false, 'imagePlacement' => 'left', 'className' => ''])

{{--  main box including informations (header and text) --}}
<div class="section__box {{ $className }}">
    <h2 class="section__heading">{{ $title }}</h2>

    @if ($imagePlacement === 'inner')
        <div @class([
            'section__image',
            'section__image--inner',
            'section__image--light' => $onDark,
        ])>
            {{ $image }}
        </div>
    @endif

    <article @class([
        'section__article',
        'section__article--center' => $textCenter,
    ])>
        @foreach ($sentences as $sentence)
            <p class='section__paragraph' ,>
                {{ $sentence }}
            </p>
        @endforeach
    </article>
</div>

@if ($imagePlacement === 'left' or $imagePlacement === 'right')
    <div @class([
        'section__image',
        'section__image--left' => $imagePlacement === 'left',
        'section__image--right' => $imagePlacement === 'right',
        'section__image--light' => $onDark,
    ])>
        {{ $image }}
    </div>
@endif
