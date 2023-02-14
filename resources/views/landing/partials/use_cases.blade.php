@vite('resources/sass/landing/partials/use_cases.scss')

@php
$id = 'use-cases';
$title = 'Przykłady użycia';
$sentences = [
    'Kolejka zamówień węgla lub drewna opałowego',
    'Kolejka zamówień
maszyn',
    'Kolejka zamówień samochodów',
    'Kolejka do remontu u fachowca',
    'Kolejka do lekarza',
];
$others = '... i wiele innych sytuacji, gdzie występuje problem oczekiwania z
powodów deficytowych lub długotrwałego procesu realizacji.';
@endphp

<x-section :id="$id" :title="$title" imageOnRight class="use-cases">
    <x-slot:content>
        <x-article :sentences="$sentences" :textCenter="true" />

    </x-slot:content>

    <x-slot:subcontent>
        <p class="section__paragraph use-cases__other-sentence">
            {{ $others }}
        </p>
    </x-slot:subcontent>

    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/use_cases.svg') }}"
            alt="">
    </x-slot:image>

</x-section>
