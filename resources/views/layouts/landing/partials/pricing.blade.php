@vite('resources/sass/layouts/landing/pricing.scss')

@php
$id = 'pricing';
$title = 'Cennik';

//$cardTitles = ['Bazowy', 'Rozszerzony', 'Pro'];
//$cardPrices = [49.99, 79.99 . 129.99];

$baseSentences = ['Warto', '3 kolejki', 'Bedzie git'];

@endphp

<x-section :id="$id" className="pricing">
    <h2 class="section__heading">{{ $title }}</h2>
    <div class="pricing__box">
        <x-pricing-card title="Plan bazowy" price="49" :sentences="$baseSentences" />
        <x-pricing-card title="Plan rozszerzony" price="79"
            :sentences="$baseSentences" />
        <x-pricing-card title="Plan PRO" price="99" :sentences="$baseSentences" />
    </div>
</x-section>
