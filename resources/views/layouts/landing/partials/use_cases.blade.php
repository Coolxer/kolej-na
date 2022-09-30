@vite('resources/sass/layouts/landing/use_cases.scss')

@php
$id = 'use-cases';
$title = 'Przykłady użycia';
$sentences = [
    'Kolejka zamówień węgla lub drewna opałowego',
    'Kolejka zamówień
maszyn',
    'Kolejka zamówień samochodów',
    'Kolejka do remontu u fachowca',
];
$others = '... i wiele innych sytuacji, gdzie występuje problem oczekiwania z
powodów deficytowych lub długotrwałego procesu realizacji.';
@endphp

<x-section :id="$id" className="use-cases">
    <x-section-box :title="$title" :sentences="$sentences" :textCenter="true"
        imagePlacement="right">
        <x-slot:image>
            <img
                src="{{ Vite::asset('resources/images/illustrations/use_cases.svg') }}">
        </x-slot:image>
    </x-section-box>

    <p class="section__paragraph use-cases__other-sentence">
        {{ $others }}
    </p>
</x-section>
