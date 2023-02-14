@vite('resources/sass/landing/partials/advantages.scss')

@php
$id = 'advantages';

$dealerAdvantages = [
    'Większa kontrola nad listą i biznesem',
    'Sprawne
informowanie klientów',
    'Więcej zadowolonych klientów',
    'Optymalizacja pracy',
    'Oszczędność czasu',
];

$customerAdvantages = [
    'Świadomość postępu lub jego braku',
    'Znajomość aktualnego
statusu zamówienia',
    'Szybkie i wygodne monitorowanie zlecenia',
    'Możliwość
szacowania czasu świadczenia usług',
    'Oszczędność czasu, nerwów
i pieniędzy',
];
@endphp

<x-section :id="$id" theme="dark">
    <x-slot:content>
        <div class="advantages-wrapper">
            <div class="advantages-wrapper__side">
                <h2 class="section__heading">Korzyści dla sprzedawcy</h2>
                <div class='section__image section__image--light'>
                    <img src="{{ Vite::asset('resources/images/illustrations/dealer_advantages.svg') }}"
                        alt="">
                </div>
                <x-article :sentences="$dealerAdvantages" :textCenter="true" />
            </div>

            <div class="advantages-wrapper__side">
                <h2 class="section__heading">Korzyści dla klientów</h2>
                <div class='section__image section__image--light'>
                    <img src="{{ Vite::asset('resources/images/illustrations/customer_advantages.svg') }}"
                        alt="">
                </div>
                <x-article :sentences="$customerAdvantages" :textCenter="true" />
            </div>
        </div>
    </x-slot:content>
</x-section>
