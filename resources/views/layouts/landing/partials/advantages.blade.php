@vite('resources/sass/layouts/landing/advantages.scss')

@php
$id = 'advantages';

$sellerAdvantages = [
    'Większa kontrola nad listą i biznesem',
    'Sprawne
informowanie klientów',
    'Więcej zadowolonych klientów',
    'Optymalizacja pracy',
    'Oszczędność czasu',
];

$clientAdvantages = [
    'Świadomość postępu lub jego braku',
    'Znajomość aktualnego
statusu zamówenia',
    'Szybkie i wygodne monitorowanie zlecenia',
    'Możliwość
szacowania czasu świadczenia usług innych klientów',
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
                    <img src="{{ Vite::asset('resources/images/illustrations/seller_advantages.svg') }}"
                        alt="">
                </div>
                <x-article :sentences="$sellerAdvantages" :textCenter="true" />
            </div>

            <div class="advantages-wrapper__side">
                <h2 class="section__heading">Korzyści dla klientów</h2>
                <div class='section__image section__image--light'>
                    <img src="{{ Vite::asset('resources/images/illustrations/client_advantages.svg') }}"
                        alt="">
                </div>
                <x-article :sentences="$clientAdvantages" :textCenter="true" />
            </div>
        </div>
    </x-slot:content>
</x-section>
