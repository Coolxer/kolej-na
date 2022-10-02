@vite('resources/sass/layouts/landing/pricing.scss')

@php
$id = 'pricing';
$title = 'Cennik';

$baseSentences = ['Warto', '3 kolejki', 'Bedzie git'];

@endphp

<x-section :id="$id" :title="$title" className="pricing">
    <x-slot:content>
        <div class="pricing__box">
            <x-pricing-card title="Plan bazowy" price="49"
                :sentences="$baseSentences" />
            <x-pricing-card title="Plan rozszerzony" price="79"
                :sentences="$baseSentences" />
            <x-pricing-card title="Plan PRO" price="99" :sentences="$baseSentences" />
        </div>
    </x-slot:content>
</x-section>
